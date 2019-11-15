
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
            <h1 class="m-0 text-dark">Tambah Peralatan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/tools') ?>">Kembali</a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?= base_url('admin/tools/add') ?>" method=post enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label for="newsName">Nama</label>
            <input type="text" class="form-control" id="newsName" placeholder="Nama Alat" name='name'>
          </div>
          <div class="form-group mb-3">
            <label for="productDescription">Deskripsi</label>
                <textarea class="textarea" placeholder="Deksripsi Alat" id="productDescription" name='description'
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File Gambar</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name='img' accept=".png,.jpg">
                <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
              </div>
          </div> 
          <div class="form-group">
            <label for="newsName">Tempat</label>
            <input type="text" class="form-control" id="newsName" placeholder="Lokasi Alat" name='place'>
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
