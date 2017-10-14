<script src="<?php echo base_url; ?>assets/admin/js/jquery.js"></script>
        <script src="<?php echo base_url; ?>assets/admin/js/jquery-1.8.3.min.js"></script>
       <script src="<?php echo base_url; ?>assets/admin/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="<?php echo base_url; ?>assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="<?php echo base_url; ?>assets/admin/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url; ?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url; ?>assets/admin/js/jquery.sparkline.js" type="text/javascript"></script>
        <script src="<?php echo base_url; ?>assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo base_url; ?>assets/admin/js/owl.carousel.js" ></script>
        <script src="<?php echo base_url; ?>assets/admin/js/jquery.customSelect.min.js" ></script>
         
        <script src="<?php echo base_url; ?>assets/admin/js/respond.min.js" ></script>
        <!--common script for all pages-->
        <script src="<?php echo base_url; ?>assets/admin/js/common-scripts.js"></script>
        <script type="text/javascript" src="<?php echo base_url; ?>assets/admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url; ?>assets/admin/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url; ?>assets/admin/assets/bootstrap-daterangepicker/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url; ?>assets/admin/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url; ?>assets/admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
       <script type="text/javascript" language="javascript" src="<?php echo base_url; ?>assets/admin/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url; ?>assets/admin/assets/data-tables/DT_bootstrap.js"></script>
        <!--script for this page-->
        <script src="<?php echo base_url; ?>assets/admin/js/sparkline-chart.js"></script>
        <script src="<?php echo base_url; ?>assets/admin/js/easy-pie-chart.js"></script>
        <script src="<?php echo base_url; ?>assets/admin/js/count.js"></script>
        <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 6, "ASC" ]]
              } );
          } );
      </script>
  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      $(function(){
          $('select.styled').customSelect();
      });

  </script>