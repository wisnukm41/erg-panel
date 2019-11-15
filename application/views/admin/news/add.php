
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="bootstrap-iso">
    <div class="container-fluid">
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php endif; ?>
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Tambah Berita</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/news') ?>">Kembali</a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?= base_url('admin/news/add') ?>" method=post enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label for="newsName">Topic</label>
            <input type="text" class="form-control" id="newsName" placeholder="Enter news topic" name='name'>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File Gambar</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name='img' accept=".png,.jpg">
                <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
              </div>
          </div> 
          <div class="form-group mb-3">
            <label for="productDescription">Deskripsi</label>
                <textarea class="summernote" placeholder="Place some text here" id="productDescription" name='description'></textarea>
          </div>
          <div class="form-group">
             <label class="control-label" for="date">Tanggal</label>
            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" autocomplete="off"/>
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
