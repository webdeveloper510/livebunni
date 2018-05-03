<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Add_member extends CI_Model {

function _construct(){
	parent::_construct();
} 
public function index(){
	 $email = $this->input->post('email');
	 $pass = $this->input->post('pass');
	$this->db->select('*');
	$this->db->from('admin');
	$this->db->where('Email',$email);
	$this->db->where('Password',$pass);
	$query = $this->db->get();
/* 	$array1 = $query->result_array();
	return $array1; */
	
	
if ($query->num_rows() > 0)
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
public function customers(){
	$this->db->select('*');
	$this->db->from('members');
	$this->db->where('Role','customer');
	$query = $this->db->get();
	return $result = $query->result_array();
}
 
 public function models(){
	$this->db->select('*');
	$this->db->from('models');
	$query = $this->db->get();
	return $result = $query->result_array();
} 

public function insert(){
	 $email = $this->input->post('email_id');
	$this->db->select('*');
	$this->db->from('members');
	$this->db->where('Email',$email);
	$query = $this->db->get();
	if ($query->num_rows() == 0)
	{


		 $data = array(
		'username'=> $this->input->post('username'),
		'email'=> $this->input->post('email_id'),
		'password'=> md5($this->input->post('password')),
		'Role'=> 'customer',
		'Card_no'=> $this->input->post('card_number'),
		'Name_on_card'=> $this->input->post('card_name'),
		'expiry_month'=> $this->input->post('expireMM'),
		'expiry_year'=> $this->input->post('expireYY')
		); 
		$this->db->insert('members', $data);
		$this->email->from("test@secret-angels.com", 'Secret_angels'); 
         $this->email->to($this->input->post('email_id'));
         $this->email->subject('Welcome to secret-angels'); 
         $this->email->message('Hello welcome to secret-angels');
		$this->email->send();
		
		
				 
	}
	else{
		return $error = "email id already  exists";
	}	
}

///// add model 
public function add_model(){
	 $email = $this->input->post('email');
	$this->db->select('*');
	$this->db->from('models');
	$this->db->where('Email',$email);
	$query = $this->db->get();
	if ($query->num_rows() == 0)
	{


		 $data = array(
		'Username'=> $this->input->post('username'),
		'Email'=> $this->input->post('email'),
		'Password'=> md5($this->input->post('password')),
		'Role'=> 'model',
		'Age'=> $this->input->post('age'),
		'Country'=> $this->input->post('country'),
		'active_status'=> 0,
		); 
		$this->db->insert('models', $data);
		$this->email->from("test@secret-angels.com", 'Secret_angels'); 
         $this->email->to($this->input->post('email'));
         $this->email->subject('Welcome to secret-angels'); 
         $this->email->message('Hello welcome to secret-angels Now you are joined as a model in secret angels');
		$this->email->send();
		
		
				  
	}
	else{
		return $error = "email id already  exists";
	}	
}

public function activate_customer($uid){
	$data=array('Active_status'=>1);
	$this ->db-> where('id', $uid);	
	if($this ->db-> update('members',$data))
	{
		return "customer activated"; 
	}
	else
	{
		return "error";
	}
}
public function activate_model(){
	$user_id = $this->input->post('user_id');   
	$data=array('Active_status'=>1);
	$this ->db-> where('id', $user_id);	
	if($this ->db-> update('models',$data))
	{
		return "Model activated";
	}
	else
	{
		return "error"; 
	}
}
public function deactivate_customer(){
	$user_id = $this->input->post('user_id');   
	$data=array('Active_status'=>0);
	$this ->db-> where('id', $user_id);	
	if($this ->db-> update('members',$data))
	{
		return "customer deactivated";
	}
	else
	{
		return "error";
	}
}
public function deactivate_model(){
	$user_id = $this->input->post('user_id');   
	$data=array('Active_status'=>0);
	$this ->db-> where('id', $user_id);	
	if($this ->db-> update('members',$data))
	{
		return "Model deactivated";
	}
	else
	{
		return "error";
	}
}
public function login(){
	$user = $this->input->post('login_username');
	$pwd = md5($this->input->post('pwd'));
	$this->db->select('*');
	$this->db->from('members');
	$this->db->where('Username',$user);
	$this->db->where('Password',$pwd);
	$result = $this->db->get();
	
	if($result->num_rows()>0)
	{
		return $res = $result->result_array();
	}
	else {
	$this->db->select('*');
	$this->db->from('models');
	$this->db->where('Username',$user);
	$this->db->where('Password',$pwd);
	$result12 = $this->db->get();
		if($result12->num_rows()>0)
		{
		 $res = $result12->result_array();
		$uid = $res[0]['id'];
			$this->db->select('*');
			$this->db->from('model_info');
			$this->db->where('User_id',$uid);
			$result31 = $this->db->get();
			if($result31->num_rows()>0){
			$res[1][0] =  "profile_completed";
			
			}
			else{
			$res[1][0]='';
			}
			return $res;
		}
		else{
		return $arr1 ="check your username/password";
		}
	}
}
public function show_profile(){
$id = $_SESSION['userdata']['id'];
$this->db->select('*');
$this->db->from('model_info');
$this->db->where('User_id',$id);
$result43 = $this->db->get();
$result43 = $result43->result_array();
return $result43;
}
public function get_post() 
{ 
$uid = $_SESSION['userdata']['id'];
$this->db->select('*');
$this->db->from('Post');
$this->db->where('User_id',$uid);
$res = $this->db->get();
$res = $res->result_array();
return $res; 
}


public function complete_profile()
{
	//$r =$this->session->userdata(); die;
	$en = $this->input->post('enjoy');
		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
				$this->upload->do_upload('profile_pic');
				$data1 = array('upload_data' => $this->upload->data());
				
				$filename = $data1['upload_data']['file_name'];
				 $filename = preg_replace('/\s+/', '_', $filename); 
	$enjoy = implode('|',$en);	
	$data = array(
	'User_id' =>$_SESSION['userdata']['id'],
	'First_name' => $this->input->post('first_Name'),
	'Last_name' => $this->input->post('last_Name'),
	'Town' => $this->input->post('Town'),
	'State' => $this->input->post('state'),
	'Country' => $this->input->post('country'),
	'Zipcode' => $this->input->post('Zip'),
	'Rate_per_minute' => $this->input->post('rate_per_minute'),
	'Availability_dairy' => $this->input->post('vehicle'),
	'Credits' => $this->input->post('credits'),
	'Dob' => $this->input->post('dob'),
	'Gender' => $this->input->post('gender'),
	'Enjoy' => $enjoy, 
	'Summary' => $this->input->post('summary'),
	'Details' => $this->input->post('details'),
	'profile_img' => $filename,
	);
	$inserted = $this->db->insert('model_info',$data);
	if($inserted)
	{
		echo  "success";  
	}
	else
	{
		echo  "failure"; 
	}
	
}
public function share_post()
{
$post = $this->input->post('post');
$uid = $_SESSION['userdata']['id'];
$date = date("Y-m-d H:i:s");
$arr = array(
'User_id'=>$uid,
'Post_data'=>$post,
'Submitted_date'=>$date,
);
$success = $this->db->insert('Post',$arr);
if($success)
{
return "success";
}
else
{
return "unsuccessfull";
}
}
public function upload_gallery()
{ 
$en = $this->input->post('gallery'); 
		$config['upload_path']          = './uploads/gallery/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
				if($this->upload->do_upload('gallery'))
				{
				$data1 = array('upload_data' => $this->upload->data());
				$img = $data1['upload_data']['file_name'];
				//$en = preg_replace('/\s+/', '_', $en);	
				$data = array(
				'User_id' =>$_SESSION['userdata']['id'],
				'Images' => $img	 
				); 
				$inserted = $this->db->insert('gallery',$data);
				if($inserted)
				{
					echo  "success";   
				}
				else
				{
					echo  "failure"; 
				}
				}
				else
				{
				echo $this->upload->display_errors();
				}
				
				
}

public function get_gallery()
{ 
$uid = $_SESSION['userdata']['id'];
$this->db->select('*');
$this->db->from('gallery');
$this->db->where('User_id',$uid);
$res = $this->db->get();
$res = $res->result_array();
return $res; 
}
public function get_profiles()
{
$info = array();
$this->db->select('*');
$this->db->from('models');
$this->db->where('Active_status',1);
$res = $this->db->get();
$res = $res->result_array();
for($i=0;$i<count($res);$i++)
{

$uid = $res[$i]['id'];
$this->db->select('*');
$this->db->from('model_info');
$this->db->where('User_id',$uid);
$res1 = $this->db->get();
 $data = $res1->result_array();
  /* $info['First_name'] = $data[$i]['First_name'];
 $info['Last_name'] = $data[$i]['Last_name'];
 $info['profile_img'] = $data[$i]['profile_img'];  */
  if(count($data)>0)
  {
	  $arr[]=$data;
  }
  //print_r($data);

}
return $arr;
}
public function switch_online_offline()
{
	$online = $this->input->post('online');
	$uid = $this->input->post('uid');
	$arr = array('Online'=>$online);
	$this->db->where('User_id',$uid);
	if($this->db->update('model_info',$arr))
	{
		if($online==1)
		{
			 $_SESSION['userdata']['Online']=1;
			echo "You are now online";
		}
		else
		{
			 $_SESSION['userdata']['Online']=0;
			echo "You are now offline";
		}
	}
	else
	{
		echo $this->db->display_errors();
	}
}
public function logout()
{
	$uid = $_SESSION['userdata']['id'];
	$arra = array('Online'=>0);
	$this->db->where('User_id',$uid);
	$this->db->update('model_info',$arra);
}
}
?>