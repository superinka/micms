
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>Thêm mới <small>bài viết</small></h2>
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
        <br>
        <form id="demo-form2" data-parsley-validate=""  method="post" action="" class="form-horizontal form-label-left" novalidate="">
        <?php echo validation_errors(); ?>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên bài viết <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="category-name" name="category-name" onkeyup="ChangeToSlug();" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Nội dung<small>Bài viết</small></h2>
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
                    <div id="alerts"></div>
                    <textarea id="txt_content" name="txt_content"  style="width:100%; height:300px;"></textarea>

                    <textarea name="descr" id="descr" style="display:none;"></textarea>
                    
                    <br>

                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả nhanh</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea class="resizable_textarea form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..."></textarea>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Chọn danh mục</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="dark-select" class="chzn-select select2_group form-control" id="ailment_id" name="ailment_id" style="width: 350px">
                            <option class="category" value="" disabled selected>Please select</option>
                        
                            <option class="category">Allergies</option>
                            <option class="item">Asthma</option>
                            <option class="item">Food Allergies</option>
                            <option class="item">Hay fever</option>
                            <option class="item">Insect bite</option>

                            <option class="category">Anxiety</option>

                            <option class="category">Arthritis</option>

                            <option class="category">Back Pain</option>
                            <option class="item">Sciatica</option>

                            <option class="category">Cancer</option>
                            <option class="item">Breast cancer</option>
                            <option class="item">Food cancer</option>
                            <option class="item">Hodgin's Lymphoma</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slug
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="slug" name="slug" onkeyup="ChangeToSlug2();" required="required" value="" class="form-control col-md-7 col-xs-12">
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div id="disp" style="padding-top:8px;"></div>
                </div>
            </div>   
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tình trạng</label>
                <div class="col-md-9 col-sm-9 col-xs-12" style="padding-top:10px;">
                    <div class="">
                    <label>
                        <input name="status" type="checkbox" class="js-switch" checked /> Kích hoạt
                    </label>
                    </div>
                </div>
            </div>                    
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" class="btn btn-success">Đăng</button>
                </div>
            </div>

        </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {				    				    
		if(CKEDITOR.instances['txt_content']) {						
			CKEDITOR.remove(CKEDITOR.instances['txt_content']);
		}
		CKEDITOR.config.width = 600;
	    CKEDITOR.config.height = 150;
		CKEDITOR.replace('txt_content',{});
	})
</script>

	<script>
        $(document).ready(function(){
            $(".chzn-select").chosen({
                create_option: true,
                persistent_create_option: true,
                create_option_text: 'add',
            });
        });
	</script>