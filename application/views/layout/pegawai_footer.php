   </div>
   <!--   Core JS Files   -->
   <script src="<?= base_url('assets/') ?>js/core/jquery.3.2.1.min.js"></script>
   <script src="<?= base_url('assets/') ?>js/core/popper.min.js"></script>
   <script src="<?= base_url('assets/') ?>js/core/bootstrap.min.js"></script>

   <!-- jQuery UI -->
   <script src="<?= base_url('assets/') ?>js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
   <script src="<?= base_url('assets/') ?>js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

   <!-- jQuery Scrollbar -->
   <script src="<?= base_url('assets/') ?>js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


   <!-- Chart JS -->
   <script src="<?= base_url('assets/') ?>js/plugin/chart.js/chart.min.js"></script>

   <!-- jQuery Sparkline -->
   <script src="<?= base_url('assets/') ?>js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

   <!-- Chart Circle -->
   <script src="<?= base_url('assets/') ?>js/plugin/chart-circle/circles.min.js"></script>

   <!-- Datatables -->
   <script src="<?= base_url('assets/') ?>js/plugin/datatables/datatables.min.js"></script>

   <!-- Bootstrap Notify -->
   <script src="<?= base_url('assets/') ?>js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

   <!-- jQuery Vector Maps -->
   <script src="<?= base_url('assets/') ?>js/plugin/jqvmap/jquery.vmap.min.js"></script>
   <script src="<?= base_url('assets/') ?>js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

   <!-- Sweet Alert -->
   <script src="<?= base_url('assets/') ?>js/plugin/sweetalert/sweetalert.min.js"></script>

   <!-- Atlantis JS -->
   <script src="<?= base_url('assets/') ?>js/atlantis.min.js"></script>

   <!-- Atlantis DEMO methods, don't include it in your project! -->
   <script src="<?= base_url('assets/') ?>js/setting-demo.js"></script>
   <script src="<?= base_url('assets/') ?>js/demo.js"></script>

   <script>
      $('.custom-file-input').on('change', function() {
         let fileName = $(this).val().split('\\').pop();
         $(this).next('.custom-file-label').addClass('selected').html(fileName);
      })
      $(document).ready(function() {
         $("#jumlah_menu").on('keydown keyup change blur', function() {
            var harga = $("#harga_menu").val();
            var jumlah = $("#jumlah_menu").val();
            var total = parseInt(harga) * jumlah;
            $("#total").val(total);
         });
      })
   </script>
   <script>
      $('#displayNotif').on('click', function() {
         var placementFrom = 'top'
         var placementAlign = 'center'
         var state = 'primary'
         var style = 'withicon'
         var content = {};

         content.message = 'Turning standard Bootstrap alerts into "notify" like notifications';
         content.title = 'Bootstrap notify';
         if (style == "withicon") {
            content.icon = 'fa fa-bell';
         } else {
            content.icon = 'none';
         }
         content.url = 'index.html';
         content.target = '_blank';

         $.notify(content, {
            type: state,
            placement: {
               from: placementFrom,
               align: placementAlign
            },
            time: 1000,
            delay: 0,
         });
      });
   </script>


   </body>

   </html>