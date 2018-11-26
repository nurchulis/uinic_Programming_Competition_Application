<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
  <title>
    Koreksi
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
     
     <div class="tab-pane" id="link2">
        
                        <?php
$no=1;  
 foreach ($ambil_soal_selesai as $category) {
  ?>
      <!-- End .section-navbars  -->
      <div class="section section-tabs">
        <div class="container">

          <div class="title">
            <h3 class="mb-3">Jawaban Nomor <?php echo $category->id_soal ?></h3>
          </div>
          <div class="row">
            <div class="col-md-10 ml-auto col-xl-12 mr-auto">
              <!-- Nav tabs -->
              <div class="card">
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content tab-space">
            <div class="alert alert-success alert-with-icon">
                  <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="tim-icons icon-simple-remove"></i>
                  </button>
                  <span data-notify="icon" class="tim-icons icon-trophy"></span>
                  <span>
                    <b> Heads up! - </b> Berisi Dua sub jawaban</span>

                </div>
                <p>
                    <?php
    if(!empty($category->subs)) { 
        foreach ($category->subs as $sub)  { ?>
                 <?php echo form_open_multipart('Kirim/edit_jawaban');?>
                <form method="post" action="<?php echo base_url(); ?>Kirim/edit_jawaban" name="jawaban_file" enctype="multipart/form-data">  
                   

                    <div class="col-md-12">
                    <p class="blockquote blockquote-success" style="height: auto;"> 
                     >>> <?php if($sub->type == '1'){ ?>  
                        Lihat File Source Code : <a href="<?php echo base_url() ?>assets/file_jawaban/<?php echo $sub->jawaban_file ?>"><label class="btn btn-primary" data-toggle="modal">
                         <?php echo $sub->jawaban_file; ?>  
                    </label></a>
                  
                      
                     <?php }else { ?>
                     
                     Jawaban Tim anda adalah :  
                     <?php echo $sub->jawaban; ?>
                     <br/>
                       Pilih Jawaban Yang Menurut Kamu Benar :   
                 <?php if($sub->jawaban == 'A'){ ?>
                 <input type="hidden" name="jawaban_file" value="none">       
                <div class="form-check form-check-radio">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" value="A" name="jawaban" id="exampleRadios1" value="option1" checked>
                  <span class="form-check-sign"></span>
                  A
                </label>
                </div>
                 <div class="form-check form-check-radio">
                <label class="form-check-label">
                <!--  checked !-->
                  <input class="form-check-input" type="radio" value="B" name="jawaban" id="exampleRadios1" value="option2" required/>
                  <span class="form-check-sign"></span>
                  B
                </label>
               </div>
                <div class="form-check form-check-radio">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" value="C" name="jawaban" id="exampleRadios1" value="option2" required/>
                  <span class="form-check-sign"></span>
                  C
                </label>
               </div>
                <?php } else if($sub->jawaban == 'B'){ ?>
                  <div class="form-check form-check-radio">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" value="A" name="jawaban" id="exampleRadios1" value="option1" required/>
                  <span class="form-check-sign"></span>
                  A
                </label>
                </div>  
                <div class="form-check form-check-radio">
                <label class="form-check-label">
                <!--  checked !-->
                  <input class="form-check-input" type="radio" value="B" name="jawaban" id="exampleRadios1" value="option2" checked>
                  <span class="form-check-sign"></span>
                  B
                </label>
               </div>
                <div class="form-check form-check-radio">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" value="C" name="jawaban" id="exampleRadios1" value="option2" required/>
                  <span class="form-check-sign"></span>
                  C
                </label>
               </div>
           <?php } else { ?>
                <div class="form-check form-check-radio">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" value="A" name="jawaban" id="exampleRadios1" value="option1" required/>
                  <span class="form-check-sign"></span>
                  A
                </label>
                </div>  
             <div class="form-check form-check-radio">
                <label class="form-check-label">
                <!--  checked !-->
                  <input class="form-check-input" type="radio" value="B" name="jawaban" id="exampleRadios1" value="option2" required/>
                  <span class="form-check-sign"></span>
                  B
                </label>
               </div>
               <div class="form-check form-check-radio">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" value="C" name="jawaban" id="exampleRadios1" value="option2" checked>
                  <span class="form-check-sign"></span>
                  C
                </label>
               </div>
           <?php } ?>

                 
                     <?php } ?> 
                    </p>
                     </div>
                     <br>

         
         
         </form>
         
  <?php
        }
        }
        else {
          echo "Belum Ada Jawaban";
        }
        ?>  
                    </p>
                  </div>
                </div>
              </div>
           
            </div>
          </div>
        </div>
      </div>
<?php } ?>    



                    </div>

                    <!--!-->
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