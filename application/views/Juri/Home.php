<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
  <title>
    Juri
  </title>
  <!--     Fonts and icons     -->
  <link href="" rel="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
  <link href="<?php echo base_url(); ?>assets/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url(); ?>assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page">
 
  <div class="wrapper">
  
    <div class="main">
     

      <!-- End .section-navbars  -->
      <div class="section section-tabs">
        <div class="container">

<?php foreach ($ambil_team_selesai as $tampil) {
  ?>

          <div class="col-md-6" style="float: left;">
          <div class="title">
            <h3 class="mb-3"><?php echo $tampil->nama_team; ?></h3>
          </div>
          <div class="row">
         
            <div class="col-md-12">
              <div class="mb-3">
              </div>
              <!-- Tabs with Background on Card -->
              <div class="card">
                <div class="card-body">
                
                 <div class="col-md-6 col-lg-6" style="float: left;">
              <a href="<?php echo base_url() ?>Juri/Single/<?php echo $tampil->id_team ?>" class="btn btn-primary btn-round btn-lg" role="button">
                KOREKSI
              </a>
            </div> 
            <div class="col-md-6" style="float: left; color: white">
              Lama Waktu Penyelesaian : 
                                  <?php
$datetime1 = new DateTime($tampil->waktu_mulai);
$datetime2 = new DateTime($tampil->waktu_akhir);
$interval = $datetime1->diff($datetime2);
echo $interval->format("%H:%I:%S"); 
?>
               
            </div>   

                </div>
              </div>
              <!-- End Tabs on plain Card -->
            </div>
          </div>
        </div>


    <?php } ?>

        </div>
      </div>
      <!-- End Section Tabs -->

  

 
   
      
 
      <!-- Sart Modal -->
     
      <!--  End Modal -->
      <!-- Mini Modal -->
      <!--  End Modal -->
    </div>

  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url(); ?>assets/demo/demo.js"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      blackKit.initDatePicker();
      blackKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>