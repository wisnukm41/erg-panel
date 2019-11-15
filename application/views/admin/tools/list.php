
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Peralatan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
        <!-- /.content-header -->
        <!-- general form elements -->
        <div class="card">
         <div class="card-header">
            <a href="<?php echo base_url('admin/tools/add') ?>" class='btn btn-primary'>Tambah Peralatan</a>
         </div>
         <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered" width = 100% cellspacing=0>
                        <thead>
                            <tr>
                                <th width=5%>No</th>                    
                                <th width=20%>Nama</th>
                                <th>Deskripsi</th>
                                <th width=8%>Gambar</th>
                                <th width=9%>Tempat</th>                                
                                <?php if($this->ion_auth->in_group('1')) : ?>
                                <th width=9%>Aksi</th>
                                <?php endif ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=$offset; foreach ($tools as $tool): ?>
                            <tr id=<?= $tool->id ?>>
                                <td>
                                    <?php echo ++$i ?>
                                </td>
                                <td>
                                    <?php echo $tool->name ?>
                                </td>
                                <td >
                                    <?php echo substr($tool->description,0,120) ?>
                                </td>
                                <td>
                                    <img src="<?php echo base_url('assets/uploads/tools/').$tool->photo ?>" alt="<?= $tool->name . ' Image' ?>" height=80>
                                </td>
                                <td>
                                    <?php echo $tool->place ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('admin/tools/edit/').$tool->id ?>" class='btn btn-primary edit-btn'><i class="fas fa-pen"></i></a>
                                    <a href="<?php echo base_url('admin/tools/delete/').$tool->id ?>" class='btn btn-danger edit-btn remove'><i class="fas fa-trash-alt"></i></a>
                                </td>
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
