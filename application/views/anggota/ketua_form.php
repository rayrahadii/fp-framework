<section class="content-header">
      <h1>Data Anggota UKM
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Anggota</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
        <div class="box">
            <div class="box-header">
                <h3 class="box-tittle"><?=ucfirst($page)?> Data Anggota (* Harus Diisi)</h3>
                <div class="pull-right">
                    <a href="<?=site_url('ketua')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form enctype="multipart/form-data" action="<?=site_url('ketua/process')?>" method="post">
                            <div class="form-group">
                                <label>Nama Anggota*</label>
                                <input type="hidden" name="id" value="<?=$row->anggota_id?>">
                                <input type="hidden" name="level" value="<?=$row->level?>">
                                <input type="text" name="nama_anggota" value="<?=$row->nama_anggota?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>NPM *</label>
                                <input type="number" name="npm" value="<?=$row->npm?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Username *</label>
                                <input type="text" name="username" value="<?=$row->username?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="password" name="password" value="<?=$row->password?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" name="email" value="<?=$row->email?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Fakultas *</label>
                                <input type="text" name="fakultas" value="<?=$row->fakultas?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>UKM *</label>
                            <select class="form-control" name="ukm_id">
                            <option value="">- Pilih -</option>
                                    <option value="4">Basket</option>
                                    <option value="5">Musik</option>
                                    <option value="7">Futsal</option>
                                    <option value="8">Informatic Learning Community</option>
                                    <option value="9">Komunitas Linux UPN</option>
                                    <option value="10">Tennis Lapangan</option>
                            </select>
                            </div>
                            <?php if($page == 'add') { ?>
                            <div class="form-group">
                                <label>Foto KTM *</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <?php } ?>
                            <div class="form-group">
                                <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i> Save
                                </button>
                                <button type="Reset" class="btn btn-flat">
                                    <i class="fa fa-undo"></i> Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      
    </section>
    