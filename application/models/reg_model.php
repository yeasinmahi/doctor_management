<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
	class Reg_model extends CI_Model{
		
		public function selectAll(){
			$query=$this->db->get("dinfo",TRUE);
			return $query->result();
		}
		
		private function _getLid($email){
			// take login Id from login table for forenkey lid at dinfo table 
			$query = $this->db->query("select * from login where `demail`= '".$email."'");
			$lid=NULL;
			if ($query->num_rows() > 0)
			{
			   foreach ($query->result() as $row)
			   {
			      $lid= $row->lid;  
			   }
			}
			return $lid;
		}
		public function db_insert(){
		// receive all data from the registration page
		$first_name=$this->input->post('first_name');
		$last_name=$this->input->post('last_name');
		$email= $this->input->post('email');
		$password= $this->input->post('password');
		
		//insert data into login table
		$login= array(
			'demail' => $email,
			'dpassword' => $password
		);
		$this->db->insert('login',$login);
		
		
		// insert data into dinfo table
		
		$lid=$this->_getLid($email);
		$name= array(
			'dfname' => $first_name,
			'dlname' => $last_name,
			'lid'=> $lid
		);
		$this->db->insert('dinfo',$name);
	}
		
	}