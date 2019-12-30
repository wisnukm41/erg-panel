
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
            <h1 class="m-0 text-dark">Edit Member</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/member/') ?>">Kembali</a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?= base_url('admin/member/edit/').$member->id ?>" method=post>
        <div class="card-body">
         <div class="form-group">
          <label for="username">Nama Lengkap</label>
          <input type="text" class="form-control" name="username" id='username' value="<?= $member->username ?>" readonly>
         </div>
         <input type="hidden" name='id' value=<?= $member->id ?>>
         <input type="hidden" name='old_level' value=<?= $member->group_id ?>>
         <div class="form-group">
         <label for="level">User Level</label>
          <?php echo form_dropdown('level', $groups, $member->group_id, $user_group);?>
         </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
    </div><!-- /.container-fluid -->
    </div>
  </div>
