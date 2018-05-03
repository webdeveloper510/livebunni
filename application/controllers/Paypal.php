<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Paypal extends CI_Controller 
{
     function  __construct(){
        parent::__construct();
        $this->load->library('paypal_lib');
        $this->load->model('product');
        $this->load->model('Add_member');
		$this->load->library('session');
     }
     
     function success(){
        //get the transaction data
       $paypalInfo = $this->input->get();
        
		$item_id=$paypalInfo['item_number'];
        /* $data['item_number'] = $paypalInfo['item_number']; 
        $data['txn_id'] = $paypalInfo["tx"];
        $data['payment_amt'] = $paypalInfo["amt"];
        $data['currency_code'] = $paypalInfo["cc"];
        $data['status'] = $paypalInfo["st"];
		$data['products'] = $this->product->getRows(); */ 
		
        //pass the products data to view
		$data['userid'] = $this->session->userdata('userid');
		$userid=$this->session->userdata('userid');
		
		$data['products'] = $this->product->getRows($item_id);
		$data['old_credit']=$this->product->getCredit($userid);
		$this->new_cdt($userid,$item_id);
		$data['credit']=$this->product->getCredit($userid);
		$this->load->view('products/index', $data);
		
		
     }
	 function success1(){
        //get the transaction data
       $paypalInfo = $this->input->get();
        
		$item_id=$paypalInfo['item_number']; 
        /* $data['item_number'] = $paypalInfo['item_number']; 
        $data['txn_id'] = $paypalInfo["tx"];
        $data['payment_amt'] = $paypalInfo["amt"];
        $data['currency_code'] = $paypalInfo["cc"];
        $data['status'] = $paypalInfo["st"];
		$data['products'] = $this->product->getRows(); */ 
		
        //pass the products data to view
		$data['userid'] = $this->session->userdata('userid');
		$userid=$this->session->userdata('userid');
		
		$data['products'] = $this->product->get_events_Rows($item_id);
		//$data['old_credit']=$this->product->getCredit($userid);
		//$this->new_cdt1($userid,$item_id);
		//$data['credit']=$this->product->getCredit($userid);
		$asd = $this->Add_member->save_ticket($paypalInfo);
		$data['details'] = $asd[0];
		$this->load->view('products/thankyou', $data);
		
		
     }
    
     function cancel(){
        $this->load->view('paypal/cancel');
     }
	 function new_cdt($userid,$item_id)
	 {
		
		$products = $this->product->getRows($item_id);
		$credit=$this->product->getCredit($userid);
		$new_credit=$products['Free']+$products['credit']+$credit['credit_left'];
		$data = array(
			'user_id'=> $userid,
			'credit_left' => $new_credit
		);
		$this->product->update_credit($userid,$data);
		
	 }
	
	 
     
     function ipn(){
        //paypal return transaction details array
        $paypalInfo    = $this->input->post();

        $data['user_id'] = $paypalInfo['custom'];
        $data['product_id']    = $paypalInfo["item_number"];
        $data['txn_id']    = $paypalInfo["txn_id"];
        $data['payment_gross'] = $paypalInfo["mc_gross"];
        //$data['currency_code'] = $paypalInfo["mc_currency"];
        $data['currency_code'] = "EUR";
        $data['payer_email'] = $paypalInfo["payer_email"];
        $data['payment_status']    = $paypalInfo["payment_status"];

        $paypalURL = $this->paypal_lib->paypal_url;        
        $result    = $this->paypal_lib->curlPost($paypalURL,$paypalInfo);
        
        //check whether the payment is verified
        if(preg_match("/VERIFIED/i",$result)){
            //insert the transaction data into the database
            $this->product->insertTransaction($data);
        }
    }
}