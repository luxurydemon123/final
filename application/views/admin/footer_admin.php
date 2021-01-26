
  


  <!-- jQuery 3 -->
<script src="<?= base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?= base_url() ?>public/bower_components/raphael/raphael.min.js"></script>
<script src="<?= base_url() ?>public/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- daterangepicker -->
<script src="<?= base_url() ?>public/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url() ?>public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url() ?>public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url() ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>public/dist/js/demo.js"></script>
<script src="<?= base_url() ?>public/ckeditor/ckeditor.js"></script>
<script src="<?= base_url() ?>public/ckeditor/ckfinder/ckfinder.js"></script>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
               
                CKEDITOR.replace( 'content', {
                	filebrowserBrowseUrl:'<?= base_url() ?>'+ 'public' + '/ckfinder/ckfinder.html',
                	filebrowserImageBrowseUrl: '<?= base_url() ?>'+'public'+'/ckfinder/ckfinder.html?Type=Images',
                	
                });
</script>



<!-- Angular -->
	<!-- <script type="text/javascript" src="<?= base_url() ?>public/dist/js/angular-1.5.min.js"></script>  
  	<script type="text/javascript" src="<?= base_url() ?>public/dist/js/angular-animate.min.js"></script>
  	<script type="text/javascript" src="<?= base_url() ?>public/dist/js/angular-aria.min.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>public/dist/js/angular-messages.min.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>public/dist/js/angular-material.min.js"></script>  
  	<script type="text/javascript" src="<?= base_url() ?>1.js"></script> -->