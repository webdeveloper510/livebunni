<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('encrypt');
		$this->load->model('Backend_model');
		$this->load->database(); 
		$this->load->helper('url');
		$this->load->library('user_agent');
		//$this->load->helper("activity");
		} 
	//////////////login page///////////////
	public function adminlogin()
	{
		$this->load->view('admin');
	}
	
	public function login()
	{
		$data['loginuser'] = $this->Backend_model->checkadminlogin();
		//print_r($data['loginuser']);
		if(!$data['loginuser'][0]['id'])
		{
			$this->session->set_flashdata('failed','Invalid login details! Please try again...');
			redirect('admin/index.php/backend/adminlogin');
		}
		else
		{
			$userdata['id'] = $data['loginuser'][0]['id'];
			$userdata['emailid'] = $data['loginuser'][0]['email'];
			$this->session->set_userdata('userdata',$userdata);
			redirect('admin/index.php/backend/welcome');
		}
	}
    public function welcome()
	{
	$ab2 = $this->session->userdata('userdata');
	$ab = $ab2['id'];
		if($ab)
		{
			$data['admindetail'] = $this->Backend_model->admindetails();
			$this->load->view('header');
			$this->load->view('top-nav',$data);
			$this->load->view('sidebar',$data);
			$this->load->view('welcome');
			$this->load->view('footer');
		}
		else
		{
			
			redirect(site_url('admin/index.php/backend/adminlogin'));
		}
	}	
	//////get all member list/////////////////
	public function members()
	{
		$ab2 = $this->session->userdata('userdata');
		$ab = $ab2['id'];
		if($ab)
		{
			$data['admindetail'] = $this->Backend_model->admindetails();
			$data['memberinfo'] = $this->Backend_model->getmembers();
			$this->load->view('header');
			$this->load->view('top-nav',$data);
			$this->load->view('sidebar',$data);
			$this->load->view('memberdetails',$data);
			$this->load->view('footer');
		}
		else
		{
			
			redirect(site_url('admin/index.php/backend/adminlogin'));
		}
	}	
	/////modeldetails

	 public function modeldetails()
	{
	$ab2 = $this->session->userdata('userdata');
	$ab = $ab2['id'];
		if($ab)
		{
			$data['admindetail'] = $this->Backend_model->admindetails();
			$data['modeldetails'] = $this->Backend_model->modeldetails();
			$this->load->view('header');
			$this->load->view('top-nav',$data);
			$this->load->view('sidebar',$data);
			$this->load->view('modeldetails');
			$this->load->view('footer');
		}
		else
		{
			
			redirect(site_url('admin/index.php/backend/adminlogin'));
		}
		
	}	
	public function activemodel($modelid)
	{
		//echo site_url();die;
		$data['activemodel'] = $this->Backend_model->activemodel($modelid);
			$this->session->set_flashdata('active','Model is active.Go to all model requests.');

		redirect(site_url('admin/index.php/backend/newmodelrequest'));
	}
	
	public function inactivemodel($modelid)
	{
		$data['activemodel'] = $this->Backend_model->inactivemodel($modelid);
			$this->session->set_flashdata('inactive','Now model is inactive.Go to deactivate tab.');

		redirect(site_url('admin/index.php/backend/modeldetails'));
	}
	public function viewmodeldetails($modelid)
	{
		
		$ab2 = $this->session->userdata('userdata');
	$ab = $ab2['id'];
		if($ab)
		{
			$data['admindetail'] = $this->Backend_model->admindetails();
			$data['viewmodeldetails'] = $this->Backend_model->viewmodeldetails($modelid);
			$this->load->view('header');
			$this->load->view('top-nav',$data);
			$this->load->view('sidebar',$data);
			$this->load->view('viewmodeldetails',$data);
			$this->load->view('footer');
		}
		else
		{
			
			redirect(site_url('admin/index.php/backend/adminlogin'));
		}
		
		
	}
	public function newmodelrequest()
	{
		 $ab2 = $this->session->userdata('userdata');
	$ab = $ab2['id'];
		if($ab)
		{
			$data['admindetail'] = $this->Backend_model->admindetails();
			$data['newmodelrequest'] = $this->Backend_model->newmodelrequest();
			$this->load->view('header');
			$this->load->view('top-nav',$data);
			$this->load->view('sidebar',$data);
			$this->load->view('newmodelrequest',$data);
			$this->load->view('footer');
		}
		else
		{
			
			redirect(site_url('admin/index.php/backend/adminlogin'));
		} 
		
		
	}
	public function viewnewmodeldetails($modelid)
	{
		
		$ab2 = $this->session->userdata('userdata');
	$ab = $ab2['id'];
		if($ab)
		{
			$data['admindetail'] = $this->Backend_model->admindetails();
			$data['viewnewmodeldetails'] = $this->Backend_model->viewnewmodeldetails($modelid);
			$this->load->view('header');
			$this->load->view('top-nav',$data);
			$this->load->view('sidebar',$data);
			$this->load->view('viewnewmodeldetails',$data);
			$this->load->view('footer');
		}
		else
		{
			
			redirect(site_url('admin/index.php/backend/adminlogin'));
		}
		
		
	}
	public function deactivemodel()
	{
		
		$ab2 = $this->session->userdata('userdata');
	$ab = $ab2['id'];
		if($ab)
		{
			$data['admindetail'] = $this->Backend_model->admindetails();
			$data['deactivemodel'] = $this->Backend_model->deactivemodel();
			$this->load->view('header');
			$this->load->view('top-nav',$data);
			$this->load->view('sidebar',$data);
			$this->load->view('deactivemodel',$data);
			$this->load->view('footer');
		}
		else
		{
			
			redirect(site_url('admin/index.php/backend/adminlogin'));
		}
		
		
	}
	
	public function activemodelfromdeactivate($modelid)
	{
		//echo site_url();die;
		$data['activemodel'] = $this->Backend_model->activemodel($modelid);
			$this->session->set_flashdata('active','Now model is active go to "get all model details" ');

		redirect(site_url('admin/index.php/backend/deactivemodel'));
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('admin/index.php/backend/adminlogin'));
	}
}
