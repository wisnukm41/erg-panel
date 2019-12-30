
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="bootstrap-iso">
    <div class="container-fluid">
    <?php 
    if(validation_errors()): ?>
          <div class="alert alert-danger" role="alert">
          <?php echo validation_errors(); ?>
      </div>
    <?php endif ?>
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Tambah Data Piket</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/piket') ?>" class='btn btn-warning'>Kembali</a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?= base_url('admin/piket/add') ?>" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="member_dropdown">Anggota</label>
            <?php echo form_dropdown('user_id',$members,0,$drop_option_m) ?>
          </div>
          <div class="form-group">
            <label for="day">Hari</label>
            <?php echo form_dropdown('day',$days,0,$drop_option_d) ?>
          </div>
          <div class="form-group">
            <label for="place">Tempat</label>
            <?php echo form_dropdown('place',$places,0,$drop_option_p) ?>
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
