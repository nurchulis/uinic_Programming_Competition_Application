

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
  <!-- Navbar -->

  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header header-filter">
      <div class="squares square1"></div>
      <div class="squares square2"></div>
      <div class="squares square3"></div>
      <div class="squares square4"></div>
      <div class="squares square5"></div>
      <div class="squares square6"></div>
      <div class="squares square7"></div>
      <div class="container">
        <div class="content-center brand">

          <h1 class="h1-seo">
          	Welcome To battle,
 <?php 
foreach ($nama_player as $data) {
echo $data->nama_team;
@$tim = $data->id_team;
$this->session->set_userdata('id_team',$tim);

}
 ?>•</h1>
          <h3>Ready be number one.</h3>
        </div>
      </div>
    </div>
    <div class="main">
    

        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid justify-content-center">
              
              <?php foreach ($data_team as $data) {
               ?>
              <div class="col-lg-3">
                <div class="info">
                 <div class="icon icon-success">
                  <i class="tim-icons icon-single-02"> <?php echo $data->nama_player; ?></i>
                  </div>
                  <h4 class="info-title" >
                  <?php if($data->status == 0){
                  ?>
                   <p class="btn btn-info btn-tooltip btn-sm" data-toggle="tooltip" data-placement="bottom" title="Teman Mu belum Login" data-container="body" data-animation="true">Offline</p>
                  <?php
                  }else {
                  	?>
                  	<?php
                  $ini = $this->session->userdata("nama"); 
                  	 if($data->username == $ini){ ?>
 					<p class="btn btn-danger btn-tooltip btn-sm" data-toggle="tooltip" data-placement="bottom" title="Ini Kamu sudah Login" data-container="body" data-animation="true">Ready</p>
 				<?php }else { ?>
 					<p class="btn btn-danger btn-tooltip btn-sm" data-toggle="tooltip" data-placement="bottom" title="Teman Mu sudah Login" data-container="body" data-animation="true">Ready</p>
 				<?php }	?>
                  	<?php 
                  } ?>	
                  </h4>
                  <hr class="line-primary">
                </div>
              </div>
          <?php } 
          ?>
              
            
              
            </div>
          </div>
        </div>

        	<div class="container">
    	 		<div class="card">
                <div class="card-header">
                  
                  <ul class="nav nav-tabs nav-tabs-primary" role="tablist">

                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist">
                        <i class="tim-icons icon-spaceship"></i> Soal
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                        <i class="tim-icons icon-settings-gear-63"></i> Edit Jawaban
                      </a>
                    </li>
                 
                  </ul>
                </div>
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="link1">
                   	
          <center><h1>Soal </h1></center>
             <center><h2>Total Soal: <?php echo $jumlah_soal; ?> / Dijawab : <?php echo $jumlah_soal_selesai; ?> 
            </h2></center>       
                   	<?php
$no=1;	
 foreach ($ambil_soal as $category) {
	?>
      <!-- End .section-navbars  -->
      <div class="section section-tabs">
        <div class="container">
           <div class="title">
            <h3 class="mb-3">Question <?php echo $category->id_soal ?></h3>
          </div>
          <div class="row">
            <div class="col-md-10 ml-auto col-xl-12 mr-auto">
              <!-- Nav tabs -->
              <div class="card">
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content tab-space">
    			  <div class="alert alert-info alert-with-icon">
            			<button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
             			<i class="tim-icons icon-simple-remove"></i>
            			</button>
            			<span data-notify="icon" class="tim-icons icon-trophy"></span>
            			<span>
              			<b> Heads up! - </b> Jadilah Yang terbaik dari yang baik</span>

          			</div>
          			<p>

             
          				  <?php
    if(!empty($category->subs)) { 
        foreach ($category->subs as $sub)  { ?>
        		  <?php $ini =$this->session->userdata("id_team"); 
        		  ?>
        		     <?php echo form_open_multipart('Kirim/kirim_jawaban');?>
        		    <form method="post" action="<?php echo base_url(); ?>Kirim/kirim_jawaban" name="jawaban_file" enctype="multipart/form-data">  
                    <input type="hidden" name="id_sub_soal" value="<?php echo $sub->id_sub_soal ?>">
                    <input type="hidden" name="id_team" value="<?php echo $ini ?>">
                    <input type="hidden" name="id_soal" value="<?php echo $category->id_soal ?>">
                    <input type="hidden" name="type" value="<?php echo $sub->type_soal ?>"> 
                    <div class="col-md-12">
                    <hr style="background-color: white; border-width: 4px; width:100%; ">
                    <p style="color: white">
                    <?php  echo $sub->soal;   ?>
                    </p>
                    
                    <?php if($sub->type_soal == '1') { ?>
                     Upload Source Code jawaban : <input type="file" name="jawaban_file" 
                     class="btn btn-warning btn-tooltip btn-sm" data-toggle="tooltip" data-placement="bottom" title="Upload File Jawaban Anda disini" data-container="body" data-animation="true"
                     required/>
                    <?php }else { ?>
                 Pilih Jawaban Yang Menurut Kamu Benar :   	
                <div class="form-check form-check-radio">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" value="A" name="jawaban" id="exampleRadios1" value="option1" required/>
                  <span class="form-check-sign"></span>
                  A
                </label>
                </div>
                <div class="form-check form-check-radio">
                <label class="form-check-label">
                <!--	checked !-->
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

                     <?php } ?>
                     </div>
            
           <div class="modal fade modal-mini modal-warning modal-mini" id="myModal<?php echo $sub->id_sub_soal; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove text-white"></i>
              </button>
              <div class="modal-profile">
                <i class="tim-icons icon-simple-add"></i>
              </div>
            </div>
            <div class="modal-body">
              <p>Sudah Yakin nih ?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-link btn-neutral">Yakin</button>
            </div>
          </div>
        </div>
      </div>


                       </form>
               <center>
              <button class="btn btn-success btn-tooltip btn-sm" data-toggle="modal" data-target="#myModal<?php echo $sub->id_sub_soal ?>"
              >Simpan</button>
              <br>
              <br> 

          </center>

         
	<?php
        }
        }
        else {
          echo "Soal Masih Kosong";
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
                    <div class="tab-pane" id="link2">
          <center><h1>Jawaban Team </h1></center>
            <center><h2>Total Soal: <?php echo $jumlah_soal; ?> / Dijawab : <?php echo $jumlah_soal_selesai; ?> 
            </h2></center>          
                       	<?php
$no=1;	
 foreach ($ambil_soal_selesai as $category) {
	?>
      <!-- End .section-navbars  -->
      <div class="section section-tabs">
        <div class="container">

          <div class="title">
            <h3 class="mb-3">Edit Question <?php echo $category->id_soal ?></h3>
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
              			<b> Heads up! - </b> Silakan Cek lagi Jawaban Kamu</span>

          			</div>
          			<p>
          				  <?php
    if(!empty($category->subs)) { 
        foreach ($category->subs as $sub)  { ?>
        		 <?php $ini =$this->session->userdata("id_team"); 
        		  ?>
        		     <?php echo form_open_multipart('Kirim/edit_jawaban');?>
        		    <form method="post" action="<?php echo base_url(); ?>Kirim/edit_jawaban" name="jawaban_file" enctype="multipart/form-data">  
                    <input type="hidden" name="id_sub_soal" value="<?php echo $sub->id_sub_soal ?>">
                    <input type="hidden" name="id_team" value="<?php echo $ini ?>">
                    <input type="hidden" name="id_soal" value="<?php echo $sub->id_soal ?>">
                    <input type="hidden" name="id" value="<?php echo $sub->id ?>">
                    <input type="hidden" name="type" value="<?php echo $sub->type ?>"> 

                    <div class="col-md-12">
                    <p class="blockquote blockquote-success" style="height: auto;"> 
                     >>> <?php if($sub->type == '1'){ ?>	
                        Lihat File Source Code : <a href="<?php echo base_url() ?>assets/file_jawaban/<?php echo $sub->jawaban_file ?>"><label class="btn btn-primary" data-toggle="modal">
               			     <?php echo $sub->jawaban_file; ?>	
              			</label></a>
                    <br>
                    Upload Source Code baru : 
               			      <i class="tim-icons icon-upload"></i> <input type="file" name="jawaban_file" 
                     class="btn btn-warning btn-tooltip btn-sm" data-toggle="tooltip" data-placement="bottom" title="Upload File Jawaban Anda disini" data-container="body" data-animation="true"
                     required/>
                     	
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
                <!--	checked !-->
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
                <!--	checked !-->
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
                <!--	checked !-->
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

             <div class="modal fade modal-mini modal-warning modal-mini" id="myModals<?php echo $sub->id_sub_soal; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove text-white"></i>
              </button>
              <div class="modal-profile">
                <i class="tim-icons icon-pencil">?</i>
              </div>
            </div>
            <div class="modal-body">
              <p>Sudah Yakin Untuk Mengedit ?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-link btn-neutral">Yakin</button>
            </div>
          </div>
        </div>
      </div>
         
         </form>
          <center>
              <button class="btn btn-success btn-tooltip btn-sm" data-toggle="modal" data-target="#myModals<?php echo $sub->id_sub_soal ?>"
              >Simpan</button>
              <br>
              <br> 

          </center>

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
                  </div>
                </div>
              </div>
          </div>
<center>

	<div class="modal fade modal-mini modal-danger modal-mini" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove text-white"></i>
              </button>
               </div>
            <div class="modal-body">
              <p>Sudah Yakin nih Mau Logout?
              Pastikan Semua Jawaban Sudah Benar
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Batal</button>
           
              <a href="<?php echo base_url() ?>Login/logout">
              <button type="submit" class="btn btn-link btn-neutral">Logout</button>
 </a>
            </div>
          </div>
        </div>
      </div>

           <div class="text-center col-md-12 col-lg-8" style="margin-bottom: 40px;">
                <button class="btn btn-primary btn-round btn-lg" data-toggle="modal" style="width: 300px; height: 80px; font-size: 30px;" data-target="#logout">FINISH</button>
          
              <!-- <a href="https://www.invisionapp.com/now" target="_blank" class="btn btn-primary btn-lg btn-simple btn-round" role="button">
            Download PSD/Sketch
          </a> -->

            </div>

</center>


      





      
      
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
  <script type="text/javascript">
  	function doRefresh()
{
  $("#show").append('You log file datas ... - ');
  setTimeout(function() {
    doRefresh();
  }, 2000);
}

$(document).ready(function () {
  doRefresh(); 
});
  </script>
</body>

</html>