 <script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/vendor.bundle.addons.js"></script>
  <script src="<?= base_url(); ?>assets/js/vendor.bundle.base.js"></script>
 <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging': true,
          'lengthChange': false,
          'searching': true,
          'ordering': true,
          'info': true,
          'autoWidth': true
        })
      })
    </script>

<!-- datatables -->
<script type="text/javascript" src="<?= base_url(); ?>assets/DataTables/datatables.min.js"></script>
<!-- plugins:js -->
  
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url(); ?>assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->

   <!-- sweetalert -->
    <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/sweet2.js"></script>

  <!-- ckeditor -->
  <script src="<?= base_url(); ?>assets/ckeditor/ckeditor.js"></script>
  <script>
      window.onload = function(){
        CKEDITOR.replace( 'ckeditor' );
      }
    </script>


  <!-- chart js -->
  <script>
    $(function() {
  /* ChartJS
   * -------
   * Data and config for chartjs
   */
  
  var doughnutPieData = {
    datasets: [{
      data: [<?= $grafik; ?>, <?= $grafik1; ?>, <?= $grafik2; ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
        'rgba(255, 206, 86, 0.5)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(255, 159, 64, 0.5)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
      'Kontak',
      'Users',
      'Blog',
    ]
  };
  var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };
  
  
  

  if ($("#doughnutChart").length) {
    var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }

  if ($("#pieChart").length) {
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }

  
});
  </script>
</body>

</html>