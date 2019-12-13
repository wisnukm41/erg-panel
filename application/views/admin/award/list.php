
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Prestasi</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
        <!-- /.content-header -->
        <!-- general form elements -->
        <div class="card">
         <?php if($this->ion_auth->in_group(1) || $this->ion_auth->in_group(7)):?>
         <div class="card-header">
            <a href="<?php echo base_url('admin/award/add') ?>" class='btn btn-primary'>Tambah Prestasi</a>
         </div>
         <?php endif ?>
         <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered" width = 100% cellspacing=0>
                        <thead>
                            <tr>
                                <th width=5%>No</th>
                                <th width=20%>Nama</th>
                                <th>Deskripsi</th>
                                <th width=10%>Gambar</th>
                                <th>Tanggal</th>
                                <?php if($this->ion_auth->in_group(1) || $this->ion_auth->in_group(7)) : ?>
                                <th width=10%>Aksi</th>
                                <?php endif?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($awards as $award): ?>
                            <tr id="<?=$award->id?>">
                                <td>
                                    <?php echo $i++ ?>
                                </td>
                                <td>
                                    <?php echo $award->topic ?>
                                </td>
                                <td>
                                    <?php echo substr($award->description,0,120) ?>
                                </td>
                                <td>
                                    <img src="<?php echo base_url('assets/uploads/awards/'.$award->image)?>" alt="<?php echo $award->image?>" height=100px>
                                </td>
                                <td>
                                    <?php echo $award->date ?>
                                </td>
                                <?php if($this->ion_auth->in_group(1) || $this->ion_auth->in_group(7)) : ?>
                                <td>
                                      <a href="<?php echo base_url('admin/award/edit/').$award->id ?>" class='btn btn-primary edit-btn'><i class="fas fa-pen"></i></a>
                                      <a href="<?php echo base_url('admin/award/delete/').$award->id ?>" class='btn btn-danger edit-btn remove'><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <?php endif ?>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?= $page ?>
            </div>
        </div>
    </div><!-- /.container-fluid -->
  </div>
