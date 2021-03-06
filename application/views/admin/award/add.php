
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="bootstrap-iso">
    <div class="container-fluid">
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php endif; 
    if(validation_errors()): ?>
      <div class="alert alert-danger" role="alert">
      <?php echo validation_errors(); ?>
  </div>
<?php endif ?>
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Tambah Data Prestasi</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/award') ?>" class='btn btn-warning'>Kembali</a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?= base_url('admin/award/add') ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label for="topic">Nama</label>
            <input type="text" class="form-control" id="topic" name='topic' placeholder="Nama Prestasi">
          </div> 
          <div class="form-group mb-3">
            <label for="productDescription">Deskripsi</label>
                <textarea class="summernote" placeholder="Place some text here" id="productDescription" name='description'></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File Gambar</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name='image' accept=".png,.jpg">
                <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
              </div>
          </div>

          <div class="form-group">
            <label for="date">Tanggal</label>
            <input type="text" class="form-control" id="date" placeholder="Tanggal Prestasi" name='date' autocomplete='off'>
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
