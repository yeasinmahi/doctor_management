<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Home_Controller extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}
	
	public function home_view()
	{
		$data['hospital']=$this->getHospitalList();
		$data['special']=$this->getSpecialList();
		if(isset($_POST['search'])){
			$name=$_POST['search'];
			$hid=$_POST["hospitalDropdown"];
			$cid=$_POST["specialDropdown"];
			if($hid=='Select'){
				if($cid=='Select'){
					if($name==""){
						$inputQuery='select * from dinfo';
						$data['doctorInfo']=$this->getDoctorInfo($inputQuery);
						$this->load->view('home_view',$data);
					}
					else{
						$inputQuery='select * from dinfo where dfname or dlname like "%'.$name.'%"';
						$data['doctorInfo']=$this->getDoctorInfo($inputQuery);
						$this->load->view('home_view',$data);
					}
				}
				else
				{
					if($name==""){
						$inputQuery='select * from dinfo where cid="'.$cid.'"';
						$data['doctorInfo']=$this->getDoctorInfo($inputQuery);
						$this->load->view('home_view',$data);
					}
					else{
						$inputQuery='select * from dinfo where dfname or dlname like "%'.$name.'%" and cid="'.$cid.'"';
						$data['doctorInfo']=$this->getDoctorInfo($inputQuery);
						$this->load->view('home_view',$data);
					}
					
				}
			}
			else
			{
				if($cid=='Select'){
					if($name==""){
						$inputQuery='select * from dinfo where hid="'.$hid.'"';
						$data['doctorInfo']=$this->getDoctorInfo($inputQuery);
						$this->load->view('home_view',$data);
					}
					else{
						$inputQuery='select * from dinfo where dfname or dlname like "%'.$name.'%" and hid="'.$hid.'"';
						$data['doctorInfo']=$this->getDoctorInfo($inputQuery);
						$this->load->view('home_view',$data);
					}
				}
				else
				{
					if($name==""){
						$inputQuery='select * from dinfo where hid="'.$hid.'" and cid="'.$cid.'"';
						$data['doctorInfo']=$this->getDoctorInfo($inputQuery);
						$this->load->view('home_view',$data);
					}
					else{
						$inputQuery='select * from dinfo where dfname or dlname like "%'.$name.'%" and hid="'.$hid.'" and cid="'.$cid.'"';
						$data['doctorInfo']=$this->getDoctorInfo($inputQuery);
						$this->load->view('home_view',$data);
					}
					
				}
			}
			
		}
		else{
			$inputQuery='select * from dinfo';
			$data['doctorInfo']=$this->getDoctorInfo($inputQuery);
			$this->load->view('home_view',$data);
		}
		
	}
	public function getDoctorInfo($inputQuery){
		return $this->Home_model->db_getDoctorInfo($inputQuery);
	}
	public function getHospitalList(){
		return $this->Home_model->db_getHospitalList();	
	}
	public function getSpecialList(){
		return $this->Home_model->db_getSpecialList();	
	}
	public function signIn(){
		redirect('login_controller/login');
	}
	public function signUp(){
		redirect('Reg_Controller/reg_view');
	}
	
}