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
                                <label>Nama UKM</label>
                                <input type="hidden" name="id" value="<?=$row->ukm_id?>">
                                <input type="text" value="<?=$row->nama_ukm?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Ketua UKM</label>
                                <input type="text" value="<?=$row->ketua_ukm?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Keterangan UKM</label>
                                <input type="text" value="<?=$row->keterangan_ukm?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Jenis</label>
                                <input type="text"  class="form-control" value="<?=$row->jenis?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Status UKM</label>
                                <input type="text"  class="form-control" value="<?=$row->status_ukm?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Foto</label><br>
                                <img src="<?=base_url('uploads/ukm/'.$row->image_ukm)?>" style="width:100px">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      
    </section>
    