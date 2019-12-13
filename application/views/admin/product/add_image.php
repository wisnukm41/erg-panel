
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="bootstrap-iso">
    <div class="container-fluid">
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php endif; ?>
    <?php if(validation_errors()){ ?>
          <div class="alert alert-danger" role="alert">
          <?php echo validation_errors(); ?>
      </div>
    <?php } ?>
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h3 class="m-0 text-dark">Tambah Gambar "<?php echo $product->name ?>"</h3>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/products/image/').$product->id ?>" class='btn btn-warning'> Kembali </a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <table style="margin: -10px 0px 0px 10px">  
      <form role="form" action="<?= base_url('admin/products/add_image/').$product->id ?>" method=post enctype="multipart/form-data">
      <input type="hidden" name ='product_id' value="<?php echo $product->id ?>">
        <div class="card-body">
        <div class="form-group">
              <label for="exampleInputFile">File Gambar</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name='image' accept=".png,.jpg">
                <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
              </div>
          </div> 
        </div>
        </table>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
     
    </div>
    </div><!-- /.container-fluid -->
    </div>
  </div>
    