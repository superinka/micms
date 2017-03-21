<?php 
Class Category Extends MY_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('admin/admin_category_model','',TRUE);
    }

    function index(){

        $this->data_layout['temp'] = 'category';
        $this->load->view('layout/main', $this->data_layout);
    }

    function add(){
        $this->data_layout['temp'] = 'category_add';
        $this->load->view('layout/main', $this->data_layout);      
    }

    function slug_check(){

	
		if (isset($_POST['slug'])) {
			//pre($_POST['slug']);
            $slug = $_POST['slug'];
            //pre($slug);
            $check = $this->CI->check_slug($slug);
            pre($check);
            $this->data_layout['check'] = $check;
			
			$this->data_layout['temp'] = 'slug_check';
			$this->load->view('slug_check', $this->data_layout);
		}
        if (!isset($_POST['slug'])) { 
            
        }
	}
	
}

?>