<?php 
Class Home Extends MY_Controller {
    function __construct() {
        parent:: __construct();
    }
    function index(){
        $this->data_layout['temp'] = 'index';
        $this->load->view('layout/main', $this->data_layout);
    }
}
?>