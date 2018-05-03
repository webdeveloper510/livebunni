<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Add_member extends CI_Model {

function _construct(){
	parent::_construct();
	 $this->load->library('email');
	 $this->load->helper("file");
	 $this->load->helper('url');
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
public function getproduct_price(){
	 $p_id = $this->input->post('product_id'); 

	/*$this->db->select('*');
	$this->db->from('products');
	//$this->db->where('id',$p_id);
	$res = $this->db->get();
	$resutl = $res->result_array();
	print_r($result);*/
	$this->db->select('*');
	$this->db->from('products');
	$this->db->where('id',$p_id);
	$query = $this->db->get();
	 $result = $query->result_array();
	 echo json_encode($result[0]); die;
	 echo json_encode($result);
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
	//print_r($_POST);
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

 ######## Function for deducting credits from users for live videos  ##############
public function deduct_broadcast_credits(){
	$id = $this->session->userdata['userid'];
	
	$this->db->select('credit_left');
	$this->db->from('credit_detail');
	$this->db->where('user_id', $id);
	$res = $this->db->get();
	$result = $res->result_array();
	if($result[0]['credit_left']< 5)
	{
		echo "you don't have sufficient credits";
	}else
	{
		$data = array(
		'credit_left'=>$result[0]['credit_left']-5,
	);
		$this ->db-> where('user_id', $id);	
		if($this ->db-> update('credit_detail',$data))
		{
			//echo "5 credits deducted";
			$this->db->select('credit_left');
			$this->db->from('credit_detail');
			$this ->db->where('user_id', $id);	
			$reso = $this->db->get();
			$reso1 = $reso->result_array();
			echo json_encode($reso1[0]);
		}
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

		$pin = '';
for($j=0;$j<4;$j++)
{

	if($j<3)
	{
		$pin .= generatePIN()."-";
	}
	else
	{
		$pin .= generatePIN();
	}
}
 

//Our custom function.
function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
		 $data = array(
		'Username'=> $this->input->post('username'),
		'Email'=> $this->input->post('email'),
		'Password'=> md5($this->input->post('password')),
		'Role'=> 'model',
		'Age'=> $this->input->post('age'),
		'Country'=> $this->input->post('country'),
		'active_status'=> 0,
		'video_channel'=>$pin
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
  ////MEMBER SIGN UP////  
 public function memberss_login(){
	
	$email = $this->input->post('email'); 
	$username = $this->input->post('username');
	$pwd=$this->input->post('password');
	$age=$this->input->post('Age_confirm');
	if(empty($email)|| empty($username)||empty($pwd) ||empty($age))
	{
		return "blank";
	}else{
			$data = array(
			'username'=> $this->input->post('username'),
			'email'=> $this->input->post('email'),
			'password'=> md5($this->input->post('password')),
			'status'=>1
			); 
			$insertion = $this->db->insert('member_signup',$data);
			$id =  $this->db->insert_id();
			if($insertion){
				return $id;
			}else{
				return "error";
			}
	}
}
############# Method for check email of member signup ##########
public function check_email()
{
	$email=$this->input->post('email');
		$this->db->select('*');
		$this->db->from('member_signup');
		$this->db->where('email',$email);
		$query = $this->db->get();
	 if($query->num_rows()){
		 return $query->num_rows();
	 }else{
		$this->db->select('*');
		$this->db->from('models');
		$this->db->where('Email',$email);
		$query = $this->db->get();
		return $query->num_rows();
	 }
	 
}

############# Method for check User Name of member signup ##########
public function check_username()
{
	$username=$this->input->post('username');
		$this->db->select('*');
		$this->db->from('member_signup');
		$this->db->where('username',$username);
		$query = $this->db->get();
	if($query->num_rows()){
		 return $query->num_rows();
	 }else{
		$this->db->select('*'); 
		$this->db->from('models');
		$this->db->where('Username',$username);
		$query = $this->db->get();
		return $query->num_rows();
	 }
	 
}

///EMAIL VERIFICATION////////
 function verify($email) {
    $data = array('status' => 1);
    $this->db->where('id', $email);
    return $this->db->update('member_signup', $data);
}
function update_pwd($pswd='',$email='') {
	$pswd = md5($pswd);
    $data = array('password' => $pswd);
    $this->db->where('email', $email);
	if($this->db->update('member_signup',$data))
	{
		return "success";
	}
	else{
		return $this->display_errors();
	}
    // return $this->db->update('member_signup', $data);
}
############  Get categories ##################
public function get_cat(){
	$this->db->select('*');
	$this->db->from('model_categories');
	$this->db->where('girl_cat', 1);
	$query = $this->db->get();
	return $result = $query->result_array();
	
}
############  Get Model's Hair  ##################
 public function get_hair($cat_id){
	$this->db->select('cat_name');
	$this->db->from('model_hair');
	$this->db->where_IN('cat_id',$cat_id);
	$query = $this->db->get();
	return $result = $query->result_array();
	
} 
############  Get willingness ##################
public function get_willingness($cat_id){
	$this->db->select('cat_name');
	$this->db->from('model_willingness');
	$this->db->where_IN('cat_id',$cat_id);
	$query = $this->db->get();
	return $result = $query->result_array();
	
}

//////////////GET DATA///////////////

public function get_data($idss){
	
	$this->db->select('*');
	$this->db->from('member_signup');
	$this->db->where('id',$idss);
	$query = $this->db->get();
	$tt = $query->num_rows();
	if($tt>0){
	return $result = $query->result_array();
	}
}


///////////////////////////////////
///SETTING UPDATION//////////

public function setting_updation($idsss){

	$username = $this->input->post('username');
	$email = $this->input->post('email');
	$password =md5($this->input->post('password'));

	//$uid = $_SESSION['userdata']['id'];
	$arr = array(
	'username'=>$username,
	'email'=>$email,
	'password'=>$password
	);
	$this->db->where('id',$idsss);
	if($this->db->update('member_signup',$arr))
	{
	return "success";
	}
	else
	{
	echo $this->display_errors();
	}
	
}

/////////////////////////////

///Login_form//////

public function logins_form(){
    $username = $this->input->post('username');
	$password =md5($this->input->post('password'));
	$where = '(username="'.$username.'" or email = "'.$username.'")';
	$this->db->select('*');
	$this->db->from('member_signup');
	$this->db->where($where);
	$this->db->where('password',$password);
	$this->db->where('status',1);
	$query = $this->db->get();
	$tt = $query->num_rows(); 
	
	
	if($tt>0){
		return $result = $query->result_array();
		
	       }
else if($username!="" && $password!=""){
	$where = '(Username="'.$username.'" or Email = "'.$username.'")';
	$this->db->select('*');
	$this->db->from('models');
	$this->db->where($where);
	$this->db->where('password',$password);
     $this->db->where('Active_status',1);
	$query = $this->db->get();
	$tt = $query->num_rows(); 
	if($tt>0){
		return  $result = $query->result_array();
	       }
	else{
		return "not_right_information";
	}
}		   
	else{
		return "not_right_information";
	}
	
}
# Forgot password 
public function forgot_password(){
    $username = $this->input->post('username');
	$email =$this->input->post('email');
	$this->db->select('*');
	$this->db->from('member_signup');
	$this->db->where('username',$username);
	$this->db->where('email',$email);
	$this->db->where('status',1);
	$query = $this->db->get();
	$tt = $query->num_rows(); 
	
	
	if($tt>0){
		return "right_information";
	       }
		   
else if($username!="" && $email!=""){
	$this->db->select('*');
	$this->db->from('models');
	$this->db->where('username',$username);
	$this->db->where('email',$email);
	$this->db->where('status',1);
	$query = $this->db->get();
	$tt = $query->num_rows(); 
	if($tt>0){
		return "right_information";
	       }
	else{
		return "not_right";
	}
}		   
	else{
		return "not_right";
	}
	
}
////////////////////

public function show_profile(){ 
	$id = $this->session->userdata['userid'];
$this->db->select('*');
$this->db->from('models');
$this->db->join('model_info', 'models.id = model_info.User_id');
 $this->db->where('models.id',$id);
$query = $this->db->get();
$result43 = $query->result_array();
return $result43;
}

############  Function for Get Post Data ############
	public function get_post() {
		$uid = $_SESSION['userid'];
		$this->db->select('*');
		$this->db->from('Post');
		$this->db->order_by("Post_id desc");
		$this->db->where('User_id',$uid);
		$res = $this->db->get();
		$res = $res->result_array();
		//print_r($res);
		return $res; 
	}

	
	
	##########  	Function for Item comment ##############
	public function Item_comment(){
		
		if(isset($_SESSION['userid']))
		{
			 $uid = $_SESSION['userid'];
			$data=array(
				'post_id'=>$this->input->post('item_code'),
				'commenter_id'=>$uid,
				'comment'=>$this->input->post('comment'),
				'type'=>1
				);
			$this->db->insert('comments',$data);
			return $this->input->post('item_code');
		}else{
			return 'you must login first';
		}
		
	}
	

	########	Function for  Get Item comment ################
	public function get_item_comment($item_code=null){
		$this->db->select('comments.*,member_signup.profile_pic');
		$this->db->from('comments');
		$this->db->order_by("comments.id desc");
		$this->db->where('comments.post_id',$item_code);
		$this->db->where('comments.type',1);
		$this->db->join('member_signup', 'comments.commenter_id = member_signup.id', 'LEFT');
		$res = $this->db->get();
		$res = $res->result_array();
		return $res; 
	}
	##########  	Function for post comment ##############
	public function Post_comment(){
		$data=array(
			'post_id'=>$this->input->post('post_id'),
			'commenter_id'=>$this->input->post('commenter'),
			'comment'=>$this->input->post('comment'),
			'type'=>0
			);
		$this->db->insert('comments',$data);
		return $this->db->insert_id();
		
	}
	 
	 
	 
	########	Function for  Get comment ################
	public function get_comment($cmt_id=null){
		$this->db->select('*');
		$this->db->from('comments');
		$this->db->order_by("id desc");
		$this->db->where('id',$cmt_id);
		$this->db->where('type',0);
		$res = $this->db->get();
		$res = $res->result_array();
		return $res; 
	}
	 
	########	Function for get comment acmording to post 	##########
	public function Show_comment($post=null){
		$post_id=(isset($post) ? $post : $this->input->post('post_add'));
		$this->db->select('model_info.profile_img,comments.comment');
		$this->db->from('comments');
		$this->db->join('model_info', 'model_info.User_id = comments.commenter_id');
		$this->db->where('comments.post_id',$post_id);
		$this->db->order_by("comments.id desc");
		$this->db->limit(5);
		$res = $this->db->get();
		$res = $res->result_array();
		return $res;
	}
	
	 
////////////////////SINGEL MODEL POST's DATA SHOW //////////////////////////////
public function singel_user_post($uid) {
	
	$this->db->select('*');
	$this->db->from('Post');
	$this->db->order_by("Post_id desc");
	$this->db->where('User_id',$uid);
	$res = $this->db->get();
	$res = $res->result_array();
	//print_r($res);
	return $res; 
}


public function complete_profile()
{
	//$r =$this->session->userdata(); die;
	$en = $this->input->post('enjoy');
		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                #$config['max_size']             = 100;
                #$config['max_width']            = 1024;
                #$config['max_height']           = 768;

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
#add To favorite
public function  add_fav($user_id,$fav_angel_id)
{
	$data = array(
	'User_id' =>$user_id,
	'fav_angel_id' =>$fav_angel_id,
	);
		 $this->db->where($data);
		$query = $this->db->get('favorite');
    if ($query->num_rows() == 0){
       
		$this->db->insert('favorite',$data);
		return 1;
		
    }else{
		
		$this->db->where($data);
		$this->db->delete('favorite');
		return 0;
	}
    
	
	
}
#Remove To favorite
public function  remove_fav($fav_angel_id)
{
	
	$this->db->where('id', $fav_angel_id);
	$inserted = $this->db->delete('favorite');
	if($inserted)
	{
		echo  "success";  
	}
	else 
	{
		echo  "failure"; 
	}  
}




###########   Function for insert Post Data 	##############
 public function share_post()
{
	$post = $this->input->post('post');
	
	$uid = $_SESSION['userid'];
	$date = date("Y-m-d H:i:s");
	$arr = array(
		'User_id'=>$uid,
		'Post_data'=>$post,
		'Submitted_date'=>$date,
		);
	$success = $this->db->insert('Post',$arr);
	return ($success? true : false);
	
} #########   End Post Data function 




public function upload_gallery()
{ 
	
		$album_id=$this->input->post('album_id');
		if(!isset($album_id)){$album_id=0;}
        $date = date("Y-m-d H:i:s");  
		$imaarray=$this->input->POST('paths');  
		$target_path = './uploads/gallery/';
		$succesmes='';
		for($i=0; $i < count($imaarray);$i++ ){	 //echo $value;
			//define('UPLOAD_DIR', $target_path); 
			define('UPLOAD_DIR', $target_path);
			$image_parts = explode(";base64,", $imaarray[$i]);
			$image_type_aux = explode($target_path, $image_parts[0]);
			$image_type = $image_type_aux[1];
			$image_base64 = base64_decode($image_parts[1]);
			$thumbnail_name = uniqid() . '.png';
			$file = UPLOAD_DIR .$thumbnail_name ;
			if(file_put_contents($file, $image_base64)){
			$data = array(
				'User_id' =>$_SESSION['userid'],
				'album_id'=>$album_id,
				'Images' =>$thumbnail_name,
				'time'=>$date
				); 
				$inserted = $this->db->insert('gallery',$data);
			if($inserted)
			{
				$succesmes = "1";   
			}		
		}else{
		$succesmes="0";	
		}  
		}
		return $succesmes;
}
	#code for create new album =====================================
	public function create_album()
	{ 
		$title=$this->input->post('title');
		$userview=$this->input->post('userview');
		$date = date("Y-m-d H:i:s");
		$album_data = array(
		'User_id' =>$_SESSION['userid'],
		'title' => $title,
		'Status'=>$userview,
		'date_time'=>$date
		); 
		$this->db->insert('pic_album',$album_data);
		$album_id=$this->db->insert_id();
		
		$en = $this->input->post('album');
		
		$config['upload_path']          = './uploads/gallery/';
        $config['allowed_types']        = 'gif|jpg|png';
        #$config['max_size']             = 100;
        #$config['max_width']            = 1024;
        #$config['max_height']           = 768; 
        $this->load->library('upload', $config);
		if($this->upload->do_upload('album'))
		{
		$data1 = array('upload_data' => $this->upload->data());
		$img = $data1['upload_data']['file_name'];
		//$en = preg_replace('/\s+/', '_', $en);
		$date2 = date("Y-m-d H:i:s");
		$data = array(
		'User_id' =>$_SESSION['userid'],
		'Images' => $img,
		'album_id'=>$album_id,
		'time'=>$date2 
		); 
		$inserted = $this->db->insert('gallery',$data);
		
		$file_name=array('cover_img_id'=>$img);
				$this->db->where('id', $album_id);
                $this->db->update('pic_album', $file_name);
		
		if($inserted)
		{
			return "success";   
		}
		else
		{
			return  "failure"; 
		}
		}
		else
		{
		return $this->upload->display_errors();
		}
		
	}
	# Get album Data  for Display Album==============================
	public function get_album()
	{
		$uid = $_SESSION['userid'];
		$this->db->select('*');
		$this->db->from('pic_album');
		$this->db->where('user_id',$uid);
		$this->db->order_by("id","desc");
		$album = $this->db->get();
		$album = $album->result_array();
		return $album;		
	}
	# GET SINGEL MODEL DATA FOR MOMBER //////////////////////////////
	public function singel_model_album($uid)
	{
		$this->db->select('*');
		$this->db->from('pic_album');
		$this->db->where('user_id',$uid);
		$this->db->order_by("id","desc");
		$album = $this->db->get();
		$album = $album->result_array();
		return $album;		
	}
	
	# Get ALBUM's PICTURE ==========================
	public function show_pic($id)
	{
		$uid = $_SESSION['userid'];
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->where('album_id',$id);
		$this->db->order_by("id","desc");
		$album = $this->db->get();
		$album = $album->result_array();
		return $album;
	}
	#DELETE IMAGE FROM ALBUM ===========================
	public function delete_img($id,$img)
	{
		$path='./uploads/gallery/'.$img;
		$this->db->delete('gallery', array('id' => $id));
		// return $path;
		if($this->db->affected_rows() >= 1){
			if(unlink($path))
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	
	
	##########	Function for delete video 	###########
public function delete_videos(){
		$id= $this->input->post('id');
		$this->db->select('*');
		$this->db->from('video_gallery');
		$this->db->where('id',$id);
		$res = $this->db->get();
		$res = $res->result_array();
		
	$vids=$this->input->post('vids');
	$path='./uploads/video_gallery/'.$vids;
	$path2='./uploads/screenshot/'.$res[0]['screenshot'];
		$this->db->delete('video_gallery', array('id' => $id));
		
		if($this->db->affected_rows() >= 1){
			if(unlink($path))
				unlink($path2);
			return TRUE;
		} else {
			return FALSE;
		} 

}
	
	#CHANGE PASSWORD ########################################
	public function change_pwd($email,$currentpassword,$newpassword)
	{
		$currentpassword=md5($currentpassword);
		$newpassword=md5($newpassword);
		$data=array('password'=>$newpassword);
		$this -> db -> select('password');
        $this -> db -> where('email',$email);
		$query = $this -> db -> get('member_signup');
		$query = $query->result_array();
        if($query[0]['password'] == $currentpassword)
		{
			
				$this->db->where('email',$email);
                $this->db->update('member_signup', $data);
			return true;
		}else
		{
			return false;
		}
		
	}
	
	
	/////////////////COUNTRY STATE CITY CODE////////////////////////
	function getcountry1()
     {
        $this ->db->select('*');
      $query = $this ->db->get('countries');
        return $query->result();
     }
	 
	 function getstate($country_id='')
     {
		
        $this -> db -> select('*');
        $this -> db -> where('country_id', $country_id);
       $query = $this -> db -> get('states');
        return $query->result_array();
     }
    
      function getcity($state_id='')
     {
        $this -> db -> select('*');
        $this -> db -> where('state_id', $state_id);
       $query = $this -> db -> get('cities');
        return $query->result_array();
     }
	
	function getcountry($country_id='')
     {
        $this ->db->select('name');
		$this -> db -> where('id', $country_id);
		$query = $this ->db->get('countries');
		$query=$query->result_array();
        return $query[0];
     }
	 
	 function getstat($state_id='')
     {
		
        $this -> db -> select('name');
        $this -> db -> where('id', $state_id);
       $query = $this -> db -> get('states');
        
		$query=$query->result_array();
        return $query[0];
     }
    
      function getcty($city_id='')
     {
        $this -> db -> select('name');
        $this -> db -> where('id', $city_id);
		$query = $this -> db -> get('cities');
		$query=$query->result_array();
        return $query[0];
     }
	
	////////////////////////////////////////////////////////////////

public function upload_video()
{ 
	//echo $video_upload_path =  base_url('uploads/video_gallery/'); die;
	$imaarray=$this->input->POST('video-img');
	$en = $this->input->post('video_gallery');
	$free=$this->input->post('userview');
	$date=date("Y-m-d H:i:s");
	$id = $_SESSION['userid'];
		$config['upload_path']          = "./uploads/video_gallery/";
                $config['allowed_types']        ='mp4|avi|flv|wmv|mov|3gp';
                $config['max_size']             ='0';
              /*    $config['max_width']            = '1024';
                $config['max_height']           = '768';  */

                $this->load->library('upload', $config);
				
				
				if($this->upload->do_upload('video_gallery'))
				{
				$data1 = array('upload_data' => $this->upload->data());
				//print_r($data1);
			 	$video = $data1['upload_data']['file_name'];
				
				//$en = preg_replace('/\s+/', '_', $en);	
				$data = array(
				'User_id' =>$id,
				'Videos' => $video,
				'date'=>$date,
				'free'=>$free
				); 
			
				$inserted = $this->db->insert('video_gallery',$data);
				 $insert_id = $this->db->insert_id(); 
				if($inserted)
				{ 	
					// video img upload
					  
					$target_path = "./uploads/screenshot/";
					
					for($i=0; $i < count($imaarray);$i++ ){	 //echo $value;
					//define('UPLOAD_DIR', $target_path); 
					define('UPLOAD_DIR', $target_path);
					$image_parts = explode(";base64,", $imaarray[$i]);
					$image_type_aux = explode($target_path, $image_parts[0]);
					$image_type = $image_type_aux[1];
					$image_base64 = base64_decode($image_parts[1]);
					$thumbnail_name = uniqid() . '.png';
					$file = UPLOAD_DIR .$thumbnail_name ;
					if(file_put_contents($file, $image_base64)){
						$data=array('screenshot'=>$thumbnail_name);
						$this->db->where('id',$insert_id);
						$insertedd=$this->db->update('video_gallery',$data);
						if($insertedd){
							echo  1; 	
						}
						else
						{
							echo  "video gallery not updated";
						} 
					}
					}					
				}
 				else  
				{
					echo 0;  
				}
				}
				else
				{
					//return $size = $data1['upload_data']['size'];
			return  $this->upload->display_errors();
				}
				
				
}

////////SEND MODEL DATAIL TO MEMBER //////////

 public function getmodel_detail($id){
	$uid = $id; 
	$this->db->select('*');
	$this->db->from('model_info');
	$this->db->join('models', 'model_info.User_id = models.id');
	$this->db->where('model_info.User_id',$uid);
	$data = $this->db->get();
	$data = $data->result_array();  
	return $data;
}

////////GET VIDEOS ON MEMBER SIDE WHEN THEY OPEN MODEL PROFILE////

public function get_videos($uid){
	
$this->db->select('*');
$this->db->from('video_gallery');
$this->db->where('User_id',$uid);
$this->db->order_by("id",'DESC');
$videos = $this->db->get();
$videos = $videos->result_array();
return $videos;  	
}


//////////////////////////////////////////////////

#########		Function for Like post Image and Video 	#############
	public function post_like(){
		$product_id=$this->input->post('post_add');
		$liker_id = $_SESSION['userid'];
		if($liker_id=='')
		{
			echo "you must login first"; die;
		}
		else{
		$this->db->select('*');
		$this->db->from('likes');
		$this->db->where('product_id',$product_id);
		$this->db->where('liker_id',$liker_id);
		$query = $this->db->get();
		$query = $query->row();
		if($query > 0){ 
			$this->db->where('product_id',$product_id);
			$this->db->where('liker_id',$liker_id);
			$this->db->delete('likes');
		}else{
			
			$data = array(
			'product_id' =>$product_id,
			'liker_id' => $liker_id,
			'likes'=>1
			);  
			$this->db->insert('likes',$data);
		}	
			$this->db->select('SUM(likes) as likes');
			$this->db->from('likes');
			$this->db->where('product_id',$product_id);
			$likes = $this->db->get();
			$likes = $likes->result_array();
			return $likes;  	
	}
	}//end function 
	
	
	######### 		Function for get Total Likes of Post	#############
	public function get_total_like(){
		$product_id=$this->input->post('post_add');
		$this->db->select('SUM(likes) as likes');
		$this->db->from('likes');
		$this->db->where('product_id',$product_id);
		$likes = $this->db->get();
		$likes = $likes->result_array();
		return $likes;
	}// end Function
	
	
	######### 		Function for get Total comments of Post	#############
	public function Get_total_comment(){
		$product_id=$this->input->post('post_add');
		$this->db->select('*');
		$this->db->from('comments');
		$this->db->where('post_id',$product_id);
		$comments = $this->db->get();
		$comments = $comments->num_rows();
		return $comments;
	}// end Function
	
	######### 		Function for user Likes on Post	#############
	public function user_likes(){
		$product_id=$this->input->post('post_add');
		$liker_id = $_SESSION['userid'];
		
		$this->db->select('*');
		$this->db->from('likes');
		$this->db->where('product_id',$product_id);
		$this->db->where('liker_id',$liker_id);
		$query = $this->db->get();
		$query = $query->row();
		if($query > 0){ 
			return true;
		}else{
			return false;
		}
	}// end Function
	

///GET VIDEOS.//////
public function get_video(){
	
	$uid = $_SESSION['userid'];
$this->db->select('*');
$this->db->from('video_gallery');
$this->db->where('User_id',$uid);
$video = $this->db->get();
$video = $video->result_array();
return $video; 	
}

public function get_gallery()
{ 
$uid = $_SESSION['userid'];
$this->db->select('*');
$this->db->from('gallery');
$this->db->where('User_id',$uid);
$this->db->where('album_id',0);
$res = $this->db->get();
$res = $res->result_array();
return $res; 
}
/////////////GET DATA FOR SINGEL MODEL //////////////////////////////
public function singel_model_gallery($uid)
{ 
	$where = "User_id=".$uid." AND album_id=0";
	$this->db->select('*');
	$this->db->from('gallery');
	$this->db->where($where);
	#$this->db->where('User_id',$uid);
	#$this->db->where('album_id',0);
	$res = $this->db->get();
	$res = $res->result_array();
	return $res; 
}

//////GALLERY OF MODEL ON MEMBER SIDE TO SHOW ALL THE IMAGES ON THE MEMBER SIDE//////

public function get_gallerys($id)
{ 
$this->db->select('*');
$this->db->from('gallery');
$this->db->where('User_id',$id);
$this->db->where('album_id',0);
$this->db->order_by("id",'DESC');
$res = $this->db->get();
$res = $res->result_array();
return $res; 
}

/////////////////Get MODEL'S ID TO MODEL'S USERNAME ///////////////////////
public function get_model_id($username)
{
	$this->db->select('id');
	$this->db->from('models');
	$this->db->where('Username',$username);
	$res = $this->db->get();
	$res = $res->result_array();
	return $res; 
}

//////////////MODEL's PIC SHOW ON MEMBER PAGE AFTER MEMBER LOGIN///////////////////////
public function model_data($con=null)
{
	$fil=$this->input->post('fil');
	$pramiter=$this->input->post('pra');
	$gender=$this->input->post('gender');
	$gender=empty($gender) ? 'female' : $gender;  
	
	switch ($pramiter) {
    case 'Age':
        $fil=explode(" ",$fil);
		$where = "mi.Gender='".$gender."' AND m.Active_status=1 AND m.Age BETWEEN ".$fil[0]." AND ".$fil[1];
        break;
	case 'Price':
		$fil=explode(" ",$fil);
		$where = "mi.Gender='".$gender."' AND m.Active_status=1 AND mi.Rate_per_minute BETWEEN '".$fil[0]."' AND '".$fil[1]."'";
		break;
	case 'Appearance':
		$where = "mi.Gender='".$gender."' AND m.Active_status=1 AND FIND_IN_SET(".$fil.",mi.Appearance)";
		break;
	case 'Hair':
		$where = "mi.Gender='".$gender."' AND m.Active_status=1 AND FIND_IN_SET(".$fil.",mi.hair)";
		break;
	case 'Showtype':
		$where = "mi.Gender='".$gender."' AND m.Active_status=1 AND  FIND_IN_SET(".$fil.",mi.Show_type)";
		break;
	case 'category':
		 $where = "mi.Gender='".$gender."' AND mi.Gender='".$gender."' AND m.Active_status=1 AND FIND_IN_SET(".$fil.",mi.category )"; 
		break; 
	case 'Ethnicity':
		$where = "mi.Gender='".$gender."' AND m.Active_status=1 AND FIND_IN_SET(".$fil.",mi.ethnicity)";
		break;
	case 'Willingness':
		$where = "mi.Gender='".$gender."' AND m.Active_status=1 AND FIND_IN_SET(".$fil.",mi.willingness)";
		break;
    default:
        $where = "mi.Gender='".$gender."' AND m.Active_status=1 ";
        break;
}
	//$where = "m.Active_status=1 AND m.Age BETWEEN 18 AND 22 ";
	
	$this->db->select("m.Username,mi.User_id,mi.profile_img,mi.Online,mi.First_name");
    $this->db->from("models as m");
    $this->db->join('model_info as mi', 'm.id = mi.User_id');
	//$this->db->order_by('rand()'); 
	$this->db->where($where);
	$this->db->order_by("m.id",'DESC');
	$this->db->limit($con);
    $res = $this->db->get();
	$res = $res->result_array();
	return $res;
}

/* /////////////////////////GET MODEL'S ONLINE STATUS ////////////////////////////////////
public function get_online_status(){
	$this->db->select('*');
	$this->db->from('model_info');
	$res = $this->db->get();
	$res = $res->result_array();
	return $res;
}
 */


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
 if(count($data)>0)
 {
	 $info[] = $data;
 }
  /*  $info['First_name'] = $data[$i]['First_name'];
 $info['Last_name'] = $data[$i]['Last_name'];
 $info['profile_img'] = $data[$i]['profile_img'];  */
 

}
return $info;  
}


####################Function for get Ethnicity ##################
public function get_ethicity($ethnicitys){

	$this->db->select('cat_name');
	$this->db->from('model_ethnicity');
	//$this->db->where_in('cat_id',"2,3");
	$this->db->where_IN('cat_id',$ethnicitys);
	$res = $this->db->get();
	$res = $res->result_array(); 
	return $res;
}

#Get data for show angel on favorite page
public function get_fav($uid) 
{ 
$this->db->select('fav_angel_id');
$this->db->from('favorite');
$this->db->where('User_id',$uid);
$res = $this->db->get();
$res = $res->result_array();
return $res; 
}
#get whole data of fav angel data=========================
public function get_fav_angel($ids)
{
	
	$this->db->select("m.Username,mi.User_id,mi.profile_img,mi.Online");
    $this->db->from("models as m");
    $this->db->join('model_info as mi', 'm.id = mi.User_id');
	$this->db->where_in('User_id', $ids);
	$res = $this->db->get();
	$res = $res->result_array();
	return $res;
	
}
public function switch_online()
{
	$uid = $this->input->post('uid');
	$online = $this->input->post('online');
	//echo $online;die;
	$arr = array('Online'=>$online);
	$this->db->where('User_id',$uid);
	if($this->db->update('model_info',$arr))
	{
		if($online==1)
		{
			$_SESSION['userdata']['online']=1;
			echo "You are now online";
		}
		else
		{
			$_SESSION['userdata']['online']=0;
			echo "You are now offline";
		}
	}
}


# METHOD FOR UPDATE ONLINE STATUS OF MODELS AFTER LOGOUTS####################

public function logout()
{
	//$uid = $_SESSION['userdata']['id'];
	$userid = $_SESSION['userid'];
	
	$arr = array('Online'=>0);
	$this->db->where('User_id',$userid);
	$this->db->update('model_info',$arr);
	//{return "y"; }else{return "n";}
}
public function update_password()
{
	$pass = md5($this->input->post('pass'));
	$uid = $_SESSION['userdata']['id'];
	$arr = array('Password'=>$pass);
	$this->db->where('id',$uid);
	if($this->db->update('models',$arr))
	{
		echo "success";
	}
	else{
		echo $this->display_errors();
	}
}
public function show_info()
{
	$uid = $_SESSION['userdata']['id'];
	$this->db->select('*');
	$this->db->from('model_info');
	$this->db->where('User_id',$uid);
	$res = $this->db->get();
	$res = $res->result_array();
	return $res;
}
public function update_info()
{
	$fname = $this->input->post('first_Name');
	$last_Name = $this->input->post('last_Name');
	$Town = $this->input->post('Town');
	$country = $this->input->post('country');
	$state = $this->input->post('state');
	$Zip = $this->input->post('Zip');
	$vehicle = $this->input->post('vehicle');
	$credits = $this->input->post('credits');
	$uid = $_SESSION['userdata']['id'];
	$arr = array(
	'First_name'=>$fname,
	'Last_name'=>$last_Name,
	'Town'=>$Town,
	'State'=>$state,
	'Country'=>$country,
	'Zipcode'=>$Zip,
	'Availability_dairy'=>$vehicle,
	'Credits'=>$credits
	);
	$this->db->where('User_id',$uid);
	if($this->db->update('model_info',$arr))
	{
	echo "success";
	}
	else
	{
	echo $this->display_errors();
	}
} 

public function addmodel()
{
	if($_POST){
	$firstname = $this->input->post('firstname');
	$lastname = $this->input->post('lastname');
	$nickname = $this->input->post('nickname');
	$email = $this->input->post('email');
	$passwordq = $this->input->post('password');
	$password = md5($passwordq);
	$address = $this->input->post('address');
	$zipcode = $this->input->post('zipcode');
	$country = $this->input->post('country');
	$state = $this->input->post('state');
	$gender = $this->input->post('gender');
	$dob = $this->input->post('dob');
	$gender2 = $this->input->post('gender2');
	//$gender3 = $this->input->post('gender3');
	$levels = $this->input->post('level');
	$sexuality=$this->input->post('sexuality');
	//$age = $this->input->post('age');
	$from = new DateTime($dob);
	$to   = new DateTime('today');
	$age =$from->diff($to)->y;
	$levelwith = $this->input->post('gender5');
	$summary = $this->input->post('summary');
	$details = $this->input->post('details');
	$profilepic = $this->input->post('profilepic');
	$doc1pic = $this->input->post('doc1pic');
	$doc2pic = $this->input->post('doc2pic');
	$category = $this->input->post('category');
	$catarray = array();
	foreach($category as $selected){
		$catarray[] = $selected;
	} 
	$category = implode(',',$catarray);
	$showtype = $this->input->post('showtype');
	$showtypee = array();
	foreach($showtype as $selected){
		$showtypee[] = $selected;
	} 
	$showtype = implode(',',$showtypee);
	$ethnicity= $this->input->post('ethnicity');
	$ethnicittty = array();
	foreach($ethnicity as $selected){
		$ethnicittty[] = $selected;
	} 
	$ethnicity = implode(',',$ethnicittty);
	$appearance= $this->input->post('Apperence');
	$appearan = array();
	foreach($appearance as $selected){
		$appearan[] = $selected;
	} 
	$appearance = implode(',',$appearan);
	
	$hair= $this->input->post('hair');
	$hairr = array();
	foreach($hair as $selected1){
		$hairr[] = $selected1;
	} 
	$hairr1 = implode(',',$hairr);
	
	$willingness= $this->input->post('Willingness');
	$willingn = array();
	foreach($willingness as $selected){ 
		$willingn[] = $selected;
	} 
	$willingness = implode(',',$willingn);
	
	$levelss = implode(',',$levels);
	$sexuality = implode(',',$sexuality);
	
	
	if($_FILES['profilepic']['name']){
		$config['upload_path'] = './uploads/gallery/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '0';
		if($_FILES['profilepic']['name']){
		$config['file_name'] = uniqid().$_FILES['profilepic']['name'];
		}
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if($_FILES['profilepic']['name']){
		$this->upload->do_upload('profilepic');
		}
		$uploadedDetails    = $this->upload->data();    
		$profilepic = $uploadedDetails['file_name'];
	}
		if($profilepic){
			$profile = $profilepic;
			
		}
		else{
			$profile = '';
			
		}
		
		if($_FILES['pic']['name']){
		$config1['upload_path'] = './uploads/gallery/';
		$config1['allowed_types'] = 'gif|jpg|png';
		$config1['max_size']	= '0';
		if($_FILES['pic']['name']){
		$config1['file_name'] = uniqid().$_FILES['pic']['name'];
		}
		$this->load->library('upload',$config1);
		$this->upload->initialize($config1);
		if($_FILES['pic']['name']){
		$this->upload->do_upload('pic');
		}
		$uploadedDetails1   = $this->upload->data();    
		$docpic = $uploadedDetails1['file_name'];
		
		if($docpic){
			$docpic1 = $docpic;
			
		}
		else{
			$docpic1 = '';
			
		}
		
		}
		if($_FILES['documentpic']['name']){
		$config2['upload_path'] = './uploads/gallery/';
		$config2['allowed_types'] = 'gif|jpg|png';
		$config2['max_size']	= '0';
		
		$config['file_name'] = uniqid().$_FILES['documentpic']['name'];
		
		$this->load->library('upload',$config2);
		$this->upload->initialize($config2);
		
		$this->upload->do_upload('documentpic');
		
		$uploadedDetails2    = $this->upload->data();    
		$docpic2 = $uploadedDetails2['file_name'];
		}
	if($docpic2){
			$docpic12 = $docpic2;
			
		}
		else{
			$docpic12 = '';
			
		}
	$models1 = array(
	'Username'=>$nickname,
	'Email'=>$email,
	'Password'=>$password,
	'Age'=>$age,
	'Country'=>$country,
	'Role'=>'model',
	'Gender'=>$gender,
	'Active_status'=>0
	);
	$ab1 = $this->db->insert('models',$models1);
	 $insert_id = $this->db->insert_id();
	
	$arrmodelinfo = array(
	'First_name'=>$firstname,
	'Last_name'=>$lastname,
	'Zipcode'=>$zipcode,
	'User_id'=>$insert_id,
	'Country'=>$country,
	'State'=>$state,
	'Dob'=>$dob,
	'address'=>$address,
	'Gender'=>$gender,
	'gender2'=>$gender2,
	'levels'=>$levelss,
	'levelwith'=>$levelwith,
	'Summary'=>$summary,
	//'Details'=>$details,
	'profile_img'=>$profile,
	'Online'=>0,
	//'doc2pic'=>$docpic12,
	//'doc1pic'=>$docpic1,
	'category'=>$category,
	'show_type'=>$showtype,
	'ethnicity'=>$ethnicity,
	'appearance'=>$appearance,
	'hair'=>$hairr1,
	'willingness'=>$willingness,
	'sexuality'=>$sexuality
	
	);
	
	 //print_r($arrmodelinfo);
	 
	 $ab = $this->db->insert('model_info',$arrmodelinfo);
 $error = $this->db->error();
	  /* if (isset($error['message'])) {
                    echo  $error['message'];
                } die;  */
	
	$this->email->set_newline("\r\n");
	$config = array (
			 'protocol' => 'smtp',
			 'smtp_host' => 'ssl://smtp.googlemail.com',
			 'smtp_port' => 465,
			 'smtp_user' => 'developerweb6@gmail.com',
			 'smtp_pass' => 'codenomad@8804',
			 'protocol' => 'sendmail',
			 'mailpath' => '/usr/sbin/sendmail',
			 'charset' => 'iso-8859-1',
			 'Content-Type'  => 'text/html; charset=UTF-8',
			 'wordwrap' => TRUE
			); 
	$this->load->library('email', $config);
	//$this->email->initialize($config);// add this line
	$this->email->from('test@codenomad.net', 'secret angels');
	$this->email->set_mailtype("html");
	$this->email->to('kalpana@codenomad.net');
	$this->email->subject("New signup for secret angel");
	$this->email->message("
				<div class='outer' style='background: gray;text-align: center;padding: 10px 0;width: 100%;float: left;'>
					<div class='inner' style='margin: 0 auto;width: 75%;'>
					
					<div class='tkm_content' style='background: #fff;width: 90%;margin: 15px auto;padding: 18px 0px;border-radius: 3px;'>
					<strong>Please check your email and open your admin panel and confirm the particular model. </strong><br>
					
					</div>
					
					<div class='tkm_footer' style='color: #fff;'>
					 Secret Angel
					</div>	
					</div>
						
				</div>");  
		$this->email->send();
		
		$this->email->set_newline("\r\n");
	$config = array (
			 'protocol' => 'smtp',
			 'smtp_host' => 'ssl://smtp.googlemail.com',
			 'smtp_port' => 465,
			 'smtp_user' => 'developerweb6@gmail.com',
			 'smtp_pass' => 'codenomad@8804',
			 'protocol' => 'sendmail',
			 'mailpath' => '/usr/sbin/sendmail',
			 'charset' => 'iso-8859-1',
			 'Content-Type'  => 'text/html; charset=UTF-8',
			 'wordwrap' => TRUE
			); 
	$this->load->library('email', $config);
	//$this->email->initialize($config);// add this line
	$this->email->from('test@codenomad.net', 'secret angels');
	$this->email->set_mailtype("html");
	$this->email->to($email);
	$this->email->subject("Thank you for signup");
	$this->email->message("
				<div class='outer' style='background: gray;text-align: center;padding: 10px 0;width: 100%;float: left;'>
					<div class='inner' style='margin: 0 auto;width: 75%;'>
					
					<div class='tkm_content' style='background: #fff;width: 90%;margin: 15px auto;padding: 18px 0px;border-radius: 3px;'>
					<strong>Thank you for signup and wait for admin approval your profile.</strong><br>
					
					</div>
					
					<div class='tkm_footer' style='color: #fff;'>
					 Secret Angel
					</div>	
					</div>
						
				</div>");  
		$this->email->send();
	}
}
public function uploadprofile()
{

	 $uid = $_SESSION['userid'];
	if($_FILES['profile']['name']){
		$config2['upload_path'] = './uploads/gallery/';
		$config2['allowed_types'] = 'gif|jpg|png';
		$config2['max_size']	= '0';
		if($_FILES['profile']['name']){
		$config['file_name'] = uniqid().$_FILES['profile']['name'];
		} 
		$this->load->library('upload',$config2);
		$this->upload->initialize($config2);
		if($_FILES['profile']['name']){
		$this->upload->do_upload('profile');
		}
		$uploadedDetails2    = $this->upload->data();    
		$docpic2 = $uploadedDetails2['file_name'];
		}
	if($docpic2){
			$profile_img = $docpic2;
			
		}
		else{
			$profile_img = '';
			
		}
		
		$models1 = array(
	'profile_img'=>$profile_img
	
	);
		
		//$arr =array('profile_img'=> $profile_img);
		$this->db->where('User_id',$uid);
		$this->db->update('model_info',$models1);

	
}
public function memberprofile()
{

	 $uid = $_SESSION['userid'];
	if($_FILES['memberprofile']['name']){
		$config2['upload_path'] = './uploads/gallery/';
		$config2['allowed_types'] = 'gif|jpg|png';
		$config2['max_size']	= '0';
		if($_FILES['memberprofile']['name']){
		$config['file_name'] = uniqid().$_FILES['memberprofile']['name'];
		}
		$this->load->library('upload',$config2);
		$this->upload->initialize($config2);
		if($_FILES['memberprofile']['name']){
		$this->upload->do_upload('memberprofile');
		}
		$uploadedDetails2    = $this->upload->data();    
		$docpic2 = $uploadedDetails2['file_name'];
		}
	if($docpic2){
			$profile_img = $docpic2;
			
		}
		else{
			$profile_img = '';
			
		}
		
		$memberfile = array(
	'profile_pic'=>$profile_img
	
	);
		
		//$arr =array('profile_img'=> $profile_img);
		$this->db->where('id',$uid);
		$this->db->update('member_signup',$memberfile);

	
}

	############## Code For Save model's about summary
	public function Update_summary()
	{
		echo $summary=$this->input->post('summary'); die;
		
		$uid=$_SESSION['userid'];
		$data=array('Summary'=>$summary);
		$this ->db-> where('User_id', $uid);	
		if($this ->db-> update('model_info',$data))
		{
			$this->db->select('Summary');
			$this->db->from('model_info');
			$this->db->where('User_id',$uid);
			$res = $this->db->get();
			$res = $res->result_array();
			return $res;
		}
		else
		{
			return false;
		}
		
	}
	function get_calender_date($y,$m){
		$date=$y.'-'.$m;
		$this->db->select('*');
		$this->db->like('date',$date);
		$query=$this->db->get("calender");
		$result=$query->result_array();
		foreach($result as $row){
			$cal_data[(int)substr($row['date'],8,2)]=$row['title'];
		} 
		return $cal_data;
		
	}
	############	Function For Create Event	######
	public function create_event()
	{
		$uid=$_SESSION['userid'];
		$data=array(
		'uid'=>$uid,
		'date'=>$this->input->post('date'),
		'title'=>$this->input->post('title'),
		'message'=>$this->input->post('message'),
		'time'=>$this->input->post('time'),
		'duration'=>$this->input->post('duration'),
		'price'=>$this->input->post('price')
		);
		$res=$this->db->insert('calender',$data);
		return $res;
	}
	############	Function For Get All Event	##########
	public function get_events($uid=null){
		$this->db->select('model_info.First_name,model_info.Last_name,model_info.profile_img,calender.date,calender.title,calender.message,calender.time,calender.duration,calender.price,calender.id,calender.total_bookings');
		$this->db->from('calender');
		$this->db->join('model_info', 'calender.uid = model_info.user_id');
		$this->db->order_by("calender.date ASC");
		$this->db->where('calender.date >=',date('Y-m-d'));
		$uid?$this->db->where('calender.uid =',$uid):'';
		$res = $this->db->get();
		$res = $res->result_array();
		return $res; 
		
	}
	public function save_ticket($paypal_data){
		
		$arr = array(
		'user_id'=>$this->session->userdata('userid'),
		'item_name'=>$paypal_data['item_name'],
		'item_id'=>$paypal_data['item_number'],
		'transaction_id'=>$paypal_data['tx'],
		'amount'=>$paypal_data['amt'],
		);
		$ae = $this->db->insert('tickets',$arr);
		if($ae){
			$this->db->set('total_bookings','total_bookings+1',false);
			$this->db->where('id',$paypal_data['item_number']);
			if($this->db->update('calender'))
			{
				/*$this->db->select('*');
				$this->db->from('credit_detail');
				$this->db->where('user_id',$this->session->userdata('userid'));
				$new = $this->db->get();
				if($new->num_rows()>0)
				{
					$this->db->set('credit_left','credit_left+'.$paypal_data["amt"],false);
					$this->db->where('user_id',$this->session->userdata('userid'));
					$this->db->update('credit_detail');
				}
				else
				{
					$ins_data = array(
					'user_id'=>$this->session->userdata('userid'),
					'credits'=>$paypal_data['amt'],
					);
					$this->db->insert('credit_detail',$ins_data);
				}*/
				$this->db->select('*');
				$this->db->from('calender');
				$this->db->where('id',$paypal_data['item_number']);
				$res = $this->db->get();
				return $result = $res->result_array();
			}
			
		}
		else
		{
			echo "error";
		}
	}
	######## get current user credits ########
	public function get_credits(){
		 $user_id = $_POST['user_id']; 
		$this->db->select('credit_left');
		$this->db->from('credit_detail');
		$this->db->where('user_id',$user_id);
		$res = $this->db->get();
		$arr = $res->result_array();
		echo $arr[0]['credit_left'];
		
	}
	############## FUNCTION FOR GETTING EVENT BOOKING INFO ####
	public function get_user_booking_info($event_ids){
		$user_id = $this->session->userdata('userid');
		for($j=0;$j<count($event_ids);$j++)
		{
			$this->db->select('*');
			$this->db->from('tickets');
			$this->db->where('user_id',$user_id);
			$this->db->where('item_id',$event_ids[$j]);
			$res = $this->db->get();
			$result[] = $res->result_array();
			
		}
		return $result;
	}
	########### FUNCTION FOR GETTING EVENT EARNING ####
	public function event_earnings($event_id){
		for($i=0;$i<count($event_id);$i++)
		{
			$this->db->select('sum(amount) as sum');
			$this->db->from('tickets');
			$this->db->where('item_id',$event_id[$i]);
			$res = $this->db->get();
			return $result = $res->result_array();
		
		}
	}
	############   FUNCTION FOR SHOW CALENDAR	######
	public function calendar($y,$m){
		$prefs = array(
        'start_day'    => 'monday',
        'month_type'   => 'long',
        'day_type'     => 'short',
		'show_next_prev'  => TRUE,
        'next_prev_url'   => base_url().'calender');
		
		$prefs['template'] = '

        {table_open}<table border="0" cellpadding="0" cellspacing="0" class="calender">{/table_open}

        {heading_row_start}<tr >{/heading_row_start}

        {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
        {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
        {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

        {heading_row_end}</tr>{/heading_row_end}

        {week_row_start}<tr>{/week_row_start}
        {week_day_cell}<td>{week_day}</td>{/week_day_cell}
        {week_row_end}</tr>{/week_row_end}

        {cal_row_start}<tr class="days">{/cal_row_start}
        {cal_cell_start}<td class="day">{/cal_cell_start}
        {cal_cell_start_today}<td class="day">{/cal_cell_start_today}
        {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

        {cal_cell_content}
		<div class="day_num" data-dat="'.date('Y-m-d').'" data-time="'.$y.'-'.$m.'-{day}">{day}</div>
		<div class="content">{content}</div>
		{/cal_cell_content}
        {cal_cell_content_today}
		<div class="day_num highlight">{day}</div>
		<div class="content">{content}</div>
		{/cal_cell_content_today}

        {cal_cell_no_content}<div class="day_num" data-dat="'.date('Y-m-d').'" data-time="'.$y.'-'.$m.'-{day}">{day}</div>{/cal_cell_no_content}
        {cal_cell_no_content_today}<div class="day_num highlight" data-dat="'.date('Y-m-d').'" data-time="'.$y.'-'.$m.'-{day}">{day}</div>{/cal_cell_no_content_today}

        {cal_cell_blank}&nbsp;{/cal_cell_blank}

        {cal_cell_other}{day}{/cal_cel_other}

        {cal_cell_end}</td>{/cal_cell_end}
        {cal_cell_end_today}</td>{/cal_cell_end_today}
        {cal_cell_end_other}</td>{/cal_cell_end_other}
        {cal_row_end}</tr>{/cal_row_end}

        {table_close}</table>{/table_close}';
		
		$cal_data=$this->get_calender_date($y,$m);
		$this->load->library('calendar', $prefs);
		return $this->calendar->generate($y,$m,$cal_data);
	}

	

}
?>