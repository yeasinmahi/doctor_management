<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Model extends CI_Model{
	function __construct() {
		parent::__construct();
		
	}
	
	public function db_loginCheck(){
		$email= $this->input->post('email');
		$password= $this->input->post('password');
		$check= $this->input->post('remember');
		
		$loginChecker=$this->_loginCheck($email,$password);
		return $loginChecker;
				
	}
	private function _loginCheck($email,$password){
		$query = $this->db->query("select * from login where `demail`= '".$email."' and `dpassword`= '".$password."'");
		$lid=NULL;
		$data=NULL;
		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
		      $lid= $row->lid;  
		   }
		   $data= array(
		   	'lid'=>$lid,
		   	'error'=>0
		   );
		   return $data;
		}
		else{
			$data= array(
		   	 'lid'=>$lid,
		   	 'error'=>1
		    );
		    return $data;
		}
	}
}

?>