
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="bootstrap-iso">
    <div class="container-fluid">
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('danger') || validation_errors()): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $this->session->flashdata('danger'); ?>
        <?php echo validation_errors() ?>
    </div>
    <?php endif; ?>
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Ubah Password</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/profile') ?>">Kembali</a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?= base_url('admin/member/change_password/').$member->username ?>" method=post>
        <div class="card-body">
         <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" name="email" id='email' value=<?= $member->email ?> readonly>
         </div>
         <div class="form-group">
            <label for="old_password">Password Lama</label>
            <input type="password" class="form-control" name="old_password" id='old_password' >
         </div>
         <div class="form-group">
            <label for="new_password">Password Baru</label>
            <input type="password" class="form-control" name="new_password" id='new_password' >
         </div>
         <div class="form-group">
            <label for="conf_password">Confirm Password Baru</label>
            <input type="password" class="form-control" name="conf_password" id='conf_password' >
         </div>
         <input type="hidden" name='id' value=<?= $member->id ?>>
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
