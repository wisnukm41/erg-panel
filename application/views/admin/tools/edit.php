
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
            <h1 class="m-0 text-dark">Edit Alat</h1>
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
      <form role="form" action="<?= base_url('admin/tools/edit/').$tool->id ?>" method=post>
        <div class="card-body">
          <div class="form-group">
            <label for="newsName">Nama</label>
            <input type="text" class="form-control" id="newsName" placeholder="Enter news topic" name='name' value="<?= $tool->name ?>">
          <div class="form-group">
            <label for="exampleInputFile">File Gambar</label>
            <div class="input-group">
              <div>
                <input type="file" class="custom-file-input" id="exampleInputFile" accept=".png,.jpg">
                <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
              </div>
            </div>
            <input type="hidden" name="old_img" value="<?php echo $tool->photo ?>">
          </div> 
          </div>
          <div class="form-group mb-3">
          <label for="productDescription">Deksripsi</label>
                <textarea class="textarea" placeholder="Place some text here" id="productDescription" name='description'
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          <?= $tool->description ?>
                          </textarea>
          </div>
          <div class="form-group">
            <label for="newsName">Tempat</label>
            <input type="text" class="form-control" id="newsName" placeholder="Lokasi Alat" name='place' value="<?= $tool->place ?>">
          </div>
          <input type="hidden" name="id" value=<?= $tool->id ?>>
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
