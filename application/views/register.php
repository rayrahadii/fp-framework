<!DOCTYPE html>
<html lang="en">

<head>
  <title>UKM UPN Veteran Jatim</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="<?=base_url()?>frontend/https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url()?>frontend/fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?=base_url()?>frontend/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>frontend/css/jquery-ui.css">
  <link rel="stylesheet" href="<?=base_url()?>frontend/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url()?>frontend/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?=base_url()?>frontend/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="<?=base_url()?>frontend/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="<?=base_url()?>frontend/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="<?=base_url()?>frontend/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="<?=base_url()?>frontend/css/aos.css">
  <link href="<?=base_url()?>frontend/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="<?=base_url()?>frontend/css/style.css">



</head>


<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('<?=site_url()?>frontend/images/bg_1.jpg'); padding-top:200px;">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Register</h2>
              <p>Daftarkan Diri Anda Sekarang</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="<?=base_url()?>">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Register</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">

        <form class="contact-form" enctype="multipart/form-data" action="<?= base_url('home/register')?>" method="post">    <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                           <input type="text" class="form-control form-control-lg" placeholder="Your name" name="nama">
                      </div>
                      <div class="col-md-12 form-group">
                           <input type="text" class="form-control form-control-lg" placeholder="Your User Name" name="username">
                      </div>
                      <div class="col-md-12 form-group">
                           <input type="password" class="form-control form-control-lg" placeholder="Your Password" name="password1">
                      </div>
                      <div class="col-md-12 form-group">
              <input type="password" class="form-control form-control-lg" placeholder="Confirm Your Password" name="password2">
          </div>
          <div class="col-md-12 form-group">
             <input type="number" class="form-control form-control-lg" placeholder="Your NPM" name="npm">
          </div>
          <div class="col-md-12 form-group">
              <input type="email" class="form-control form-control-lg" placeholder="Your email" name="email">
          </div>
          <div class="col-md-12 form-group">
              <input type="text" class="form-control form-control-lg" placeholder="Your Fakultas" name="fakultas">
          </div>
              <div class="col-md-12 form-group">
              <input type="hidden" name="level" value="3">
             </div>
              <div class="col-md-12 form-group">
                      <input type="file" name="image" class="form-control form-control-lg">
             </div>
                     <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg px-5" value="Kirim">
                  </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            </form>
            

          
        </div>
    </div>

  </div>
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="<?=base_url()?>frontend/js/jquery-3.3.1.min.js"></script>
  <script src="<?=base_url()?>frontend/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=base_url()?>frontend/js/jquery-ui.js"></script>
  <script src="<?=base_url()?>frontend/js/popper.min.js"></script>
  <script src="<?=base_url()?>frontend/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>frontend/js/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>frontend/js/jquery.stellar.min.js"></script>
  <script src="<?=base_url()?>frontend/js/jquery.countdown.min.js"></script>
  <script src="<?=base_url()?>frontend/js/bootstrap-datepicker.min.js"></script>
  <script src="<?=base_url()?>frontend/js/jquery.easing.1.3.js"></script>
  <script src="<?=base_url()?>frontend/js/aos.js"></script>
  <script src="<?=base_url()?>frontend/js/jquery.fancybox.min.js"></script>
  <script src="<?=base_url()?>frontend/js/jquery.sticky.js"></script>
  <script src="<?=base_url()?>frontend/js/jquery.mb.YTPlayer.min.js"></script>




  <script src="<?=base_url()?>frontend/js/main.js"></script>

</body>

</html>