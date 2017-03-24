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
                        <li><a data-toggle="modal" data-target="#myModal-<?php echo $value->Cate_ID ?>" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></li>
                    </ul>
                </td>
                <td><?php echo $cate_name ?></td>
                <td><?php echo $value->Cate_Desc ?></td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="myModal-<?php echo $value->Cate_ID ?>" role="dialog">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Sửa đổi thông tin</h4>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <form id="demo-form2" data-parsley-validate=""  method="post" action="" class="form-horizontal form-label-left" novalidate="">
                                <?php echo validation_errors(); ?>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên danh mục <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="category-name" name="category-name" onkeyup="ChangeToSlug();" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mô tả</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="description" class="resizable_textarea form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Danh mục cha</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" id="category" name="category">
                                            <option value="0">Chọn danh mục cha</option>
                                            <?php 
                                            foreach ($list_category as $key => $value) {
                                            ?>
                                            <option value="<?php echo $value->Cate_ID ?>"><?php echo $value->Cate_Name ?></option>
                                            <?php 
                                            }
                                            ?>
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
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div> 
                            <div class="clearfix"></div>                   
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Lưu lại</button>
                    </div>
                </div>
                </div>
            </div>
            <?php
            }
            ?>


            </tbody>
        </table>
        
        
        </div>
    </div>
</div>
