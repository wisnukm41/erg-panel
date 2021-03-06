
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
            <h1 class="m-0 text-dark">Edit Award</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/award/') ?>" class='btn btn-warning'>Kembali</a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?= base_url('admin/award/edit/').$award->id ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">
         <div class="form-group">
          <label for="topic">Topik</label>
          <input type="text" class="form-control" name="topic" id='topic' value="<?= $award->topic ?>">
         </div>
         <div class="form-group mb-3">
            <label for="productDescription">Deskripsi</label>
                <textarea class="summernote" placeholder="Place some text here" id="productDescription" name='description'><?= $award->description ?></textarea>
          </div>
         <div class="form-group">
            <label for="exampleInputFile">File Gambar</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name='image' accept=".png,.jpg">
                <label class="custom-file-label" for="exampleInputFile"><?= "$award->image" ?></label>
              </div>
          </div>  
         <div class="form-group">
          <label for="date">Tanggal</label>
          <input type="text" class="form-control" name="date" id='date' value="<?= $award->date ?>">
         </div>
         <input type="hidden" name='id' value=<?= $award->id ?>>
         <input type="hidden" name='old_img' value=<?= $award->image ?>>
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
