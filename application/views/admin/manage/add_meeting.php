
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
            <h1 class="m-0 text-dark">Tambah Rapat</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/meeting') ?>">Kembali</a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?= base_url('admin/meeting/add_meeting') ?>" method=post>
        <div class="card-body">
          <div class="form-group">
            <label for="topic">Topik</label>
            <input type="text" class="form-control" id="topic" placeholder="Meeting Topic" name='topic'>
          </div>
          <div class="form-group mb-3">
          <label for="meetingDescription">Deskripsi</label>
                <textarea class="summernote" placeholder="Place some text here" id="meetingDescription" name='description'></textarea>
          </div>
          <input type="hidden" value=<?= date("d/m/Y")?> name='dates'>
          <input type="hidden" value=<?= username() ?> name='user'>
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
