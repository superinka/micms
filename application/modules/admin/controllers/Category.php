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

    function update(){
        $message = $this->session->flashdata('message');
	    $this->data_layout['message'] = $message;   

        // Biến trả kết quả về cho người dùng
        // dựa vào key error để nhận biết có lỗi hay không
        $errors = array(
            'error' => 0
        );
        
        // BƯỚC 1: LẤY THÔNG TIN
        $cate_name     = isset($_POST['cate_name']) ? trim($_POST['cate_name']) : '';
        $cate_desc     = isset($_POST['cate_desc']) ? trim($_POST['cate_desc']) : '';
        $cate_parent   = isset($_POST['cate_parent']) ? trim($_POST['cate_parent']) : '';
        $cate_slug     = isset($_POST['cate_slug']) ? trim($_POST['cate_slug']) : '';
        $id            = isset($_POST['id']) ? trim($_POST['id']) : '';

        $category_info = $this->admin_category_model->get_info($id);

        $old_cate_name = $category_info->Cate_Name;

        if($old_cate_name!=$cate_name){
            //pre($cate_name);
            // BƯỚC 2: VALIATE THÔNG TIN ĐƠN GIẢN
            if (empty($cate_name)){
                $errors['cate_name'] = 'Bạn chưa nhập tên danh mục';
            }
            if (empty($cate_slug)){
                $errors['cate_slug'] = 'Slug không được trống';
            }

            // BƯỚC 3: KIỂM TRA CÓ LỖI KHÔNG, NẾU CÓ LỖI THÌ TRẢ VỀ LUÔN, CÒN KHÔNG THÌ TIẾP TỤC KIỂM TRA
            if (count($errors) > 1){
                $errors['error'] = 1;
                die (json_encode($errors));
            }

            // BƯỚC 4: KẾT NỐI CSDL VÀ KIỂM TRA THÔNG TIN
            $conn = mysqli_connect('localhost', 'root', '', 'mi_cms');
            if (!$conn){
                $errors['connect_db'] = 'Không thể kết nối đến database';
            }
            
            $cate_slug = addslashes($cate_slug);
            $cate_name = addslashes($cate_name);
            //pre($cate_slug);
            //$email = addslashes($email);
            
            $sql = "SELECT * "
                    . "FROM tb_categories "
                    . "WHERE Slug='".addslashes($cate_slug)."' "
                            . "OR Cate_Name='".addslashes($cate_name)."'";
            
            $result = mysqli_query($conn, $sql);
            
            if (!$result){
                $errors['sql_db'] = 'Lỗi câu truy vấn SQL';
            }
            
            if (mysqli_num_rows($result) > 0)
            {
                $row = mysqli_fetch_assoc($result);
                if ($row['Cate_Name'] == $cate_name){
                    $errors['Cate_Name'] = 'Tên danh mục đã tồn tại';
                }
                if ($row['Slug'] == $cate_slug){
                    $errors['cate_slug'] = 'Slug đã tồn tại';
                }
            }
            
            // BƯỚC 5: TRẢ KẾT QUẢ VỀ NẾU CÓ LỖI
            if (count($errors) > 1){
                $errors['error'] = 1;
                die (json_encode($errors));
            }

            // BƯỚC 6: LƯU VÀO CSDL
            // $sql = "UPDATE tb_categories (Cate_Name, Cate_Desc, Parent_Cate, Slug)".
            //         " VALUES('".addslashes($cate_name)."','".addslashes($cate_desc)."','".addslashes($cate_parent)."','".addslashes($cate_slug)."')";
            // if (!mysqli_query($conn, $sql)){
            //     $errors['error'] = 1;
            //     $errors['sql_db'] = 'Lỗi câu truy vấn SQL';
            // }

            $data_category = array(
                'Cate_Name'   => $cate_name,
                'Cate_Desc'   => $cate_desc,
                'Parent_Cate' => $cate_parent,    
                'Slug'        => $cate_slug
            );
            //pre($data_category);
            if($this->admin_category_model->update($id, $data_category)){
                $this->session->set_flashdata('message','Thêm dữ liệu thành công');
            }
            else{
                $errors['error'] = 1;
                $errors['sql_db'] = 'Lỗi câu truy vấn SQL';
            }        
        }

       
  
        // Trả kết quả cuối cùng
        die (json_encode($errors));

        $this->data_layout['errors'] = $errors;
        $this->data_layout['id'] = $id;

        $this->data_layout['temp'] = 'category_update';
        $this->load->view('category_update', $this->data_layout);  
    }


    function delete(){
        $message = $this->session->flashdata('message');
	    $this->data_layout['message'] = $message;         
        
        $response = array();
        
        if ($_POST['delete']) {
            
            
            $pid = intval($_POST['delete']);
            $info_category = $this->admin_category_model->get_info($pid);

            if(!$info_category) {
				$this->session->set_flashdata('message','Không tồn tại thông tin danh mục');
				redirect(base_url('admin/category'));
			}
            else {
                if($this->admin_category_model->delete($pid)){
                    $this->session->set_flashdata('message','Xóa dữ liệu thành công ');
					$response['status']  = 'success';
			        $response['message'] = 'Danh mục đã được xóa thành công ...';
                }
                else {
                    $response['status']  = 'success';
			        $response['message'] = 'Danh mục đã được xóa không thành công ...';
                }
            }

            die (json_encode($response));
            $this->data_layout['response'] = $response;
        }
        $this->data_layout['temp'] = 'category_delete';
        $this->load->view('category_delete', $this->data_layout);   
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