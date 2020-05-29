<!DOCTYPE html>
<html lang="en">

<head>
  <title>UKM UPN Veteran Jatim</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
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


    
    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('<?=base_url()?>frontend/images/futsal.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
            <h1 class="display-2">UKM</h1>
          <h3>Unit Kegiatan Mahasiswa</h3>
          <a href="<?=site_url('register/add')?>"><button type="button" class="btn btn-outline-light btn-lg">Daftar Sekarang</button></a>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('<?=base_url()?>frontend/images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1 class="display-2">KOMUNITAS</h1>
          <h3>Komunitas Akademik UPNV Jatim</h3>
          <a href="<?=site_url('register/add')?>"><button type="button" class="btn btn-outline-light btn-lg">Daftar Sekarang</button></a>
            </div>
          </div>
        </div>
      </div>

    </div>
    

    <div></div>


    <div class="site-section">
      <div class="container">


        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-3">
            <span>Unit Kegiatan Mahasiswa & Komunitas</span>
            </h2>
            <p>Universitas Pembangunan Nasional "Veteran" Jawa Timur</p>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
              <div class="owl-slide-3 owl-carousel">
              <?php
              $query = $this->db->query('SELECT * FROM ukm');
              foreach ($query->result() as $data1) { ?>
                  <div class="course-1-item">
                    <figure class="thumnail">
                    <a href="<?=site_url('ukm/detailukm/'.$data1->ukm_id)?>" class="img-link mr-4"><img src="<?=base_url('uploads/ukm/'.$data1->image_ukm)?>" alt="Image" class="img-fluid"></a>
                      <div class="price"><?=$data1->jenis?></div>
                      <div class="category"><h3><?=$data1->nama_ukm?></h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <p class="desc mb-4"><?=$data1->keterangan_ukm?></p>
                      <p><a href="<?=site_url('ukm/detailukm/'.$data1->ukm_id)?>" class="btn btn-primary rounded-0 px-4"> Lihat Selengkapnya</a></p>
                    </div>
                  </div>
                  <?php
                  } ?>
                
              </div>
      
          </div>
        </div>

        
        
      </div>
    </div>

    


    <div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>Tentang UKM & Komunitas</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="lead">Unit Kegiatan Mahasiswa yang biasa dipanggil UKM merupakan sebuah wadah aktivitas kemahasiswaan luar kelas untuk mengembangkan minat, bakat dan keahlian tertentu yang merupakan lembaga partner baik berada di tingkat universitas.</p>
            <p class="lead">Sama halnya sepeti Komunitas yang berada pada Universitas UPN Veteran Jawa Timur </p>
          </div>
        </div>
      </div>
    </div>

    
    <div class="news-updates">
      <div class="container">
         
        <div class="row">
          <div class="col-lg-9">
             <div class="section-heading">
              <h2 class="text-black">Berita &amp; Kegiatan</h2><br>
              <a href="<?=base_url('artikel/artikel_list')?>">Lihat Semua Berita</a>
            </div>
            <?php
            $query = $this->db->query('SELECT * FROM artikel ORDER BY rand() LIMIT 1');
            foreach ($query->result() as $data1) { ?>
            <div class="row">
              <div class="col-lg-6">
                <div class="post-entry-big">
                  <a href="<?=site_url('artikel/detailartikel/'.$data1->artikel_id)?>" class="img-link mr-4"><img src="<?=base_url('uploads/artikel/'.$data1->image_artikel)?>" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta"> 
                      <a><?=$data1->tanggal_dibuat?></a>
                      <span class="mx-1">/</span>
                      <a><?=$data1->penulis_artikel?></a>
                    </div>
                    <h3 class="post-heading"><a href="<?=site_url('artikel/detailartikel/'.$data1->artikel_id)?>"><?=$data1->judul_artikel?></a></h3>
                  </div>
                </div>
              </div>
              <?php
              } ?>
              <div class="col-lg-6">
              <?php 
              foreach($row->result() as $key => $data) { ?>
                <div class="post-entry-big horizontal d-flex mb-4">
                  <a href="<?=site_url('artikel/detailartikel/'.$data->artikel_id)?>" class="img-link mr-4"><img src="<?=base_url('uploads/artikel/'.$data->image_artikel)?>" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a><?=$data->tanggal_dibuat?></a>
                      <span class="mx-1">/</span>
                      <a><?=$data->penulis_artikel?></a>, <a href="<?=base_url()?>vendor/#">Terbaru</a>
                    </div>
                    <h3 class="post-heading"><a href="<?=site_url('artikel/detailartikel/'.$data->artikel_id)?>"><?=$data->judul_artikel?></a></h3>
                  </div>
                </div>
                <?php 
              } ?>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="section-heading">
              <h2 class="text-black">Video</h2><br>
              <a href="#">Lihat Semua Video</a>
            </div>
            <div class="video-1 mb-4 embed-responsive embed-responsive-16by9">
					   <iframe width="560" height="315" src="https://www.youtube.com/embed/JPZhdsSXCE4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>					
					</div>
          <div class="video-1 mb-4 embed-responsive embed-responsive-16by9">
					   <iframe width="560" height="315" src="https://www.youtube.com/embed/4gb5x5JJznY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>					
					</div>
          </div>
        </div>
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