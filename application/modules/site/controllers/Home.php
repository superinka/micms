<?php 
Class Home Extends MY_Controller {
    function __construct() {
        parent:: __construct();
    }
    function index(){
        $this->data_layout['temp'] = 'index';
        $this->load->view('layout-site/main', $this->data_layout);
    }
}
?>