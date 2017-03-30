<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>Danh sách tất cả<small>bài viết</small></h2>
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
                <th style="width:50%">Tên bài viết</th>
                <th>Action</th>
                <th>Ảnh đại diện</th>
                <th>Danh mục</th>
                <th>Lượt xem</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            foreach ($list_post as $key => $value) {
            //pre($this->CI->get_category_name_by_id($value->Parent_Cate));
            $cate_name = $this->CI->get_category_name_by_id($value->Cate_ID);
            ?>   
            <tr>
                <td style="width:50%"><?php echo $value->Post_Name ?></td>
                <td>Nixon</td>
                <td>System Architect</td>
                <td><?php echo $cate_name ?></td>
                <td><?php echo $value->Num_Views ?></td>
            </tr>

            <?php
            }
            ?>


            </tbody>
        </table>
        
        
        </div>
    </div>
</div>