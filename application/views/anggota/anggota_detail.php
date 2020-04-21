<section class="content-header">
      <h1>Data Anggota
        <small>Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Aduan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
        <div class="box">
            <div class="box-header">
                <h3 class="box-tittle"><?=ucfirst($page)?> Detail</h3>
                <div class="pull-right">
                    <a href="<?=site_url('anggota')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="hidden" name="id" value="<?=$row->anggota_id?>">
                                <input type="text" name="username" value="<?=$row->username?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_anggota" value="<?=$row->nama_anggota?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="<?=$row->email?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>NPM</label>
                                <input type="number" name="npm" value="<?=$row->npm?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Fakultas</label>
                                <input type="text" name="fakultas" value="<?=$row->fakultas?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Foto KTM</label><br>
                                <img src="<?=base_url('uploads/ktm/'.$row->image)?>" style="width:100px">
                            </div>
                            <div class="form-group">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      
	</section>