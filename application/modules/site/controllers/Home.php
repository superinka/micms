<?php 
Class Home Extends MY_Controller {
    function __construct() {
        parent:: __construct();
        $this->load->library('parser');
        
    }
    function index(){

        $data = array(
        'blog_title' => 'My Blog Title',
        'blog_heading' => 'My Blog Heading'
        );


        //$this->parser->parse('index', $data, false);

        $this->data_layout['temp'] = 'index';
        $this->load->view('layout-site/main', $this->data_layout);
    }
}
?>