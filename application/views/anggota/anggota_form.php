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
                    <a href="<?=site_url('anggota')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form enctype="multipart/form-data" action="<?=site_url('anggota/process')?>" method="post">
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
                                <input type="password" name="password" value="<?=$row->fakultas?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" name="email" value="<?=$row->email?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Fakultas *</label>
                                <input type="text" name="fakultas" value="<?=$row->fakultas?>" class="form-control" required>
                            </div> 
                            <?php if($page == 'edit') { ?>
                            <div class="form-group">
                                <label>Level *</label>
                                <small>1 = Superadmin || 2 = Ketua / Admin UKM</small>
                                <input type="text" name="level" value="<?=$row->level?>" class="form-control" required>
                            </div>
                            <?php } ?>
                            <div class="form-group">
                            <label>UKM *</label>
                            <select class="form-control" name="ukm_id">
                            <option value="">- Pilih -</option>
                            <?php
                            $query = $this->db->query('SELECT * FROM ukm');
                            foreach ($query->result() as $data1) { ?>
                                    <option value="<?=$data1->ukm_id?>"><?=$data1->nama_ukm?></option>
                                    <?php
                             } ?>
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
    