<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics &mdash; Website by Colorlib</title>
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
    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('<?=site_url()?>vendor/images/bg_1.jpg'); padding-top:200px;">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Daftar</h2>
              <p></p>
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

          <form enctype="multipart/form-data" action="<?=site_url('register/process')?>" method="post">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="username">Username</label>
                            <input type="hidden" name="id">
                            <input type="hidden" name="artikel_id">
                            <input type="hidden" name="level">
                            <input type="text" name="username" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg" required> 
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">Nama Lengkap</label>
                            <input type="text" name="nama_anggota" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">NPM</label>
                            <input type="number" name="npm" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">Fakultas</label>
                            <input type="text" name="fakultas" class="form-control form-control-lg" required>
                        </div>
                            <div class="col-md-12 form-group">
                                <label>Foto KTM</label>
                                <input type="file" name="image" class="form-control form-control-lg" required>
                            </div>
                          <div class="col-md-12 form-group">
                            <label>Kegiatan Yang Dipilih</label>
                            <select class="form-control form-control-lg" name="ukm_id">
                            <option value="">- Pilih -</option>
                            <?php
                            $query = $this->db->query('SELECT * FROM ukm');
                            foreach ($query->result() as $data1) { ?>
                                    <option value="<?=$data1->ukm_id?>"><?=$data1->nama_ukm?></option>
                                    <?php
                             } ?>
                            </select>
                          </div>
                          
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" name="add" class="btn btn-primary btn-lg px-5">
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

  <script> // setelah memilik select box lalu keluar select box baru yang sesuai dengan id 'load'

function tambahform(){
    var jnsukg = $('#jnsukg').val();
    if(jnsukg=='ukm'){
        document.getElementById('load').style.display = 'block';
    } else {
        document.getElementById('load1').style.display = 'block';
    } 
    
}

</script>

</body>

</html>