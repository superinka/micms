<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Sửa đổi thông tin</h4>
</div>
<div class="modal-body">
<div class="row">

        <div class="form-group">
            <div class="row">
                <label  class="col-sm-3 control-label" for="inputEmail3">Tên danh mục</label>
                <div class="col-sm-9">
                    <input type="text" id="category-name" value="<?php echo $category_info->Cate_Name ?>"name="category-name" onkeyup="ChangeToSlug();" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <label  class="col-sm-3 control-label" for="inputEmail3">Description</label>
                <div class="col-sm-9">
                    <textarea name="description" value="000" class="resizable_textarea form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..."><?php echo $category_info->Cate_Desc ?></textarea>
                </div>
            </div>
        </div>                            
        <div class="form-group">
            <div class="row">
                <label class="col-sm-3 control-label" for="inputPassword3" >Danh mục cha</label>
                <div class="col-sm-9">
                    
                        <select class="form-control" id="category" name="category">
                            <option value="0">Chọn danh mục cha</option>
                            <?php 
                            foreach ($list_category as $key => $value) {
                            ?>
                            <option <?php if($value->Cate_ID == $category_info->Parent_Cate) echo 'selected' ?> value="<?php echo $value->Cate_ID ?>"><?php echo $value->Cate_Name ?></option>
                            <?php 
                            }
                            ?>
                        </select>
                    
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slug
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="slug" name="slug" data-title="<?php echo $category_info->Cate_Name ?>" data-slug="<?php echo $category_info->Slug ?>" onkeyup="ChangeToSlug2();" required="required" value="<?php echo $category_info->Slug ?>" class="form-control col-md-7 col-xs-12">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="disp" style="padding-top:8px;"></div>
                </div>
            </row>
        </div>   
        <div class="form-group">
            <div class="row">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tình trạng</label>
                <div class="col-md-9 col-sm-9 col-xs-12" style="padding-top:10px;">
                    <div class="">
                    <label>
                        <input name="status" type="checkbox" class="js-switch" checked /> Kích hoạt
                    </label>
                    </div>
                </div>
            </div>
        </div>     
        <div class="clearfix"></div>
    

        </div> 
        <div class="clearfix"></div>            
     
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
<button type="button" class="btn btn-primary" id="register-btn">Lưu lại</button>
</div>
