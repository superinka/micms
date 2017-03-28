<?php 
Class Category Extends MY_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('admin/admin_category_model','',TRUE);
        $this->form_validation->set_error_delimiters('<div class="error" style="color:red; font-weight:600">', '</div>'); 
    }

    function index(){
        
        $input = array();
        // $input['where']['Parent_Cate'] = 0;
        $list_category = $this->admin_category_model->get_list($input);
        $this->data_layout['list_category'] = $list_category;

        $this->data_layout['temp'] = 'category';
        $this->load->view('layout/main', $this->data_layout);
    }

    function add(){
        $message = $this->session->flashdata('message');
	    $this->data_layout['message'] = $message;

        $input = array();
        $input['where']['Parent_Cate'] = 0;
        $list_category = $this->admin_category_model->get_list($input);
        $this->data_layout['list_category'] = $list_category;

        if($this->input->post()){ 
            $this->form_validation->set_rules('category-name', 'Tên danh mục', 'trim');
            $this->form_validation->set_rules('description', 'description', 'trim');
            $this->form_validation->set_rules('slug', 'viết tắt', 'trim|callback_check_slug');

            if($this->form_validation->run()){
                $category_name = $this->input->post('category-name');
                $description = $this->input->post('description');
                $slug = $this->input->post('slug');
                $category = $this->input->post('category');
                $status = $this->input->post('status');

                if($status=='on') {
                    $status = 1;
                }
                else {
                    $status = 0;
                }

                $data_category = array(
                    'Cate_Name'   => $category_name,
                    'Cate_Desc'   => $description,
                    'Parent_Cate' => $category,    
                    'Slug'        => $slug,
                    'status'      => $status   
                );

                //pre($data_category);
                if($this->admin_category_model->create($data_category)){
                    $this->session->set_flashdata('message','Thêm dữ liệu thành công');
                }
                else{
					$this->session->set_flashdata('message','Thêm dữ liệu không thành công');
				}
                redirect(base_url('admin/category'));
            }
        }

        $this->data_layout['temp'] = 'category_add';
        $this->load->view('layout/main', $this->data_layout);      
    }

    function edit(){
        $message = $this->session->flashdata('message');
	    $this->data_layout['message'] = $message;

        $input = array();
        $input['where']['Parent_Cate'] = 0;
        $list_category = $this->admin_category_model->get_list($input);
        $this->data_layout['list_category'] = $list_category;

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $slug = $_POST['slug'];
            //pre($slug);
            $category_info = $this->admin_category_model->get_info($id);
            //pre($category_info);

            $this->data_layout['category_info'] = $category_info;
            $this->data_layout['category_slug'] = $slug;
            
        }
        $this->data_layout['temp'] = 'category_edit';
        $this->load->view('category_edit', $this->data_layout);  
    }

    function slug_check(){

		if (isset($_POST['slug'])) {
			//pre($_POST['slug']);
            $slug = $_POST['slug'];
            //pre($slug);
            $check = $this->CI->check_slug($slug);
            //pre($check);
            $this->data_layout['check'] = $check;
			
			$this->data_layout['temp'] = 'slug_check';
			$this->load->view('slug_check', $this->data_layout);
		}
        if (!isset($_POST['slug'])) { 
            
        }
	}

    function check_slug($slug){
		$slug = $this->input->post('slug');
		$where = array('Slug' => $slug, );
		if($this->admin_category_model->check_exists($where)) {
			$this->form_validation->set_message('check_slug', 'Tên viết tắt này đã tồn tại !');
			return false;
		}
		else return TRUE;
	}
	
}

?>