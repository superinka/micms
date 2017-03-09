<?php
Class login extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('login_model');
		$this->load->library('session');
	    $this->load->helper('url');
	    $this->load->helper('html');
	    $this->load->database();
	    $this->load->library('form_validation');
	}
	
	function index() {
		//echo base_url();
		$this->load->view('index');
	}
}