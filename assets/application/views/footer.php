 <!-- footer content -->
        <footer>
          <div class="pull-right">
           
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.js'); ?>"></script>
	<!-------table ----->
    <script src="<?php echo base_url('assets/vendors/datatables.net/js/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-scroller/js/dataTables.scroller.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js'); ?>"></script> 	
    <script src="<?php echo base_url('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js'); ?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('assets/vendors/Chart.js/dist/Chart.min.js'); ?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url('assets/vendors/gauge.js/dist/gauge.min.js'); ?>"></script>
    <!-- bootstrap-progressbar -->

    <!-- iCheck -->
    <script src="<?php echo base_url('assets/vendors/iCheck/icheck.min.js'); ?>"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url('assets/vendors/skycons/skycons.js'); ?>"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.pie.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.time.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.stack.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.resize.js'); ?>"></script>
	
	
	   <!-- Select2 -->
    <script src="<?php echo base_url('assets/vendors/select2/dist/js/select2.full.min.js'); ?>"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url('assets/vendors/parsleyjs/dist/parsley.min.js'); ?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/flot-spline/js/jquery.flot.spline.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/flot.curvedlines/curvedLines.js'); ?>"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('assets/vendors/DateJS/build/date.js'); ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('assets/vendors/jqvmap/dist/jquery.vmap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js'); ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('assets/vendors/moment/min/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
    <!--script src="<?php echo base_url('assets/vendors/validator/validator.js'); ?>"></script-->

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.min.js'); ?>"></script>
	 <script src="<?php echo base_url('assets/build/js/jquery-ui.js'); ?>"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
	 <script>
/*  $('#datatable').dataTable({
			 "aoColumnDefs": [
				{ 'bSortable': false, 'aTargets': [ 4 ] }
]
 });  */
 $('#datatable1').dataTable({
			 "aoColumnDefs": [
				{ 'bSortable': false, 'aTargets': [ 5 ] }
]
 });
	 //$('#addgames_table').dataTable();
	 $(function () {
  $("#datepicker").datepicker({ 
       
  });
});
 $(function () {
  $("#datepicker1").datepicker({ 
       
  });
});
       
 </script>
  </body>
</html>