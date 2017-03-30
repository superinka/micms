<?php 
Class Post Extends MY_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('admin/admin_post_model','',TRUE);
    }

    function index(){
        $input = array();
        // $input['where']['Parent_Cate'] = 0;
        $list_post = $this->admin_post_model->get_list($input);
        $this->data_layout['list_post'] = $list_post;

        $this->data_layout['temp'] = 'post';
        $this->load->view('layout/main', $this->data_layout);
    }

    function add(){

        $this->data_layout['temp'] = 'post_add';
        $this->load->view('layout/main', $this->data_layout);        
    }
}

?>