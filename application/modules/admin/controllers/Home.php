<?php 
<<<<<<< HEAD
Class Home Extends MY_controller {
    function __contructs() {
        parent:: __contruct();
    }

    function index() {
        
=======
Class Home Extends MY_Controller {

    function __construct() {
        parent:: __construct();
    }

    function index(){

>>>>>>> origin/master
        $this->data_layout['temp'] = 'index';
        $this->load->view('layout/main', $this->data_layout);
    }
}
<<<<<<< HEAD
=======

>>>>>>> origin/master
?>