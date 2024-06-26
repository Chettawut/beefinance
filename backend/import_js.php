<?php
define('ROOT_JS',str_replace("\\",'/',dirname(__FILE__)));
define('PATH_JS', ROOT_JS == $_SERVER['DOCUMENT_ROOT']
    ?'' :substr(ROOT_JS,strlen($_SERVER['DOCUMENT_ROOT']))
);
?>

<!-- jQuery -->
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<!-- <script src="<?php echo PATH_JS; ?>/AdminLTE-3.2.0/plugins/jqvmap/jquery.vmap.min.js"></script> -->
<!-- <script src="<?php echo PATH_JS; ?>/AdminLTE-3.2.0/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script
    src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Summernote -->
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
</script>
<!-- AdminLTE App -->
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- <script src="AdminLTE-3.2.0/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo PATH; ?>/backend/AdminLTE-3.2.0/dist/js/pages/dashboard.js"></script>
