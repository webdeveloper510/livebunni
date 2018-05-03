<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Model{
    //get and return product rows
    public function getRows($id = ''){
        $this->db->select('id,Free,credit,price');
        $this->db->from('products');
        if($id){
            $this->db->where('id',$id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
           # $this->db->order_by('name','asc'); 
		   
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }
	    public function get_events_Rows($id){
        $this->db->select('id,title,price');
        $this->db->from('calender');
        if($id){
            $this->db->where('id',$id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
           # $this->db->order_by('name','asc'); 
		   
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }
	
    //insert transaction data
    public function insertTransaction($data = array()){
        $insert = $this->db->insert('payments',$data);
        return $insert?true:false;
    }
	#upadte user credit
	public function update_credit($userid,$data){
		if($this->getCredit($userid))
		{
			$this->db->where('user_id', $userid);
			$this->db->update('credit_detail', $data);
		}else
		{
			$this->db->insert('credit_detail',$data);
		}
	}
	
	#Get user's remaining credit  
	public function getCredit($userid)
	{
		$this->db->select('user_id,credit_left');
        $this->db->from('credit_detail');
        $this->db->where('user_id',$userid);
        $query = $this->db->get();
        $result = $query->row_array();
		
		 return !empty($result)?$result:false;
	}
}