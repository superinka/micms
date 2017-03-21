<?php 
Class Post Extends MY_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('admin/admin_post_model','',TRUE);
    }

    function index(){

        $this->data_layout['temp'] = 'post';
        $this->load->view('layout/main', $this->data_layout);
    }
}

?>