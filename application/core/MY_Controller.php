<?php

Class MY_Controller extends CI_Controller {
	
	public $data_layout = array();
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$new_url = $this->uri->segment(1);
		switch ($new_url) {
			case 'admin' : {
				//$this->load->helper('admin');
				break;
			}
			
			default: {
				//du lieu trang ngoai
			}
		}

		$this->CI = & get_instance();

		$this->load->model('login/login_model','',TRUE);
		$this->load->model('login/user_activity_model','',TRUE);
		$this->load->model('admin/admin_category_model','',TRUE);

		global $account_type;

		date_default_timezone_set('Asia/Ho_Chi_Minh');

		if( $this->uri->segment(1) =='login'){

		}

		else{

			if($this->session->userdata('logged_in'))
		    {
			  //pre($this->session->all_userdata());

		      $session_data = $this->session->userdata('logged_in');
		      $this->data_layout['username'] = $session_data['username'];
		      $this->data_layout['id'] = $session_data['id'];
		      $id = $this->data_layout['id'];
		      //echo '0';
		    }
		    else
		    {
		      //If no session, redirect to login page
		      redirect(base_url('login'), 'refresh');
			}		
		} 


	}

	function get_client_ip() {
	$ipaddress = '';
	if ($_SERVER['HTTP_CLIENT_IP'])
		$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if($_SERVER['HTTP_X_FORWARDED_FOR'])
		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if($_SERVER['HTTP_X_FORWARDED'])
		$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if($_SERVER['HTTP_FORWARDED_FOR'])
		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if($_SERVER['HTTP_FORWARDED'])
		$ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if($_SERVER['REMOTE_ADDR'])
		$ipaddress = $_SERVER['REMOTE_ADDR'];
	else
		$ipaddress = 'UNKNOWN';

	return $ipaddress;
	}

	function getIPfromXForwarded() 
	{ 
		$ipString = @getenv("HTTP_X_FORWARDED_FOR"); 
		$addr     = explode(",",$ipString); 

		return $addr[sizeof($addr)-1]; 
	} 

	function check_slug($slug) {
		if($slug==null) {
			return TRUE;
		}
		else if($slug!=null){
	    $input = array();
	    $input['where']['Slug'] = $slug;
		$list_slug = $this->admin_category_model->get_list($input);
		if($list_slug && $list_slug!=null) {

			return FALSE;
		}

		if(!$list_slug || $list_slug==null){
			return TRUE;
		}

		}
	}


	function get_category_name_by_id($id){
		if($id!=0){
			$info_category = $this->admin_category_model->get_info($id);
			if($info_category){
				return $info_category->Cate_Name;
			}
			else {
				return 'Không tồn tại';
			}
			
		}
		else {
			return 'Thư mục gốc';
		}
	}


	function logout()
    {
	    $this->session->unset_userdata('logged_in');
	    session_destroy();
	    redirect(base_url('login'), 'refresh');
    }

}
