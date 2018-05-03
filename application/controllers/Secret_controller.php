<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secret_controller extends CI_Controller {

public function __construct() {
	
parent::__construct();
$this->load->library('session');

$this->load->helper('captcha');
$this->load->model('Add_member');
$this->load->database();
$this->load->helper("file");
$this->load->helper('url');
$this->load->library('email');   
$this->load->helper(array('form', 'url'));
}
	
	public function index()
	{
		$vals = array(
        //'word'          => 'Random word',
        'img_path'      => './captcha/',
        'img_url'       => 'http://codenomad.biz/secret-angels/captcha/',
        'font_path'     => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf',
        'img_width'     => '150',
        'img_height'    => 30,
        'expiration'    => 7200,
        'word_length'   => 8,
        'font_size'     => 16,
        'img_id'        => 'Imageid',
        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        // White background and border, black text and red grid
        'colors'        => array(
						'background' => array(255, 255, 255),
						'border' => array(255, 255, 255),
						'text' => array(0, 0, 0),
						'grid' => array(255, 40, 40)
						)
		);

		$cap = create_captcha($vals);
		$data['captcha'] = $cap; 
		$profiles =$this->Add_member->get_profiles(); 
		//print_r($profiles);
		$data['profiles'] = $profiles;
		#$this->load->view('index',$data);
		$this->load->view('landing_page',$data);
		
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function login1(){
		$this->load->view('login_form1');
	}
	
	public function admin_panel(){
	$this->load->view('admin_login');
	}
	public function myfunc(){
		$this->load->view('myfunc');
	}
	public function create()
	{
		$data['categories']=$this->Add_member->get_cat();		
		$this->load->view('create-profile',$data);
	}
	
	//get product price 
	public function getproduct_price(){
		return $this->Add_member->getproduct_price();
	}

	// admin panel
	public function admin()
	{
		echo "hello"; die;
		 $user = $this->session->userdata('userdata');
		if($user['id'])
		{
		$data['response'] = $this->Add_member->customers();
		$data['models'] = $this->Add_member->models();
		$this->load->view('admin',$data);
		}
		else 
		{
			redirect('secret_controller/admin_panel');
		}
		
	}
	
	public function add_model() 
	{
		  $this->Add_member->add_model();
		redirect('/secret_controller/admin');
		
		
	}
	public function update_customer()
	{
		$userid = $this->input->post('user_id');  
		$active = $this->input->post('active');  
		if($active==0){ 
		$data123 = $this->Add_member->activate_customer($userid); 
		}
		else
		{
		$data123 = $this->Add_member->deactivate_customer();
		}
		
		//print_r($data123);
		//redirect('secret_controller/admin');
	}
	public function update_model()
	{
		$active = $this->input->post('active');  
		if($active==0){ 
		echo $data123 = $this->Add_member->activate_model();  
		}
		else{
		echo $data123 = $this->Add_member->deactivate_model();
		}
		//redirect('secret_controller/admin');
	}
	public function deactivate_customer()
	{
		$data123 = $this->Add_member->deactivate_customer();
		redirect('secret_controller/admin');
	}
	public function deactivate_model()
	{
		$data123 = $this->Add_member->deactivate_model();
		redirect('secret_controller/admin');
	}
	public function gallery()
	{
	$data123 = $this->load->view('gallery');
	}
	public function premium()
	{
		$data123 = $this->load->view('premium');
	
	}
	//// add member
	public function add_member()
	{
		$data = $this->Add_member->insert();
		
   
         //Send mail 
       
		
		if($data)
		{
		//$userdata['emailid'] = $data[0]['emailid'];
		$this->session->set_flashdata('signup_check',$data);
		redirect('');
		}
		else{
			
				redirect('/secret_controller/customer');
			
			
		}
		
	}
	public function login(){
	 $data = $this->Add_member->login(); 
	 if($data=="check your username/password")
	 {
		 $this->session->set_flashdata('login_check',$data);
		redirect('',$data);
	 }
	 elseif($data[0]['Role']=="customer")
	 {
		$uid = $data[0]['id'];
		
		 $this->session->set_userdata('userdata',$uid);
		 
		 redirect('/secret_controller/customer'); 
	 }
	 else
	 {	
		$uid = $data[0];
		$email = $data[0]['Email'];
		
		 $this->session->set_userdata('userdata',$uid);
		 
		 $this->session->set_userdata('useremail',$email);
		 if($data[1][0]=="profile_completed")
		 {
		 redirect('/secret_controller/model_profile');
		 }
		 else{
		 redirect('/secret_controller/create'); 
		 }
	 }
	}
	public function customer(){
		
		$this->load->view('customers');
	}
	
	public function models(){
		$this->load->view('models');
	}
	
	public function admin_login()
	{

		$data = $this->Add_member->index();
		
		
		if(!$data[0]['id'])
		{

		
		redirect('');

		}
		else
		{ 
		$userdata['id'] = $data[0]['id'];
		//$userdata['emailid'] = $data[0]['emailid'];
		$this->session->set_userdata('userdata',$userdata);
		redirect('/secret_controller/admin');
		}
				
				
	}
	public function complete_profile()
	{
	
		$data = $this->Add_member->complete_profile();
		if($data=="success")
		{
			redirect(base_url('/model_profile'));
		}
	}
	
	
	
	////MODEL PROFILE AT MEMBER OR USERS END////////
	
	
	public function models_profile() 
	{
		
		if(count($_SESSION)>1)
		{
		$data['user_profile'] = $this->Add_member->show_profile(); 
		//print_r($data['user_profile']);
		$data['post'] = $this->Add_member->get_post();
		//print_r($data['post']);
		$data['gallery'] = $this->Add_member->get_gallery();
		$data['album']=$this->Add_member->get_album();
		$data['video_gallery'] = $this->Add_member->get_video();
		
		 $this->load->view('model_profile',$data);
		}
		else
		{
		redirect('index');
		}
	}
	##########		Function For Share Post
	public function share_post(){
	$data = $this->Add_member->share_post();
	echo $data; 
	
	}
	
	##########  	Function for Put comment on Post ##############
	public function Post_comment(){
		$res=$this->Add_member->Post_comment();
		if($res){
			$comment=$this->Add_member->get_comment($res);
			print_r($comment);
		}
	}
	
	######## Function for deducting credits from users for live videos  ##############
	public function deduct_broadcast_credits(){
		$this->Add_member->deduct_broadcast_credits();
	}
	##########  	Function for Item comment ##############
	public function Item_comment(){
		 $res=$this->Add_member->Item_comment(); 
		if($res=="you must login first")
		{
			echo $res; die;
		}
		$data=""; 
		if($res){$comment=$this->Add_member->get_item_comment($res); }
		for($i=count($comment)-1;$i>=0;$i--){
			//$data.="<div class='single=comment-section'><div class='imagepopit'><img src='../uploads/gallery/".$comment[$i]['profile_pic']."' class='img-responsive img-circle' alt='' style='width:100%;height:100%;'></div><div class='text-comment'><span class='textcomment'>".$comment[$i]['comment']."</span></div></div>";
			if($comment[$i]['profile_pic']=="")
			{
				$comment[$i]['profile_pic'] ="not-available.jpg";
			}
			$data.="<div class='singlecomment-section' style='width: 100%;float: left;border: 2px solid #dedede;background-color: #f1f1f1;border-radius: 5px;padding: 4px 10px ;margin: 0px 0;clear: both;'><div class='imagepopit'><img src='../uploads/gallery/".$comment[$i]['profile_pic']."' class='img-responsive img-circle' alt='' style='width:100%;height:100%;'></div><div class='text-comment'><span class='textcomment'>".$comment[$i]['comment']."</span></div></div>";
		}
		echo $data;
		 
	}
	

	##########  	Function for Show Item comment ##############
	public function Show_item_comment(){
 		$res=$this->input->post('item_code');
		$data="";
		$comment=$this->Add_member->get_item_comment($res);
		for($i=count($comment)-1;$i>=0;$i--){
			if($comment[$i]['profile_pic']==""){
				$comment[$i]['profile_pic'] = "not-available.jpg";
			}
			$data.="<div class='singlecomment-section' style='width: 100%;float: left;border: 2px solid #dedede;background-color: #f1f1f1;border-radius: 5px;padding: 4px 10px ;margin: 0px 0;clear: both;'><div class='imagepopit'><img src='../uploads/gallery/".$comment[$i]['profile_pic']."' class='img-responsive img-circle' alt='' style='width:100%;height:100%;'></div><div class='text-comment'><span class='textcomment'>".$comment[$i]['comment']."</span></div></div>";
		}
		echo $data;
		 
	}
	
	
	##########		Function fot Show comment 	############
	public function Show_comment(){
		$Result=$this->Add_member->Show_comment();
	
		for($i=count($Result)-1;$i>=0;$i--){
			$res.="<div class='commenton'><pre class='commentis' id='slimscrollbar'><div class='modelimageit'><img src='../uploads/gallery/".$Result[$i]['profile_img']."' class='img-responsive img-circle'  style='width:100%; height:100%;'></div>  <span class='textcomment'>".$Result[$i]['comment']."</span></pre></div>";
		}
		echo $res;
		//echo json_encode($Result);
	}
	 
	
	///MODEL MIDEO AT MODEL ////////
	 public function get_media() 
	{		
		
		if(count($_SESSION)>1)
		{
			$data['media']=array();
		$data['user_profile'] = $this->Add_member->show_profile(); 
		//print_r($data['user_profile']);
		$data['post'] = $this->Add_member->singel_user_post($id);
		for($i=0;$i<count($data['post']);$i++)
		{
			array_push($data['media'],array('id'=>$data['post'][$i]['Post_id'],'product'=>$data['post'][$i]['Post_data'],'type'=>'post','time'=>$data['post'][$i]['Submitted_date']));
		}
		#	 Get singel models Gallery ######################################## 
		$data['gallery'] = $this->Add_member->singel_model_gallery($id);
		for($j=0;$j<count($data['gallery']);$j++)
		{
			array_push($data['media'],array('id'=>$data['gallery'][$i]['id'],'product'=>$data['gallery'][$i]['Images'],'type'=>'gallery','time'=>$data['gallery'][$i]['time']));
		}
		
		#	 Get singel models Album##########################################
		$data['album']=$this->Add_member->singel_model_album($id);
		for($n=0;$n<count($data['album']);$n++)
		{
			array_push($data['media'],array('id'=>$data['album'][$n]['id'],'product'=>$data['album'][$n]['cover_img_id'],'type'=>'pic_album','time'=>$data['album'][$n]['date_time']));
		}
		
		#	 Get singel models videols#######################################
		$data['video'] = $this->Add_member->get_videos($id);
		for($v=0;$v<count($data['video']);$v++)
		{
			array_push($data['media'],array('id'=>$data['video'][$v]['id'],'product'=>$data['video'][$v]['Videos'],'type'=>'video_gallery','time'=>$data['video'][$v]['date']));
		}
		for($v=0;$v<count($data['media']);$v++)
		{
			print_r($data['media'][$v]);
			echo "<br>"; 
		}
		function sortFunction( $a, $b ) {
		return strtotime($a["date"]) - strtotime($b["date"]);
		} 
		
			usort($data, "sortFunction");
	 
		echo "<br>"; 
		 
		for($v=0;$v<count($data['media']);$v++)
		{
			print_r($data['media'][$v]);
			echo "<br>";
		}
		die;
		 $this->load->view('model_profile',$data);
		}
		else
		{
		redirect('index');
		}
	
	}
public function showchat(){
	
	 
	$data['user_profile'] = $this->Add_member->show_profile(); 
	$this->load->view('showchat',$data);
}	

public function chatmember(){
	if(isset($this->session->userdata['userid']))
		{
			$idss =  $this->session->userdata['userid'];
			
			$data['memberdata']=$this->Add_member->model_data();
			$data['id'] = $this->Add_member->get_data($idss);
			$profiles =$this->Add_member->get_profiles();
			$data['profiles'] = $profiles;
			$this->load->view('chatmember',$data);
		
		}
		else{
			$this->session->sess_destroy();
			Redirect('index');
		}
	 
	//$data['user_profile'] = $this->Add_member->show_profile(); 
	
}
	
	/* public function hh(){
		
		
		$this->db->select('*');
			$this->db->from('modelsignup');
			$query = $this->db->get();
			$array1 = $query->result_array();
			for($i=0;$i<count($array1);$i++)
			{
				
				$idupdate = $array1[$i]['modelid'];
				$uuid = sprintf('%05d-%05d-%05d-%05d',
  mt_rand( 0, 99999),
  mt_rand( 0, 99999),
  mt_rand( 0, 99999),
  mt_rand( 0, 99999)
 );
 
				
				$this->db->set('text_channel', $uuid); //value that used to update column  
				$this->db->where('modelid', $idupdate); //which row want to upgrade  
				$this->db->update('modelsignup');
			}
	} */
	
	
	
	
	
	public function model_profile() 
	{ 
	
		 
		if(count($_SESSION)>1)
		{
			#$data['ethnicity']=$this->Add_member->get_ethicity(explode(",",$data['Model_profile'][0]['ethnicity']));
			#$data['hair']=$this->Add_member->get_hair(explode(",",$data['Model_profile'][0]['hair']));
			#$data['willingness']=$this->Add_member->get_willingness(explode(",",$data['Model_profile'][0]['willingness']));
		$data['user_profile'] = $this->Add_member->show_profile(); 
		$data['ethnicity']=$this->Add_member->get_ethicity(explode(",",$data['user_profile'][0]['ethnicity']));
		$data['hair']=$this->Add_member->get_hair(explode(",",$data['user_profile'][0]['hair']));
		$data['willingness']=$this->Add_member->get_willingness(explode(",",$data['user_profile'][0]['willingness']));
		/* $earr=array();
		$ethnicity=$this->Add_member->get_ethicity(explode(",",$data['user_profile'][0]['ethnicity']));
		for($i=0;$i<count($ethnicity);$i++){
			array_push($earr,$ethnicity[$i]['cat_name']);
		}
		echo '<pre>';
		print_r($data['user_profile']);
		echo '</pre>';
		die; */
		
		//print_r($data['user_profile']);
		$data['post'] = $this->Add_member->get_post();
		for($i=0;$i<count($data['post']);$i++){
			$comment=$this->Add_member->Show_comment($data['post'][$i]['Post_id']);
			$data['post'][$i]['comment'] = array($comment);
		}
		
		$data['gallery'] = $this->Add_member->get_gallery();
	
		$data['album']=$this->Add_member->get_album();
		
		$data['video_gallery'] = $this->Add_member->get_video();
		 $this->load->view('model_profile',$data);
		}
		else
		{
		redirect('index');
		}
	}
	
	///MEMBER SIGN UP/////
	public function members_signup3()
	{		
		$data = $this->Add_member->memberss_login();
		if ($data == "blank"){
			$this->session->set_flashdata('failed', ' Please Fill All Fields');
			redirect('member_signup');
		}else{
				$this->session->set_userdata('userid',$data);
				Redirect('Products/buy_credit');
			}
			
		
	}
	
	############ Open member signup page ########################
	 public function member_signup()
	 {
		 $this->load->view('user_signup'); 
	 }
	############	 Check email for signup member 	#############
	public function check_email()
	{
		$data=$this->Add_member->check_email();
		echo $data;
	}
	
	############	 Check User Name for signup member 	#############
	public function check_username()
	{
		$data=$this->Add_member->check_username();
		echo $data;
	}

	///////////////////
	public function verify(){
		$id = base64_decode($this->input->get('id'));
		$post = $this->Add_member->verify($id);
		 $this->load->view('verify');
		
	}
	public function testing()
	{
		$data['header']=isset($this->session->userdata['userid'])?"memberheader.php":"header.php";
		 $this->load->view('demo',$data);
		
	}
	# ADD TO FAVORITE 
	public function add_favorite()
	{
		 $fav_angel_id = $this->input->post('fav_angel_id');
		 $user_id = $this->input->post('user_id');
		$data =$this->Add_member->add_fav($user_id ,$fav_angel_id );
		echo $data;
	} 
	
	#Remove To Favorite List
	public function remove_fav()
	{
		$id = $this->input->post('id');
		//$linkns = $this->input->post('links');
		$data =$this->Add_member->remove_fav($id);
		echo $data;
	} 
	
	
	///LOGIN FORM DATA/////
	public function login_form()
	{
		 $data =$this->Add_member->logins_form();
		 if($data == "not_right_information"){
			echo 'invalid login details';
			//$this->session->set_flashdata('failed',' invalid login details');
			 //redirect(base_url('/user_login'));
		}
		 
		 else if($data){
			 $ids = $data[0]['id'];
			 $role=$data[0]['Role'];
			 
			 if($role=='model'){
				 $this->session->set_userdata('userid',$ids);
			 
			 $this->session->set_flashdata('success','you are successfully logged in tou your profile');
			// $this->load->view('create-profile');
			 
			//redirect(base_url('secret_controller/model_profile')); 
			 echo base_url('secret_controller/model_profile');
			//echo 'model_profile';
				 
			 }
			 else{
			 
		 $this->session->set_userdata('userid',$ids);
			 
			 $this->session->set_flashdata('success','you are successfully logged in tou your profile');
			// $this->load->view('create-profile');
			 
			//redirect(base_url('/main_page')); 
			echo base_url('/main_page');
			 }
		 }
		
		 else{
			 
			 
		 }
	}
	# Forgot Password 
	public function forgot_pw()
	{
	
		$data=$this ->Add_member->forgot_password();
		if($data == "right_information"){
			
			$email =$_POST['email'];
			
			$email_setting  = array('mailtype'=>'html');
			$this->email->initialize($email_setting);		
			$this->email->from('kalpana@codenomad.net','Admin');
			$this->email->to($email);
				$this->email->subject('Reset Password');				
				$mail = base64_encode($email);
				$base_url = "http://codenomad.biz/secret-angels/reset_pw/?em=".$mail;				
			$this->email->message('You can access your profile after Reset Password...please  <a href="'.$base_url.'">Click Here.....</a>to Reset your Password');			
				$this->email->send();
					$this->session->set_flashdata('success',' Welcome Member to the world of Secret Angels, kindly check your email for Reset your Password');				
				redirect('/user_login'); 
						
		 }
		 else if($data == "not_right"){
			 
			$this->session->set_flashdata('failed',' invalid login details');
			 redirect(base_url('/forgot_pwd'));
			 
		 }
	}
	
	//mail page
	
	public function main_page()
	{
		if(isset($this->session->userdata['userid']))
		{
			$idss =  $this->session->userdata['userid'];
			$data['memberdata']=$this->Add_member->model_data();
			$data['id'] = $this->Add_member->get_data($idss);
			$profiles =$this->Add_member->get_profiles();
			$data['profiles'] = $profiles;
			$this->load->view('main_page',$data); 
		
		}
		else{
			$this->session->sess_destroy();
			Redirect('index');
		}
		   
	}
	
	/////////////////////
	
	////PROFILE PAGE VIEW//////////////////////
	public function profile_page()
	{
		if(isset($this->session->userdata['userid']))
		{
			$id=$this->session->userdata['userid'];
			$data['id'] = $this->Add_member->get_data($id);
			$data['member_data'] = $this->Add_member->get_data($id);
			$data['country']=$this->Add_member->getcountry($data['member_data'][0]['country']);
			$data['state']=$this->Add_member->getstat($data['member_data'][0]['state']);
			$data['city']=$this->Add_member->getcty($data['member_data'][0]['city']);
			$this->load->view('profile_page',$data);
		}else{
			Redirect('index');
		}
	}
	
	///////////////////////////////////////////
	
	///setting submit button///
	public function settingss($idsss){
		
	$data= $this->Add_member->setting_updation($idsss);
	
	
	if($data=="success"){
		
		$this->session->set_flashdata('success',' Your Profile has  been updated...');
		
			redirect('/Secret_controller/setting');
		
	}
	
	}
	
		////Setting//////////////////////
	public function setting()
	{
		$idss =  $this->session->userdata['userid'];
		//$data =$this->Add_member->get_data($idss);
		
		  $data['id'] = $this->Add_member->get_data($idss);
             $this->load->view('setting',$data);
		
	      // $this->load->view('setting');	
	}

	////term & Contitions//////////////////////
	public function terms()
	{
        $this->load->view('term_condtion');	
	}
	
	///////////////////////////////////////////
	
	 
	public function video_model_end($callee_id=Null){
		 $data['callee_id'] =$callee_id; 
		$data['current_user'] = $this->session->userdata('userid');
		$this->load->view('video_model_end',$data);
	}
	//////// MODEL PROFILE AFTER CLICK ON IMAGE ON GALLERY/////////
	
	 public function profile($username=NULL){

			$data['header']=isset($this->session->userdata['userid'])?"memberheader.php":"header.php";
			$data['userid'] =  $idss =  $this->session->userdata['userid']; 
			$model_id=$this->Add_member->get_model_id($username);
			$model_id=$model_id[0]['id'];
			$data['id'] = $this->Add_member->get_data($idss);
			$data['Model_profile'] = $this->Add_member->getmodel_detail($model_id);
		
			$data['ethnicity']=$this->Add_member->get_ethicity(explode(",",$data['Model_profile'][0]['ethnicity']));
			$data['hair']=$this->Add_member->get_hair(explode(",",$data['Model_profile'][0]['hair']));
			$data['willingness']=$this->Add_member->get_willingness(explode(",",$data['Model_profile'][0]['willingness']));
			$data['media']=array();
			//$data['video_gallery'] = $this->Add_member->get_videos($model_id);
			//$data['gallery'] = $this->Add_member->get_gallerys($model_id);
			//print_r($data['user_profile']);
		$data['post'] = $this->Add_member->singel_user_post($model_id);
	
		for($i=0;$i<count($data['post']);$i++)
		{
			
			array_push($data['media'],array('id'=>$data['post'][$i]['Post_id'],'product'=>$data['post'][$i]['Post_data'],'type'=>'post','free'=>$data['post'][$i]['free'],'time'=>$data['post'][$i]['Submitted_date']));
		}
		
		#	 Get singel models Gallery ######################################## 
		$data['gallery'] = $this->Add_member->singel_model_gallery($model_id);
		for($j=0;$j<count($data['gallery']);$j++)
		{
			array_push($data['media'],array('id'=>$data['gallery'][$j]['id'],'product'=>$data['gallery'][$j]['Images'],'type'=>'gallery','free'=>$data['gallery'][$j]['free'],'time'=>$data['gallery'][$j]['time']));
		}
		
		#	 Get singel models Album##########################################
		$data['album']=$this->Add_member->singel_model_album($model_id);
		for($n=0;$n<count($data['album']);$n++)
		{
			array_push($data['media'],array('id'=>$data['album'][$n]['id'],'product'=>$data['album'][$n]['cover_img_id'],'type'=>'pic_album','free'=>$data['album'][$n]['status'],'time'=>$data['album'][$n]['date_time']));
		}
		
		#	 Get singel models videols#######################################
		$data['video'] = $this->Add_member->get_videos($model_id);
		for($v=0;$v<count($data['video']);$v++)
		{
			array_push($data['media'],array('id'=>$data['video'][$v]['id'],'product'=>$data['video'][$v]['Videos'],'type'=>'video_gallery','free'=>$data['video'][$v]['free'],'time'=>$data['video'][$v]['date'],'screenshot'=>$data['video'][$v]['screenshot']));
		}
		
		function sortFunction( $a, $b ) {
		return strtotime($a["date"]) + strtotime($b["date"]);
		} 
	
			usort($data['media'], "sortFunction");
			$this->load->view('models_profile',$data);
			
	}  
	
	 
	
	// function for display model's media ...................
	public function Show_models_media(){
		
			
			
			$idss =  $this->session->userdata['userid'];
			
				$data['media']=array();
			
		$data['post'] = $this->Add_member->singel_user_post($idss);
	
		/* for($i=0;$i<count($data['post']);$i++)
		{
			
			array_push($data['media'],array('id'=>$data['post'][$i]['Post_id'],'product'=>$data['post'][$i]['Post_data'],'type'=>'post','free'=>$data['post'][$i]['free'],'time'=>$data['post'][$i]['Submitted_date']));
		} */
		
		#	 Get singel models Gallery ######################################## 
		$data['gallery'] = $this->Add_member->singel_model_gallery($idss);
		/* for($j=0;$j<count($data['gallery']);$j++)
		{
			array_push($data['media'],array('id'=>$data['gallery'][$j]['id'],'product'=>$data['gallery'][$j]['Images'],'type'=>'gallery','free'=>$data['gallery'][$j]['free'],'time'=>$data['gallery'][$j]['time']));
		} */
		
		#	 Get singel models Album##########################################
		$data['album']=$this->Add_member->singel_model_album($idss);
		/* for($n=0;$n<count($data['album']);$n++)
		{
			array_push($data['media'],array('id'=>$data['album'][$n]['id'],'product'=>$data['album'][$n]['cover_img_id'],'type'=>'pic_album','free'=>$data['album'][$n]['status'],'time'=>$data['album'][$n]['date_time']));
		} */
		
		#	 Get singel models videols#######################################
		$data['video'] = $this->Add_member->get_videos($idss);
		/* for($v=0;$v<count($data['video']);$v++)
		{
			array_push($data['media'],array('id'=>$data['video'][$v]['id'],'product'=>$data['video'][$v]['Videos'],'type'=>'video_gallery','free'=>$data['video'][$v]['free'],'time'=>$data['video'][$v]['date']));
		}
		
		function sortFunction( $a, $b ) {
		return strtotime($a["date"]) - strtotime($b["date"]);
		} 
		
			usort($data['media'], "sortFunction");
			$this->load->view('models_profile',$data); */
			/* echo "<pre>";
			print_r($data['gallery']);
			echo "</pre>"; */
			$r=1;
			for($l=count($data['gallery'])-1;0<$l;$l--)
			{ 
				
					$img_url = "uploads/gallery/".$data['gallery'][$l]['Images'];
				$html_data .="<li><i class='fa fa-close delimg' onclick='delimg(this);' id='delimg' data-toggle='tooltip' data-id='".$data['gallery'][$l]['id']."' data-img='".$data['gallery'][$l]['Images']."' title='delete'></i><div  id='check' style='height:200px'><img onclick='currentSlide(".$r.");openslider();' src='".base_url($img_url)."'><i title='Add to favourite' aria-hidden='true'></i></div></li>";
				$r++;
				
					 
			}
			  
			echo $html_data;
			die; 
			
	}
		
/* ///////////////////////////////////////////////////
	public function Get_model_media()
	{
		
		$model_id=$this->input->post('model_id');
		$data['img'] = $this->Add_member->get_gallerys($model_id);
		for($i=0;$i<count($data['img']);$i++)
		{
			$html_data .="<li><div id='check' style='height:".rand(100, 400)."px'><img src='./uploads/gallery/".$data['img'][$i]['Images']."'></div></li>";
		}
		echo $html_data;
	}
	 */
	#CHANGE PASSWORD ########################################
	public function change_pwd()
	{
		$email=$this->input->POST('email');
		$currentpwd=$this->input->POST('currentpwd');
		$newpwd=$this->input->POST('newpwd');
		$result=$this->Add_member->change_pwd($email,$currentpwd,$newpwd);
		echo $result ? 'You Password Update' : 'Something Happened Wrong Try Again';
	}
	
	/////////////////////////////////////////////////////////////////
     public function upload_gallery()
	{
		$data = $this->Add_member->upload_gallery();
		print_r($data);
	
	}
	#Redirect to create new album===========================
	public function new_album()
	{
		$data['user_profile'] = $this->Add_member->show_profile(); 
		$this->load->view('create_album',$data);
	}
	# Code for create Album=================================
	public function create_album()
    {
		
		$data=$this->Add_member->create_album();
		
        if($data=="success")
		{
		redirect(base_url('/model_profile'));
		}
		else
		{
		print_r($data);
		}  
    }
	
	#SHOW ALBUM================================
	public function show_album() 
	{
		$id=$this->input->post('id');
		$data = $this->Add_member->show_pic($id);
		$myslides='';
		$column='';
		$i=1;
		foreach($data as $value)
		{
			$myslides.= '<div class="mySlides" id="'.$value["id"].'"><a class="trashicon" onclick="delete_img(this);" data-img="'.$value["Images"].'" data-id="'.$value["id"].'"><span class="glyphicon glyphicon-trash"></span></a>
      <div class="numbertext">'.$i.'</div>
      <img id="divimg" src="'.base_url("/uploads/gallery/".$value["Images"]).'" style="width:100%">
    </div>';
	$i++;
		}
		$j=1;
		foreach($data as $value)
		{
		  $column .='<div class="column" id="'.$value["id"].'">
      <img class="demo cursor" src="'.base_url("/uploads/gallery/".$value["Images"]).'" style="width:100%" onclick="currentSlide('.$j.')" alt="'.$j.'">
    </div>'; 
			$j++;
		}
		$html_data=array($myslides,$column);
		echo json_encode($html_data);
	}
	 
	 
	#FUNCTION FOR DELETE IMAGE FROM Album
	public function delete_img()
	{
		$id=$this->input->post('id');
		$img=$this->input->post('img');
		
		$data = $this->Add_member->delete_img($id,$img);
		echo $data;
	}
	
	
	////DELETE VBIDEO AT MODEL END/////
	
	Public function delete_videos(){
		$data=$this->Add_member->delete_videos();
	
		echo $data;
		redirect('/model_profile');
				
	}
	
	

	
	////UPLOADS VIDEOS OF THE MODEL////////
	
	public function upload_video()
	{
		
		
	$data = $this->Add_member->upload_video();
	print_r($data); die;
	if($data=="success")
	{
		 print_r($data);
	//redirect(base_url('/model_profile'));
	}
	else
	{
	print_r($data);
	}
	}
	
	
	public function logout(){
	$this->Add_member->logout();
	$this->session->sess_destroy();
	redirect('index');
	}
	public function admin_logout()
	{
		$this->session->sess_destroy();
		redirect('/secret_controller/admin_panel');
	}
	 
	public function switch_online()
	{
		$this->Add_member->switch_online();
	}
	public function change_password()
	{
		$this->load->view('change_password');
	}
		public function update_personalinfo()
	{
		$data['data'] = $this->Add_member->show_info();
		//print_r($data); die;
		$this->load->view('update_personalinfo',$data);
	}
	
	 public function update_info(){
		$data = $this->Add_member->update_info();
		if($data=="success")
		{
			redirect('/update_personalinfo');
		}
	 }
	 public function transactions(){
		 $this->load->view('transaction');
	 }
	 public function statics(){
		 $this->load->view('statics');
	 }
	 public function withdraw_money(){
		 $this->load->view('withdraw_money');
	 }
	 public function landing_page()
	 {
		 $this->load->view('landing_page');
	 }
	 public function user_login()
	 {
	!isset($this->session->userdata['userid'])? $this->load->view('user_login'):Redirect('main_page');
	//!isset($this->session->userdata['userid'])? $this->load->view('landing_page'):Redirect('main_page');
		/* if(!isset($this->session->userdata['userid']))
		{ 
			$this->load->view('user_login');
		}else{
			Redirect('main_page');
		} */
		
	 }
	 
	 public function forgot_pwd()
	 {
		$this->load->view('forgot_pwd');
	 }
	 // start private video chat 
	public function video_call($model_id=NULL){
		//$data['video_channel']= $video_channel;
		$data['model_id']= $model_id;
		
		$data['current_user'] = $this->session->userdata['userid'];
		$data['Model_profile'] = $this->Add_member->getmodel_detail($model_id);
		$this->load->view('video_calling',$data);
	}
	  public function reset_pw()
	 {
		 if($_GET)
		 {
			$email = base64_decode($_GET['em']);
			$this->session->set_flashdata('success','');
			$data['emailid'] =$email;
			$this->load->view('reset_pwd',$data);
		 }
		 
		 else{
				redirect(base_url('/user_login'));
			 }
		
	 }
	 
	 #Reset Password code
	public Function update_reset_pw(){
	$pwd=$this->input->post('password');
	$email=$this->input->post('email');
	$confirm_pwd=$this->input->post('Confirm_password');
		if($pwd!=$confirm_pwd)
		{
			$this->session->set_flashdata('failed','Please confirm the password');				
			redirect(base_url('/reset_pw'));
		}
		else {
			$data = $this->Add_member->update_pwd($pwd,$email);
			if($data=='success')
			{
				$this->session->set_flashdata('success','Password updated successfully! Login here with new password.');
				redirect(base_url('/user_login'));
			}
			else {
				$this->session->set_flashdata('failed','Something happned wrong! Please try again.');				
				redirect(base_url('/reset_pw'));
			}
		}
	}
	
	 
	 public function user_signup()
	 {
		 $this->load->view('user_signup');
	 }
	
	 
	 public function ajax_state_list($country_id)
    {
        $this->load->helper('url');
        $this->load->model('Add_member');
        $data['state'] = $this->Add_member->getstate($country_id);
		echo json_encode($data['state']);
       // $this->load->view('Member-Registration',$data);
    }
    
    public function ajax_city_list($state_id)
    {
        $this->load->helper('url');
        $this->load->model('Add_member');
        $data['city'] = $this->Add_member->getcity($state_id);
		echo json_encode($data['city']);
       // $this->load->view('Member-Registration',$data);
    }
	 
	
	public function signup_form()
	{
		$this->load->view('payment_signup');
	}
	
	public function test()
	{
		$this->load->view('test');
	}
	
	
	
	
	
	
	
	#GET MODEL DATA FOR DISPLAY FOR MEMBER=============
	public function show_model_pic()
	{
		$data['model_data']=$this->Add_member->model_data();
		
		
		$url=base_url()."profile/";
		$id=$this->session->userdata['userid'];
		$data['fav_data']=$this->Add_member->get_fav($id);
		$fev_id_arry=array();
		
		for($j=0;$j<count($data['fav_data']);$j++)
		{
			$fev_id_arry[]=$data['fav_data'][$j]['fav_angel_id'];
		}
			
		for($i=0;$i<count($data['model_data']);$i++)
		{ 	
			
			in_array($data['model_data'][$i]['User_id'], $fev_id_arry)? $cls='fa fa-heart' : $cls='fa fa-heart-o';
			
			
			   if($data['model_data'][$i]['Online'] == 1)
			   {
				$ab =  "<i id='online".$data['model_data'][$i]['User_id']."' class='fa fa-circle green online' title='Online' data-status='".$data['model_data'][$i]['Online']."'></i>";
				
				}
			else{	
				
				$ab = "<i id='online".$data['model_data'][$i]['User_id']."' class='fa fa-circle gray online' title='Offline' data-status='".$data['model_data'][$i]['Online']."'></i>";
				
			} 
		
		
		$html_data .="<li><div  data-id='".$data['model_data'][$i]['User_id']."' id='check' style='height:200px'><a href='".$url.$data['model_data'][$i]['Username']."'><img src='./uploads/gallery/".$data['model_data'][$i]['profile_img']."'><div class='modelname'><span>".$data['model_data'][$i]['First_name']."</span></div></a><i class='".$cls."' onclick='add_fav(".$data['model_data'][$i]['User_id'].",".$id.",this)' title='Add to favourite' aria-hidden='true'></i>".$ab."</li>";
		
		}
		
		echo $html_data;
	}
	
	
	

	
		#GET MODEL DATA FOR DISPLAY FOR GUEST USER =============
	public function show_models()
	{
		
		$data['model_data']=$this->Add_member->model_data();
		//print_r($data['model_data']); die;
		
		$url=base_url()."profile/";
		$id=$this->session->userdata['userid'];
		/* $data['fav_data']=$this->Add_member->get_fav($id);
		$fev_id_arry=array();
		
		for($j=0;$j<count($data['fav_data']);$j++)
		{
			$fev_id_arry[]=$data['fav_data'][$j]['fav_angel_id'];
		}
			 */
		for($i=0;$i<count($data['model_data']);$i++)
		{ 	
			
			//in_array($data['model_data'][$i]['User_id'], $fev_id_arry)? $cls='fa fa-heart' : $cls='fa fa-heart-o';
			
			
			   if($data['model_data'][$i]['Online'] == 1)
			   {
				$ab =  "<i id='online".$data['model_data'][$i]['User_id']."' class='fa fa-circle green online' title='Online' data-status='".$data['model_data'][$i]['Online']."'></i>";
				
				}
			else{	
				
				$ab = "<i id='online".$data['model_data'][$i]['User_id']."' class='fa fa-circle gray online' title='Offline' data-status='".$data['model_data'][$i]['Online']."'></i>";
				
			} 
		
		 
		$html_data .="<li style='width:33.33%;float:left;'><div data-id='".$data['model_data'][$i]['User_id']."' id='check' style='height:200px'><a href='".$url.$data['model_data'][$i]['Username']."'><img src='./uploads/gallery/".$data['model_data'][$i]['profile_img']."'><div class='modelname' ><span >".$data['model_data'][$i]['First_name']."</span></div></a><i class='fa fa-heart-o'  title='Only For Member !' aria-hidden='true'></i>".$ab."</div></li>";
		 
		} 
		
		echo $html_data;
	}
	
	
	#GET MODEL DATA FOR DISPLAY FOR GUEST USER =============
	public function show_model_toguest()
	{
		$data['model_data']=$this->Add_member->model_data();
		
		
		$url=base_url()."profile/";
		$id=$this->session->userdata['userid'];
		$data['fav_data']=$this->Add_member->get_fav($id);
		$fev_id_arry=array();
		
		for($j=0;$j<count($data['fav_data']);$j++)
		{
			$fev_id_arry[]=$data['fav_data'][$j]['fav_angel_id'];
		}
			
		for($i=0;$i<count($data['model_data']);$i++)
		{ 	
			
			//in_array($data['model_data'][$i]['User_id'], $fev_id_arry)? $cls='fa fa-heart' : $cls='fa fa-heart-o';
			
			
			   if($data['model_data'][$i]['Online'] == 1)
			   {
				$ab =  "<i id='online".$data['model_data'][$i]['User_id']."' class='fa fa-circle green online' title='Online' data-status='".$data['model_data'][$i]['Online']."'></i>";
				
				}
			else{	
				
				$ab = "<i id='online".$data['model_data'][$i]['User_id']."' class='fa fa-circle gray online' title='Offline' data-status='".$data['model_data'][$i]['Online']."'></i>";
				
			} 
		
		
		$html_data .="<li><div data-id='".$data['model_data'][$i]['User_id']."' id='check' style='height:200px'><a href='".$url.$data['model_data'][$i]['Username']."'><img src='./uploads/gallery/".$data['model_data'][$i]['profile_img']."'><div class='modelname'><span >".$data['model_data'][$i]['First_name']."</span></div></a><i class='fa fa-heart-o'  title='Only For Member !' aria-hidden='true'></i>".$ab."</div></li>";
		
		} 
		
		echo $html_data;
	}
	#GET ONLINE STATUS OF MMODELS==========================================
	public function get_online_status(){
		$status=array();
		$data['memberdata']=$this->Add_member->model_data();
		for($i=0;$i<count($data['memberdata']);$i++)
		{
			$status[$data['memberdata'][$i]['User_id']]=$data['memberdata'][$i]['Online'];
		}
		echo json_encode($status);
		
	}
	

	
	#GET MODEL DATA FOR DISPLAY FOR MEMBER=============
	public function show_fav_model()
	{
		$momdel_ids=array();
		$url=base_url()."profile/";
		$idss =  $this->session->userdata['userid'];
		#$data['id'] = $this->Add_member->get_data($idss);
		$profiles =$this->Add_member->get_fav($idss);
		
		for($i=0;$i<count($profiles);$i++){
			$momdel_ids[]=$profiles[$i]['fav_angel_id'];
		}
		$angels_data =$this->Add_member->get_fav_angel($momdel_ids);
		
        $data['profiles'] = $angels_data;
		
		for($i=0;$i<count($data['profiles']);$i++)
		{ 
			   if($data['profiles'][$i]['Online'] == 1)
			   {
				$ab =  "<i id='online".$data['profiles'][$i]['User_id']."' class='fa fa-circle green online' title='Online' data-status='".$data['profiles'][$i]['Online']."'></i>";
				$ab1='1';
				}
			else{	
				
				$ab = "<i id='online".$data['profiles'][$i]['User_id']."' class='fa fa-circle gray online' title='Offline' data-status='".$data['profiles'][$i]['Online']."'></i>";
				$ab1='2';
			} 
		
		
		$html_data .="<li id='".$i."'><div data-id='".$data['profiles'][$i]['User_id']."' id='check' style='height:200px'><a href='".$url.$data['profiles'][$i]['Username']."'><img src='./uploads/gallery/".$data['profiles'][$i]['profile_img']."'></a><i class='fa fa-heart' onclick='add_fav(".$data['profiles'][$i]['User_id'].",".$idss.",this)' title='Add to favourite' aria-hidden='true'></i>".$ab."</div></li>";
		
		}
		
		echo $html_data;
	}
	
	
	#########		Function for Like post Image and Video 	#############
	public function post_like(){
		$Result=$this->Add_member->post_like();
		echo $Result[0]['likes'];
	}//end function 
	
	######### 		Function for get Total Likes of Post	#############
	public function get_total_like(){
		$likes_data=array();
		$data['total']=$this->Add_member->get_total_like();
		$data['user_like']=$this->Add_member->user_likes();

		//array_push($likes_data,$data['total'][0]['likes'],$data['user_like']);
		$likes_data['total']=$data['total'][0]['likes'];
		$likes_data['like_status']=$data['user_like'];
		echo json_encode($likes_data);
	}// end Function
	
	######### 		Function for get Total comment of Post	#############
	public function Get_total_comment(){
		$likes_data=array();
		$data['total']=$this->Add_member->Get_total_comment();
		//$data['user_like']=$this->Add_member->user_likes();
		print_r($data['total']);
		//array_push($likes_data,$data['total'][0]['likes'],$data['user_like']);
		//$likes_data['total']=$data['total'][0]['likes'];
		//$likes_data['like_status']=$data['user_like'];
		//echo json_encode($likes_data);
	}// end Function
	

	public function favourite()
	 {
		if(isset($this->session->userdata['userid']))
		{
			$idss =  $this->session->userdata['userid'];
			$data['id'] = $this->Add_member->get_data($idss);
			$this->load->view('favourite',$data);
		}else{
			Redirect('index');
		}
	 }
	 public function thankyou()
	 {
		$this->load->view('thankyou'); 
		 
	 }
	 public function modelsignupp()
	 {
		 $date=date("Y-m-d");
		 $form_response=$this->input->post('g-recaptcha-response');
		 $url='https://www.google.com/recaptcha/api/siteverify';
	
		 $sitekey='6LcaMFUUAAAAANXkg4TdjWYcKJoKQFYkeMsJCi4J';
		 $response=file_get_contents($url.'?secret='.$sitekey.'&response='.$form_response.'&remoteip='.$_SERVER['REMOTE_ADDR']);
		 $captch_res=json_decode($response); 
		 $dob=$this->input->post('dob');
			$from = new DateTime($dob);
			$to   = new DateTime('today');
			$age =$from->diff($to)->y;
		
	 if(isset($captch_res->success)&& $captch_res->success=="true" || $captch_res->success=="1")
		 {
			 $data['id'] = $this->Add_member->addmodel();
				$this->session->set_flashdata('inserted','Thank you for signup.Please wait for admin active your profile');
		 
				redirect('thankyou');
		 }else
		 {
		 	echo "hello"; die;
			$this->session->set_flashdata('failed','Something Happened Wrong'); 
			redirect('create');
		 } 
		 
	}
	 
	 public function uploadprofile()
	 {
		 
		 $data['id'] = $this->Add_member->uploadprofile();
		 redirect(site_url('/model_profile'));
	 } 
	 public function memberprofile()
	 {
		 
		 $data['id'] = $this->Add_member->memberprofile();
		 redirect(site_url('/profile_page'));
	 }
	 public function Update_summary()
	 {
		 $data['summar'] = $this->Add_member->Update_summary();
		echo $data['summar'][0]['Summary'];
	 }
	 Public function events(){

		 $data['header']=isset($this->session->userdata['userid'])?"memberheader.php":"header.php";
		$data['events']=$this->Add_member->get_events();
		$this->load->view('events',$data);
	 }
	 public function get_credits(){
		 return $this->Add_member->get_credits();
	 }
	 Public function newshow(){
		$idss =  $this->session->userdata['userid'];
		$data['memberdata']=$this->Add_member->model_data();
		$data['id'] = $this->Add_member->get_data($idss);
		$profiles =$this->Add_member->get_profiles();
		$data['header']=isset($this->session->userdata['userid'])?"memberheader.php":"header.php";
		$data['events']=$this->Add_member->get_events();
		$id_arr = array();
		for($i=0;$i<count($data['events']);$i++)
		{
			$id_arr[] = $data['events'][$i]['id'];
		} 
		$data['paid_info']=$this->Add_member->get_user_booking_info($id_arr);
		
		$this->load->view('events',$data);
	 }
	 public function calender(){
		
		$y=empty($this->uri->segment(2))? date('Y'):$this->uri->segment(2);
		$m=empty($this->uri->segment(3))? date('m'):$this->uri->segment(3);
		
		$data['cal']=$this->Add_member->calendar($y,$m);
		$data['user_profile'] = $this->Add_member->show_profile();
		
		$this->load->view('calender',$data);
		
	 }
	#########	Function for Create Event 	###########
	public function create_event(){
		
		$res=$this->Add_member->create_event();
		echo $res;
	}
	
	// Function for Live Now
	
	public function Livenow(){
		$data['user_profile'] = $this->Add_member->show_profile();
		$data['header']=isset($this->session->userdata['userid'])?"memberheader.php":"header.php";
		$this->load->view('livenow',$data);
	}
	public function contact_us_mail() {
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$contact = $this->input->post('contact');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$this->email->from($email);
		$this->email->to('vijay@codenomad.net');
		$this->email->subject($subject);
		$this->email->message('<b>Name : </b>'.$name.'<br> <b>email : </b>'.$email.'<br> <b>Contact : </b>'.$contact.'<br> <b>Message :</b>'.$message.'<br>');
		$this->email->set_mailtype("html");
		if($this->email->send()){
			echo "email sent successfully";

		}
	}
	public function Listingevents(){
		
	if(isset($this->session->userdata['userid'])){ 
		$uid=$this->session->userdata['userid']; 
		$data['user_profile'] = $this->Add_member->show_profile(); 
		$data['header']=isset($this->session->userdata['userid'])?"memberheader.php":"header.php";
		$data['events']=$this->Add_member->get_events($uid);
		for($i=0;$i<count($data['events']);$i++)
		{
			$event_ids[] = $data['events'][$i]['id'];
		}
		$data['events_earnings']=$this->Add_member->event_earnings($event_ids); 
		$this->load->view('events',$data);
		}else{
			redirect('index	');
		} 
	}
	
}
