 <!DOCTYPE html>
<html lang="en">

<head>  
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
 Home
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
 <div class="section section-signup">
        <div class="container">
          <div class="squares square-1"></div>
          <div class="squares square-2"></div>
          <div class="squares square-3"></div>
          <div class="squares square-4"></div>
          <div class="row row-grid justify-content-between align-items-center">
            <div class="col-lg-6">
              <h3 class="display-3 text-white">UINIC 2.0
                <span class="text-white">Programming Contest</span>
              </h3>
              <p class="text-white mb-3"></p>
              <div class="btn-wrapper">
              </div>
            </div>
            <div class="col-lg-6 mb-lg-auto">
              <div class="card card-register">
                <div class="card-header">
                  <img class="card-img" src="assets/img/square1.png" alt="Card image">
                  <h4 class="card-title" style="margin-left: 30px; margin-top: 20px; color: white">Login</h4>
                </div>
                <form action="<?php echo base_url() ?>Login/aksi_login" method="post">
                <div class="card-body">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="username" placeholder="Full Name">
                    </div>
                   
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-lock-circle"></i>
                        </div>
                      </div>
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                   
                 </div>
                <div class="card-footer">
                  <button class="btn btn-primary btn-round btn-lg" type="Submit">
                    Submit
                         </button>
                </div>
              </form>


              </div>
            </div>
          </div>
        </div>
      </div>

        <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/moment.min.js"></script>
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
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