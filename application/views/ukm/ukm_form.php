<section class="content-header">
      <h1>Data ukm
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">ukm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
        <div class="box">
            <div class="box-header">
                <h3 class="box-tittle"><?=ucfirst($page)?> Data ukm</h3>
                <div class="pull-right">
                    <a href="<?=site_url('ukm')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form enctype="multipart/form-data" action="<?=site_url('ukm/process')?>" method="post">
                            <div class="form-group">
                                <label>Nama UKM *</label>
                                <input type="hidden" name="id" value="<?=$row->ukm_id?>">
                                <input type="text" name="nama_ukm" value="<?=$row->nama_ukm?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Ketua UKM *</label>
                                <input type="text" name="ketua_ukm" value="<?=$row->ketua_ukm?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan UKM *</label>
                                <input type="text" name="keterangan_ukm" value="<?=$row->keterangan_ukm?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis</label>
                                <select name="jenis" value="<?=$row->jenis?>" class="form-control">
                                    <option value="">- Pilih -</option>
                                    <option value="UKM">UKM</option>
                                    <option value="Komunitas">Komunitas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status_ukm" value="<?=$row->status_ukm?>" class="form-control">
                                    <option value="">- Pilih -</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Pasif">Pasif</option>
                                </select>
                            </div>
                            <?php if($page == 'add') { ?>
                            <div class="form-group">
                                <label>Foto *</label>
                                <input type="file" name="image_ukm" class="form-control">
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
    