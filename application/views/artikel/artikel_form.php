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
      <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <div class="box box-warning">
            
            <div class="box-body">
              <form enctype="multipart/form-data" action="<?=site_url('ketuartikel/process')?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="ukm_id" value="<?=$this->session->userdata('ukmid')?>">
                    <input type="hidden" name="anggota_id" value="<?=$this->session->userdata('anggotaid')?>">
                    <input type="hidden" name="penulis_artikel" value="<?=$this->session->userdata('namaanggota')?>">
                    <input type="hidden" name="id" value="<?=$row->artikel_id?>">
                  <label>Judul Artikel</label>
                  <input type="text" name="judul_artikel" value="<?=$row->judul_artikel?>" class="form-control" placeholder="Judul Artikel Disini" required>
                </div>
                 <div class="form-group">
                  <label>Keterangan Artikel</label>
                 <input type="text" name="keterangan" value="<?=$row->keterangan?>" class="form-control" placeholder="Keterangan Artikel Disini" required><?=$row->isi_artikel?>
                </div>
                <div class="form-group">
                  <label>Isi Artikel</label>
                 <textarea type="text" name="isi_artikel" value="<?=$row->isi_artikel?>" rows="8" class="form-control" placeholder="isi Artikel Disini" required><?=$row->isi_artikel?></textarea>
                </div>
               
            </div>
          </div>

        </div>
      
        <div class="col-md-6">
          <div class="box box-warning">
            <div class="box-body">
        
                <div class="form-group">
                  <label>Upload Gambar Disini</label>
                  <input type="file" name="image_artikel" class="form-control">
                </div>
            </div>
            <div class="box-footer">
                <button type="reset" class="btn btn-flat"><i class="fa fa-undo">
                </i> Reset</button>
                <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat pull-right"><i class="fa fa-paper-plane">
                </i> Save</button>
              </div>
              </form>
          </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    