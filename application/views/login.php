<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="<?=base_url()?>vendor/https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url()?>vendor/fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?=base_url()?>vendor/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>vendor/css/jquery-ui.css">
  <link rel="stylesheet" href="<?=base_url()?>vendor/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url()?>vendor/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?=base_url()?>vendor/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="<?=base_url()?>vendor/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="<?=base_url()?>vendor/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="<?=base_url()?>vendor/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="<?=base_url()?>vendor/css/aos.css">
  <link href="<?=base_url()?>vendor/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="<?=base_url()?>vendor/css/style.css">



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
    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('<?=site_url()?>vendor/images/bg_1.jpg'); padding-top:200px;">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Login</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="<?=base_url()?>vendor/index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Login</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">

        <form action="<?=site_url('auth/process')?>" method="post">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" name="login" value="Log In" class="btn btn-primary btn-lg px-5">
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

  <script src="<?=base_url()?>vendor/js/jquery-3.3.1.min.js"></script>
  <script src="<?=base_url()?>vendor/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=base_url()?>vendor/js/jquery-ui.js"></script>
  <script src="<?=base_url()?>vendor/js/popper.min.js"></script>
  <script src="<?=base_url()?>vendor/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>vendor/js/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>vendor/js/jquery.stellar.min.js"></script>
  <script src="<?=base_url()?>vendor/js/jquery.countdown.min.js"></script>
  <script src="<?=base_url()?>vendor/js/bootstrap-datepicker.min.js"></script>
  <script src="<?=base_url()?>vendor/js/jquery.easing.1.3.js"></script>
  <script src="<?=base_url()?>vendor/js/aos.js"></script>
  <script src="<?=base_url()?>vendor/js/jquery.fancybox.min.js"></script>
  <script src="<?=base_url()?>vendor/js/jquery.sticky.js"></script>
  <script src="<?=base_url()?>vendor/js/jquery.mb.YTPlayer.min.js"></script>




  <script src="<?=base_url()?>vendor/js/main.js"></script>

</body>

</html>