<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Login_Controller extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('login_model');
	}
	public function login(){
		$this->load->view('login_view');
	}
	public function loginValidation(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[30]');
		
		if($this->form_validation->run()){
			
			$loginChecker=$this->login_model->db_loginCheck();
			if($loginChecker['error']==0){
				$lid=$loginChecker['lid'];
				$this->session->set_userdata('lid',$lid);
				redirect('doctor_controller/addHospital_view');
			}
			else{
				$this->load->view('login_view');
			}
			
		}
		else{
			$this->load->view('login_view');
		}
		
		
	}
	public function registration(){
		redirect('reg_controller/reg_view');
	}
	
}