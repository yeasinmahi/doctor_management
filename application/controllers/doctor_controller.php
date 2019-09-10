<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Doctor_Controller extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Doctor_model');
		$this->load->library('session');
	}
	public function doctorHome_view()
	{
		$this->load->view('doctorHome_view');
	}

	public function addHospital_view()
	{
		$lid= $this->session->userdata('lid');
		if(!$this->session->userdata('lid')){
			redirect('login_controller/login');
		}
		
		if(isset($_POST['addHospital'])){
			$hid=$_POST["hospitalDropdown"];
			$this->Doctor_model->updateHospital($lid,$hid);
		}
		
		$data['hospital']=$this->Doctor_model->db_getHospitalList();
		$data['currentHospital']=$this->Doctor_model->currentHospital($lid);
		$this->load->view('dHeader');
		$this->load->view('addHospital_view',$data);
		$this->load->view('dFooter');
	}
	public function changeName_view()
	{
		$lid= $this->session->userdata('lid');
		if(!$this->session->userdata('lid')){
			redirect('login_controller/login');
		}
		
		if(isset($_POST['UpdateName'])){
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$this->Doctor_model->updateName($lid,$fname,$lname);
		}
		$data['name']=$this->Doctor_model->getName($lid);
		$this->load->view('dHeader');
		$this->load->view('changeName_view',$data);
		$this->load->view('dFooter');
	}
	public function changePassword(){
		$this->load->library('form_validation');
		$data['error']="";
		$data['color']="";
		$lid= $this->session->userdata('lid');
		if(!$this->session->userdata('lid')){
			redirect('login_controller/login');
		}
		
		if(isset($_POST['changePassword'])){
			$cp=$_POST["currentPassword"];
			$p=$_POST["password"];
			$rp=$_POST["rPassword"];
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[30]');
			$this->form_validation->set_rules('rPassword', 'Confirmation Password', 'trim|required|matches[password]');
		
			if($this->form_validation->run()){
				$checkPassword=$this->Doctor_model->checkPass($lid,$cp);
				if($checkPassword){
					$this->Doctor_model->changePassword($lid,$p);
					$data['error']="Successfully Changed";
					$data['color']="green";
				}
				else{
					$data['error']="Your given Current Password is Invalid";
					$data['color']="red";
				}
			}	
		}
		
		$this->load->view('dHeader');
		$this->load->view('changePassword_view',$data);
		$this->load->view('dFooter');
	}
	public function updateContact()
	{
		$error="";
		$color="";
		$lid= $this->session->userdata('lid');
		if(!$this->session->userdata('lid')){
			redirect('login_controller/login');
		}
		
		if(isset($_POST['changeEmail'])){
			$email=$_POST["email"];
			$this->Doctor_model->updateEmail($lid,$email);
			$error="Email updated successfully";
			$color="green";
		}
		if(isset($_POST['changeMobile'])){
			$mobile=$_POST["nMobile"];
			$phone=$_POST["nPhone"];
			if($mobile!=""){
				$this->Doctor_model->updateMobile($lid,$mobile);
				$error="Mobile updated successfully";
				$color="green";
			}
			else if($phone!=""){
				$this->Doctor_model->updateMobile($lid,$phone);
				$error="Mobile updated Error";
				$color="red";
			}
			
		}
		$data['email']=$this->Doctor_model->getEmail($lid);
		$data['mobile']=$this->Doctor_model->getMobile($lid);
		$data['phone']=$this->Doctor_model->getPhone($lid);
		$this->load->view('dHeader');
		$this->load->view('updateContact_view',$data);
		$this->load->view('dFooter');
	}
}