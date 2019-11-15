
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="bootstrap-iso">
    <div class="container-fluid">
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php endif; ?>
    <?php 
        if(validation_errors()){ ?>
          <div class="alert alert-danger" role="alert">
          <?php echo validation_errors(); ?>
      </div>
        <?php } ?>
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Tambah Gambar</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/image') ?>">Kembali</a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?= base_url('admin/image/add') ?>" method=post enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label for="imageName">Topik</label>
            <input type="text" class="form-control" id="imageName" placeholder="Enter image topic" name='name'>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File gambar</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name='image' accept=".png,.jpg">
                <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
              </div>
          </div> 
          <div class="form-group mb-3">
            <label for="productDescription">Deskripsi</label>
                <textarea class="summernote" placeholder="Place some text here" id="productDescription" name='description'></textarea>
          </div>
          <div class="form-group">
            <div class="icheck-primary d-inline">
                <input type="checkbox" name="carousel" style="margin-left:20px" id="carousel">
                <label class="form-check-label" for="carousel">Carousel</label>
            </div>
         </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    </div><!-- /.container-fluid -->
    </div>
  </div>
