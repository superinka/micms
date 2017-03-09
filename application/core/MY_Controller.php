<?php

Class MY_Controller extends CI_Controller {
	
	public $data_layout = array();
	function __construct() {
		parent::__construct();
		$new_url = $this->uri->segment(1);
		switch ($new_url) {
			case 'admin' : {
				$this->load->helper('admin');
				break;
			}
			
			default: {
				//du lieu trang ngoai
			}
		}

		$this->CI = & get_instance();

		$this->load->model('login/login_model','',TRUE);

		global $account_type;

		date_default_timezone_set('Asia/Ho_Chi_Minh');

		if( $this->uri->segment(1) =='login'){

		}

		else{
			if($this->session->userdata('logged_in'))
		    {
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


	function logout()
    {
	    $this->session->unset_userdata('logged_in');
	    session_destroy();
	    redirect(base_url('login'), 'refresh');
    }

}
