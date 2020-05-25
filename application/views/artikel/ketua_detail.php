<section class="content-header">
      <h1>Data Artikel
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Artikel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
        <div class="box">
            <div class="box-header">
                <h3 class="box-tittle"><?=ucfirst($page)?> Data Artikel</h3>
                <div class="pull-right">
                    <a href="<?=site_url('ketuartikel')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form enctype="multipart/form-data" action="<?=site_url('artikel/process')?>" method="post">
                            <div class="form-group">
                                <label>Judul Artikel *</label>
                                <input type="hidden" name="id" value="<?=$row->artikel_id?>">
                                <input type="text" name="judul_artikel" value="<?=$row->judul_artikel?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Keterangan *</label>
                                <input type="text" value="<?=$row->keterangan?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Penulis Artikel *</label>
                                <input type="text" value="<?=$row->penulis_artikel?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Isi Artikel *</label>
                                <textarea type="text"  class="form-control" readonly><?=$row->isi_artikel?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto</label><br>
                                <img src="<?=base_url('uploads/artikel/'.$row->image_artikel)?>" style="width:100px">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      
    </section>
    