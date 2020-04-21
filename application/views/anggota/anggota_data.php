<section class="content-header">
      <h1>Menu
        <small>Menu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Menu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php $this->view('messages') ?>
        <div class="box">
            <div class="box-header">
                <div class="pull-right">
                    <a href="<?=site_url('anggota/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-plus"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Anggota</th>
                            <th>NPM</th>
                            <th>Fakultas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data->nama_anggota?></td>
                            <td><?=$data->npm?></td>
                            <td><?=$data->fakultas?></td>
                            <td class="text-center" width="160px">
                            <a href="<?=site_url('anggota/edit/'.$data->anggota_id)?>" class="btn btn-success btn-xs">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="<?=site_url('anggota/del/'.$data->anggota_id)?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a href="<?=site_url('anggota/detail/'.$data->anggota_id)?>" class="btn btn-info btn-xs">
                                    <i class="fa fa-info-circle"></i>
                                </a>
                            </td>
                        </tr>
                    <?php 
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
      
    </section>
    
 
