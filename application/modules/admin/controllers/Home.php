<?php 
Class Home Extends MY_controller {
    function __contructs() {
        parent:: __contruct();
    }

    function index() {
        
        $this->data_layout['temp'] = 'index';
        $this->load->view('layout/main', $this->data_layout);
    }
}
?>