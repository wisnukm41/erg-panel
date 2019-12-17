
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
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" id='username' value="<?= $member->username ?>" readonly>
         </div>
         <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" name="email" id='email' value="<?= $member->email ?>" readonly>
         </div>
         <input type="hidden" name='id' value=<?= $member->id ?>>
         <input type="hidden" name='old_sub_riset' value=<?= $member->sub_riset ?>>
         <input type="hidden" name='old_position' value=<?= $member->position ?>>
         <input type="hidden" name='old_major' value=<?= $member->major ?>>
         <input type="hidden" name='old_year' value=<?= $member->year ?>>
         <input type="hidden" name='old_phone' value=<?= $member->phone ?>>
         <input type="hidden" name='old_level' value=<?= $member->group_id ?>>
         <?php if($member->group_id != 6): ?>
         <div class="form-group">
          <label for="sub_riset">Sub Riset</label>
          <?php echo form_dropdown('sub_riset', $riset, $member->sub_riset, $sub_riset);?>
         </div>
         <div class="form-group">
          <label for="position">Jabatan</label>
          <input type="text" class="form-control" name="position" id='position' value="<?= $member->position ?>">
         </div>
         <div class="form-group">
          <label for="major">Jurusan</label>
          <input type="text" class="form-control" name="major" id='major' value="<?= $member->major ?>">
         </div>
         <div class="form-group">
          <label for="year">Tahun Angkatan</label>
          <input type="text" class="form-control" name="year" id='year' value="<?= $member->year ?>">
         </div>
         <div class="form-group">
          <label for="phone">Kontak</label>
          <input type="text" class="form-control" name="phone" id='phone' value="<?= $member->phone ?>">
         </div>
         <?php endif ?>
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
