
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Produk</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
        <!-- /.content-header -->
        <!-- general form elements -->
        <div class="card">
         <div class="card-header">
         <?php if($this->ion_auth->in_group('1')): ?>
            <a href="<?php echo base_url('admin/products/add') ?>" class='btn btn-primary'>Tambah Produk</a>
         <?php endif ?>
         </div>
         <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered" width = 100% cellspacing=0>
                        <thead>
                            <tr>
                                <th width=5%>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Tanggal</th>
                                <?php if($this->ion_auth->in_group('1')): ?>
                                <th>Aksi</th>
                                <?php endif ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=$offset; foreach ($products as $product): ?>
                            <tr id=<?= $product->id  ?>>
                                <td>
                                    <?php echo ++$i ?>
                                </td>
                                <td>
                                    <?php echo $product->name ?>
                                </td>
                                <td>
                                    <?php echo substr($product->description,0,120)?>
                                </td>
                                <td>
                                    <?php echo $product->date ?>
                                </td>
                                <?php if($this->ion_auth->in_group('1')): ?>
                                <td>
                                    <a href="<?php echo base_url('admin/products/edit/').$product->id ?> " class='btn btn-primary edit-btn'><i class="fas fa-pen"></i></a>
                                    <a href="<?php echo base_url('admin/products/delete/').$product->id ?> " class='btn btn-danger edit-btn remove'><i class="fas fa-trash-alt"></i></a>
                                    <a href="<?php echo base_url('admin/products/image/').$product->id ?>" class='btn btn-success edit-btn'><i class="fas fa-photo"></i></a>
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
