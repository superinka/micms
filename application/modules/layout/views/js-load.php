<?php if($this->uri->segment(1)=='admin' && $this->uri->segment(2)=='home') {?>    
    <!-- jQuery -->
    <script src="<?php echo admin_theme('');?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo admin_theme('');?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo admin_theme('');?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo admin_theme('');?>/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo admin_theme('');?>/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo admin_theme('');?>/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo admin_theme('');?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo admin_theme('');?>/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo admin_theme('');?>/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo admin_theme('');?>/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo admin_theme('');?>/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo admin_theme('');?>/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo admin_theme('');?>/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo admin_theme('');?>/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo admin_theme('');?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo admin_theme('');?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo admin_theme('');?>/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo admin_theme('');?>/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo admin_theme('');?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo admin_theme('');?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo admin_theme('');?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo admin_theme('');?>/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo admin_theme('');?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo admin_theme('');?>/build/js/custom.min.js"></script>
<?php }?>

<?php if($this->uri->segment(3)==null) {?>
    <?php if(($this->uri->segment(1)=='admin' && $this->uri->segment(2)=='post') || ($this->uri->segment(1)=='admin' && $this->uri->segment(2)=='category')) {?>    
        <!-- jQuery -->
        <script src="<?php echo admin_theme('');?>/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo admin_theme('');?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo admin_theme('');?>/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo admin_theme('');?>/vendors/nprogress/nprogress.js"></script>
        <!-- iCheck -->
        <script src="<?php echo admin_theme('');?>/vendors/iCheck/icheck.min.js"></script>
        <!-- Datatables -->
        <script src="<?php echo admin_theme('');?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/jszip/dist/jszip.min.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?php echo admin_theme('');?>/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Switchery -->
    <script src="<?php echo admin_theme('');?>/vendors/switchery/dist/switchery.min.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="<?php echo admin_theme('');?>/build/js/custom.min.js"></script>
            <script>
        $(document).ready(function() {
            var handleDataTableButtons = function() {
            if ($("#datatable-buttons").length) {
                $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [
                    {
                    extend: "copy",
                    className: "btn-sm"
                    },
                    {
                    extend: "csv",
                    className: "btn-sm"
                    },
                    {
                    extend: "excel",
                    className: "btn-sm"
                    },
                    {
                    extend: "pdfHtml5",
                    className: "btn-sm"
                    },
                    {
                    extend: "print",
                    className: "btn-sm"
                    },
                ],
                responsive: true
                });
            }
            };
            TableManageButtons = function() {
            "use strict";
            return {
                init: function() {
                handleDataTableButtons();
                }
            };
            }();
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
            keys: true
            });
            $('#datatable-responsive').DataTable();

            TableManageButtons.init();
        });
        </script>

        <!--//delete-->
        <script src="<?php echo public_url('temp/admin');?>/swal2/sweetalert2.min.js"></script>
    <?php }?>
<?php }?>

<?php if($this->uri->segment(3)=='add') {?>
    <!-- jQuery -->
    <script src="<?php echo admin_theme('');?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo admin_theme('');?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo admin_theme('');?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo admin_theme('');?>/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo admin_theme('');?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo admin_theme('');?>/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo admin_theme('');?>/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo admin_theme('');?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo admin_theme('');?>/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo admin_theme('');?>/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo admin_theme('');?>/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo admin_theme('');?>/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo admin_theme('');?>/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo admin_theme('');?>/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo admin_theme('');?>/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo admin_theme('');?>/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo admin_theme('');?>/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?php echo admin_theme('');?>/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo admin_theme('');?>/build/js/custom.min.js"></script>

    <script type="text/javascript" src="<?php echo public_url();?>ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo public_url();?>others/chosen.jquery.min.js"></script>
<?php }?>