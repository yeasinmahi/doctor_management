<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Reg_Controller extends CI_Controller
{
	function __construct(){
		 parent::__construct();
		 $this->load->library('form_validation');
		 $this->load->model('reg_model');
		 
	}
	public function reg_view()
	{
		$this->load->view('registration_view');
	}
	
	public function reg_db(){
		$this->form_validation->set_rules('first_name', 'First name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last name', 'trim|required');;
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[login.demail');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[30]');
		$this->form_validation->set_rules('password_confirmation', 'Confirmation Password', 'trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->reg_view();
		}
		else
		{
			$this->reg_model->db_insert();
			redirect('home_controller/home_view');
		}
		
	}
	
	
}