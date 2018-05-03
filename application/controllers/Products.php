<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller
{
    function  __construct() {
        parent::__construct();
        $this->load->library('paypal_lib');
        $this->load->model('product');
        $this->load->model('Add_member');
		$this->load->library('session');
    }
   
    public function buy_credit(){
        $userid= $this->session->userdata('userid');
		if(isset($userid)){
				
			
			$data = array();
			//get products data from database
			$data['products'] = $this->product->getRows();
			//Get user's credit 
			$data['userid'] = $this->session->userdata('userid');
			$data['id'] = $this->Add_member->get_data($userid);
			$data['credit']=$this->product->getCredit($userid);
			#echo ($data['credit']['credit_left']==""? '0':'1').'<br>';
			#echo $data['credit']['credit_left'];
			$this->load->view('credit', $data);
		}else{
			redirect(base_url('/index'));
		}
    } 
     
    function buy($id,$userID,$curr,$amt){
        //Set variables for paypal form 
        $returnURL = base_url().'paypal/success'; //payment success url
        $cancelURL = base_url().'paypal/cancel'; //payment cancel url
        $notifyURL = base_url().'paypal/ipn'; //ipn url
        //get particular product data
        $product = $this->product->getRows($id);
        #$userID = 1; //current user id
        $logo = base_url().'assets/images/codexworld-logo.png';
        
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('item_name', $product['credit']);
        $this->paypal_lib->add_field('custom', $userID);
        $this->paypal_lib->add_field('item_number',  $product['id']);
        $this->paypal_lib->add_field('amount',  $amt);        
        $this->paypal_lib->add_field('currency_code', $curr );        
        $this->paypal_lib->image($logo);
        
        $this->paypal_lib->paypal_auto_form();
    }
	function buy_ticket($id,$userID){
        //Set variables for paypal form
		if($this->session->userdata('userid'))
		{
        $returnURL = base_url().'paypal/success1/?'; //payment success url
        $cancelURL = base_url().'paypal/cancel'; //payment cancel url
        $notifyURL = base_url().'paypal/ipn'; //ipn url
        //get particular product data
        $product = $this->product->get_events_Rows($id);
		#$userID = 1; //current user id
        $logo = base_url().'assets/images/codexworld-logo.png';
        
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('item_name', $product['title']);
        $this->paypal_lib->add_field('custom', $userID);
        $this->paypal_lib->add_field('item_number',  $product['id']);
        $this->paypal_lib->add_field('amount',  $product['price']);        
        $this->paypal_lib->image($logo);
        
        $this->paypal_lib->paypal_auto_form();
		}
		else{
			redirect('');
		}
    }
} 