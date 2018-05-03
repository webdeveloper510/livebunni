<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Backend_model extends CI_Model {
	
		public function __construct() {
			parent::__construct();
			
			} 
    public function checkadminlogin()
	{
		$password = $this->input->post('password');
		$username = $this->input->post('username');        
		$this->db->select('*');
		$this->db->from('adminlogin');
		$this->db->where('username', $username );
		$this->db->where('password', $password );
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$array1 = $query->result_array();
			return $array1;
		}
		else
		{
			 $arr1[0]['id']=0;
			return $arr1;
		}
	}
	public function admindetails()
	{
		$this->db->select('*');
		$this->db->from('adminlogin');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getmembers()
	{
		$this->db->select('*');
		$this->db->from('member_signup');
		$this->db->order_by("id", "desc");
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function modeldetails()
	{
		$this->db->select('*');
		$this->db->from('models');
		$this->db->order_by("model_info.user_id", "desc");
		$this->db->join('model_info', 'models.id = model_info.User_id');
		$this->db->where('models.Active_status',1);
		$query = $this->db->get();
		$result43 = $query->result_array();
		//print_r($result43);
		return $result43;
	}
	public function activemodel($modelid)
	{
		$data = array(
	'Active_status' => 1 );
	$this->db->where('id', $modelid);
	$query = $this->db->update('models', $data);
	}
	public function inactivemodel($modelid)
	{
		$data = array(
	'Active_status' => 2 );
	$this->db->where('id', $modelid);
	$query = $this->db->update('models', $data);
	}
	public function viewmodeldetails($modelid)
	{
		$this->db->select('*');
		$this->db->from('models');
		$this->db->join('model_info', 'models.id = model_info.User_id');
		$this->db->where('models.id',$modelid);
		$query = $this->db->get();
		$result43 = $query->result_array();
		return $result43;
	}
	public function viewnewmodeldetails($modelid)
	{
		//echo $modelid;die;
		$this->db->select('*');
		$this->db->from('models');
		$this->db->join('model_info', 'models.id = model_info.User_id');
		$this->db->where('model_info.User_id',$modelid);
		$query = $this->db->get();
		$result43 = $query->result_array();
		return $result43;
	}
	
	public function newmodelrequest()
	{
		$this->db->select('*');
		$this->db->from('models');
		$this->db->order_by("model_info.user_id", "desc");
		$this->db->join('model_info', 'models.id = model_info.User_id');
		//$this->db->where('models.id',$modelid);
		$this->db->where('models.Active_status',0);
		$query = $this->db->get();
		$result43 = $query->result_array();
		return $result43;
	}
	public function deactivemodel()
	{
		$this->db->select('*');
		$this->db->from('models');
		$this->db->join('model_info', 'models.id = model_info.User_id');
		//$this->db->where('models.id',$modelid);
		$this->db->where('models.Active_status',2);
		$query = $this->db->get();
		$result43 = $query->result_array();
		return $result43;
	}
	
	
	
	
	
	
	
	
	

}    
?>