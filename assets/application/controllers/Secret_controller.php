<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secret_controller extends CI_Controller {

public function __construct() {
	
parent::__construct();
$this->load->library('session');
$this->load->helper('captcha');
$this->load->model('Add_member');
$this->load->database();
$this->load->helper('url');
$this->load->library('email');   
$this->load->helper(array('form', 'url'));
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
 $data['profiles'] = $profiles;
		$this->load->view('index',$data);
	}
	public function admin_panel(){
	$this->load->view('admin_login');
	}
	public function create()
	{
		$this->load->view('create-profile');
	}
	// admin panel
	public function admin()
	{
		
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
	public function admin_logout()
	{
		$this->session->sess_destroy();
		redirect('/secret_controller/admin_panel');
		
		
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
		
		print_r($data123);
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
		redirect(base_url('index.php/secret_controller/model_profile'));
		}
	}
	public function share_post(){
	$data = $this->Add_member->share_post();
	if($data=="success")
	{
	redirect('/secret_controller/login');
	}   
	else{
	echo "fails";
	}
	}
	public function model_profile() 
	{
		if(count($_SESSION)>1)
		{
		$user_profile = $this->Add_member->show_profile(); 
		$post = $this->Add_member->get_post();
		$gallery = $this->Add_member->get_gallery();
		$data['gallery'] = $gallery; 
		$data['post'] = $post;  
			 $data['data'] = $user_profile;
			 $this->load->view('model_profile',$data);
		}
		else
		{
		redirect('');
		}
	}
	public function upload_gallery()
	{
	$data = $this->Add_member->upload_gallery();
	if($data=="success")
	{
	redirect(base_url('index.php/secret_controller/model_profile'));
	}
	else
	{
	print_r($data);
	}
	}
	public function upload_video()
	{
	$data = $this->Add_member->upload_video();
	if($data=="success")
	{
	redirect(base_url('index.php/secret_controller/model_profile'));
	}
	else
	{
	print_r($data);
	}
	}
	
	
	public function logout(){
	$this->Add_member->logout();
	$this->session->sess_destroy();
	redirect('');
	}
	public function switch_online_offline()
	{
		$data = $this->Add_member->switch_online_offline();
	}
	public function change_password()
	{
		$this->load->view('change_password');
	}
	public function update_personalinfo()
	{
		$this->load->view('personal_info');
	}
}
