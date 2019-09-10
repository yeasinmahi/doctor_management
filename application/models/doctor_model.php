<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Doctor_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function db_getHospitalList(){
		$query=$this->db->get('dhospital');
		if ($query->num_rows() > 0)
		{
		   $hospital='<select name="hospitalDropdown" class="form-control">';
		   $hospital.= '<option value="Select">Select</option>';
		   foreach ($query->result() as $row)
		   {
		      $hospital.= '<option value="'.$row->hid.'">'.$row->dhospital.'</option>';  
		   }
		   $hospital.='</select>';
		   return $hospital;
		}
		else{
			return $hospital='No Hospital Available Rignt Now';
		}
	}
	public function currentHospital($lid){
		$hospitalName="";
		$query=$this->db->get_where('dinfo',array('lid'=>$lid));
		if ($query->num_rows() > 0)
		{
			$hid=0;
		   foreach ($query->result() as $row)
		   {
		      $hid= $row->hid;
		   }
		   $query2=$this->db->get_where('dhospital',array('hid'=>$hid));
		   if ($query->num_rows() > 0){
			   foreach ($query2->result() as $row)
			   {
			      $hospitalName = $row->dhospital;
			   }
			   return $hospitalName;
		   }
		   else{
		   	return $hospitalName='No Hospital Selected Yet';
		   }
		   
		}
		else{
			return $hospitalName='No Hospital Selected';
		}
	}
	public function updateHospital($lid,$hid){
		$data = array(
               'hid' => $hid
            );

		$this->db->where('lid', $lid);
		$this->db->update('dinfo', $data);
	}
	public function getName($lid){
		$Name="";
		$query=$this->db->get_where('dinfo',array('lid'=>$lid));
		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
		      $Name= $row->dfname.' '.$row->dlname;
		   }
		 }
		 return $Name;
	}
	public function updateName($lid,$fname,$lname){
		$data = array(
               'dfname' => $fname,
               'dlname' => $lname
            );

		$this->db->where('lid', $lid);
		$this->db->update('dinfo', $data);
	}
	public function checkPass($lid,$cp){
		$query=$this->db->get_where('login',array('lid'=>$lid));
		if ($query->num_rows() > 0)
		{
			$password=NULL;
		   foreach ($query->result() as $row)
		   {
		      $password= $row->dpassword;
		   }
		   if($cp==$password){
		   	return TRUE;
		   }else{
		   	return FALSE;
		   }
		 }
		 return $Name;
	}
	public function changePassword($lid,$password){
		$data = array(
               'dpassword' => $password
            );
		$this->db->where('lid', $lid);
		$this->db->update('login', $data);
	}
	public function getEmail($lid){
		$email="";
		$query=$this->db->get_where('login',array('lid'=>$lid));
		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
		      $email= $row->demail;
		   }
		 }
		 return $email;
	}
	public function getMobile($lid){
		$mobile="";
		$query=$this->db->get_where('dinfo',array('lid'=>$lid));
		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
		      $mobile= $row->mobile;
		   }
		 }
		 return $mobile;
	}
	public function getPhone($lid){
		$phone="";
		$query=$this->db->get_where('dinfo',array('lid'=>$lid));
		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
		      $phone= $row->amobile;
		   }
		 }
		 return $phone;
	}
	public function updateEmail($lid,$email,){
		$data = array(
               'demail' => $email
            );

		$this->db->where('lid', $lid);
		$this->db->update('login', $data);
	}
	public function updateMobile($lid,$mobile,){
		$data = array(
               'mobile' => $mobile
            );

		$this->db->where('lid', $lid);
		$this->db->update('dinfo', $data);
	}
	public function updatePhone($lid,$phone,){
		$data = array(
               'amobile' => $phone
            );

		$this->db->where('lid', $lid);
		$this->db->update('dinfo', $data);
	}
}
