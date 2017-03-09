<?php
Class User_Activity extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('login_model');
        $this->load->model('user_activity_model');
		$this->load->library('session');
	}
	
	function index() {
		//echo base_url();
		//$this->load->view('index');
	}
}