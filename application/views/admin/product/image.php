
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h2 class="m-0 text-dark">Gambar Produk "<?php echo $product->name ?>"</h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
        <!-- /.content-header -->
        <!-- general form elements -->
        <div class="card">
         <div class="card-header">

         <!-- //base_url('admin/products/add') -->
         <?php if($this->ion_auth->in_group('1')): ?>
            <a href="<?php echo base_url('admin/products/add_image/').$product->id ?>">Tambah Gambar</a>
         <?php endif ?>
         </div>
         <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered" width = 100% cellspacing=0>
                        <thead>
                            <tr>
                                <th width=4%>No</th>
                                <th width=70%>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($image as $image): ?>
                            <tr>
                                <td>
                                    <?=$i++?>
                                </td>
                                <td>
                                    <img src="<?php echo base_url('assets/uploads/product/').$image->path ?>" alt="" height="300px">
                                </td>
                                <?php if($this->ion_auth->in_group('1')): ?>
                                <td>
                                    <a href="<?php echo base_url('admin/products/imagedelete/').$image->id.'/'.$product->id ?> " class='btn btn-danger edit-btn'><i class="fas fa-trash-alt"></i></a>
                                </td>
                            <?php endif ?>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php echo $page ?>
            </div>
        </div>
    </div><!-- /.container-fluid -->
  </div>
