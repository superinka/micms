<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>Danh sách tất cả<small>danh mục</small></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
            </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
        </div>
        <div class="x_content">
        
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th style="width:50%">Tên danh mục</th>
                <th>Action</th>
                <th>Danh mục cha</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            foreach ($list_category as $key => $value) {
            //pre($this->CI->get_category_name_by_id($value->Parent_Cate));
            $cate_name = $this->CI->get_category_name_by_id($value->Parent_Cate);
            ?>    
            <tr>
                <td><?php echo $value->Cate_Name ?></td>
                <td>
                    <ul class="list-action">
                        <li><a class="openModal" data-toggle="modal" data-target="#myModal" slug="<?php echo $value->Slug ?>" data-id="<?php echo $value->Cate_ID?>" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></li>
                    </ul>
                </td>
                <td><?php echo $cate_name ?></td>
                <td><?php echo $value->Cate_Desc ?></td>
            </tr>
            
            <?php
            }
            ?>


            </tbody>
        </table>
        <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
            <form class="form-horizontal edit_form" role="form">
                <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    
                </div>
                </div>
            </form>
            </div>
            <!-- /Modal -->        
        </div>
    </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>
  $('.openModal').click(function(){
      var id = $(this).attr('data-id');
      var old_slug = $(this).attr('slug');
      //console.log(old_slug);
      $.ajax({
        //   url:"edit/"+id,cache:false,
          type: "POST",
          url: "<?php echo base_url(); ?>" + "admin/category/edit",
          data: {
              id : id,
              slug : old_slug
          },
          success:function(result){
          $(".modal-content").html(result);
      }});
  });
</script>
<script language="javascript">

    function ChangeToSlug()
    {
        var title, slug;

        var old_slug = $('#slug').data('slug');
        var old_title = $('#slug').data('title');
        //console.log(old_title);
        
        //Lấy text từ thẻ input title 
        title = document.getElementById("category-name").value;

        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();

        

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
        //console.log(slug);

        var new_slug = document.getElementById('slug').value;
        var new_title = document.getElementById('category-name').value;
        //console.log(new_slug);

        
        
        

        if(new_title != old_title && new_slug == old_slug){
            //console.log(new_slug);
            //console.log(new_title);
            
            new_slug = new_slug + '1';
            //console.log(new_slug);
            document.getElementById('slug').value = new_slug;
            if(new_slug==""){
                $("#disp").html("");
            }
            else {
                $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>" + "admin/category/slug_check",
                data: "slug="+ new_slug ,
                success: function(html){
                $("#disp").html(html);
                }
                });
                
              
                return false;


            }
        }
        
        if(new_title != old_title && new_slug!=old_slug){
            
                if(new_slug==""){
                    $("#disp").html("");
                }
                else {
                    $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "admin/category/slug_check",
                    data: "slug="+ new_slug ,
                    success: function(html){
                    $("#disp").html(html);
                    }
                    });
                    return false;
                }
            
        }


    }

    function ChangeToSlug2()
    {
        var title, slug;
        var old_slug = $('#slug').data('slug');
        var old_title = $('#slug').data('title');

        //Lấy text từ thẻ input title 
        title = document.getElementById("slug").value;

        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
        //console.log(slug);

        var new_slug = document.getElementById('slug').value;
        var new_title = document.getElementById('category-name').value;
        //console.log(new_slug);

        if(new_title != old_title && new_slug == old_slug){
            //console.log(new_slug);
            //console.log(new_title);
            
            new_slug = new_slug + '1';
            //console.log(new_slug);
            document.getElementById('slug').value = new_slug;
            if(new_slug==""){
                $("#disp").html("");
            }
            else {
                $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>" + "admin/category/slug_check",
                data: "slug="+ new_slug ,
                success: function(html){
                $("#disp").html(html);
                }
                });
                
              
                return false;


            }
        }
        
        if(new_title != old_title && new_slug!=old_slug){
            
                if(new_slug==""){
                    $("#disp").html("");
                }
                else {
                    $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "admin/category/slug_check",
                    data: "slug="+ new_slug ,
                    success: function(html){
                    $("#disp").html(html);
                    }
                    });
                    return false;
                }
            
        }
    }

    $(document).ready(function(){
        
    // Khi người dùng click Đăng ký
    $('#register-btn').click(function(){
 
        // Lấy dữ liệu
        var data = {
            username    : $('#category-name').val()
            // password    : $('#password').val(),
            // email       : $('#email').val(),
            // fullname    : $('#fullname').val()
        };
 
        // Gửi ajax
        $.ajax({
            type : "post",
            dataType : "JSON",
            url: "<?php echo base_url(); ?>" + "admin/category/edit",
            data : data,
            success : function(result)
            {
                // Có lỗi, tức là key error = 1
                if (result.hasOwnProperty('error') && result.error == '1'){
                    var html = '';
 
                    // Lặp qua các key và xử lý nối lỗi
                    $.each(result, function(key, item){
                        // Tránh key error ra vì nó là key thông báo trạng thái
                        if (key != 'error'){ 
                            html += '<li>'+item+'</li>';
                        }
                    });
                    $('.alert-danger').html(html).removeClass('hide');
                    $('.alert-success').addClass('hide');
                }
                else{ // Thành công
                    $('.alert-success').html('Đăng ký thành công!').removeClass('hide');
                    $('.alert-danger').addClass('hide');
 
                    // 4 giay sau sẽ tắt popup
                    setTimeout(function(){
                        $('#myModal').modal('hide');
                        // Ẩn thông báo lỗi
                        $('.alert-danger').addClass('hide');
                        $('.alert-success').addClass('hide');
                    }, 4000);
                }
            }
        });
    });
});
</script>