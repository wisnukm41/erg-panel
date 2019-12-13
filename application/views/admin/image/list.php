
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Gallery</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
        <!-- /.content-header -->
        <!-- general form elements -->
        <div class="card">
        <?php if($this->ion_auth->in_group('1') || $this->ion_auth->in_group('7')):  ?>
         <div class="card-header">
            <a href="<?php echo base_url('admin/image/add') ?>" class='btn btn-primary'>Tambah Image</a>
         </div>
         <?php endif ?>
         <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered" width = 100% cellspacing=0>
                        <thead>
                            <tr>
                                <th width=4%>No</th>
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th width=15%>Deskripsi</th>
                                <th width=2%>Slides</th>
                                <?php if($this->ion_auth->in_group('1') || $this->ion_auth->in_group('7')):  ?>
                                <th>Aksi</th>
                                <?php endif ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=$offset; foreach ($images as $image): ?>
                            <tr <?= $image->id ?>>
                                <td>
                                    <?php echo ++$i ?>
                                </td>
                                <td>
                                    <?php echo $image->name?>
                                </td>
                                <td>
                                    <img src="<?php echo base_url('assets/uploads/images/').$image->img ?>" alt="<?= $image->name . ' Image' ?>" height =100>
                                </td>
                                <td>
                                    <?php echo $image->description?>
                                </td>
                                <td>
                                <div class="icheck-primary d-inline pl-2">
                                    <?php if($image->carousel == 0): ?>
                                        <input type="checkbox" name="carousel" style="margin-left:20px" id="carousel" class='seeonly'>
                                    <?php else: ?>
                                        <input type="checkbox" name="carousel" style="margin-left:20px" id="carousel" checked  class='seeonly'>
                                    <?php endif ?>
                                    <label class="form-check-label" for="carousel"></label>
                                </div>
                                </td>
                                <?php if($this->ion_auth->in_group('1') || $this->ion_auth->in_group('7')): ?>
                                <td>
                                    <a href="<?php echo base_url('admin/image/edit/').$image->id ?> " class='btn btn-primary edit-btn'><i class="fas fa-pen"></i></a>
                                    <a href="<?php echo base_url('admin/image/delete/').$image->id ?> " class='btn btn-danger edit-btn remove'><i class="fas fa-trash-alt"></i></a>
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
