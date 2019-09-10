<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Home_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function db_getDoctorInfo($inputQuery){
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/Yeasin/Doctor/index.php/home_controller/home_view';
		$config['total_rows'] = 20;
		$config['per_page'] = 3;
		$config['next_link'] = '&gt;';
		$config['num_links'] = 4;
		$config['first_link'] = 'First';
		$this->pagination->initialize($config);
		
		$query = $this->db->query($inputQuery);
		$Counter=0;
		if ($query->num_rows() > 0)
		{
			
		   foreach ($query->result() as $row)
		   {
		      $data['doctorName'][$Counter]=$row->dfname.' '.$row->dlname;
			  $data['mobile'][$Counter]=$row->mobile;
			  $data['amobile'][$Counter]=$row->amobile;
			  $data['district'][$Counter]=$row->district;
			  $Counter++;
		   }
		   $data['counter']=$Counter;
		   return $data;
		}
		else{
			return $data['counter']=$Counter;
		}
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
	
	public function db_getSpecialList(){
		$query=$this->db->get('dspecial');
		if ($query->num_rows() > 0)
		{
		   $special='<select name="specialDropdown" class="form-control">';
		   $special.= '<option value="Select">Select</option>';
		   foreach ($query->result() as $row)
		   {
		      $special.= '<option value="'.$row->cid.'">'.$row->dspecial.'</option>';  
		   }
		   $special.='</select>';
		   return $special;
		}
		else{
			return $special='No Specialist Available Rignt Now';
		}
	}
	
}

?>