
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="bootstrap-iso">
    <div class="container-fluid">
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Ubah Profile</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/profile') ?>" class="btn btn-warning">Kembali</a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?= base_url('admin/profile/edit') ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">
          <div class="d-flex justify-content-center mb-5">
            <img src="<?= base_url('assets/uploads/profile/').$username->photo ?>" class="rounded-circle" width="150" height="150" id="profilePhoto"> 
            <label for="photo" id="edit_photo" class="mt-auto">
              <i class="fas fa-camera fa-2x"></i>
            </label>
            <input type="file" id="photo" accept="image/*" name="image" accept=".png,.jpg">
          </div>
         <div class="form-group">
          <label for="username">Nama Lengkap</label>
          <input type="text" class="form-control" name="username" id='username' value="<?= $username->username ?>">
         </div>
         <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" name="email" id='email' value=<?= $username->email ?> readonly>
         </div>
         <?php if(!$this->ion_auth->in_group('3')) : ?>
         <div class="form-group">
          <label for="sub_riset">Sub Riset</label>
          <?php echo form_dropdown('sub_riset', $riset, $username->sub_riset, $sub_riset);?>
         </div>
        <?php endif ?>
        <?php if($this->ion_auth->in_group('1')) : ?>
         <div class="form-group">
          <label for="position">Jabatan</label>
          <input type="text" class="form-control" name='position' id='position' value="<?= $username->position ?>" >
         </div>
         <?php else : ?>
         <input type="hidden" class="form-control" name='position' id='position' value="<?= $username->position ?>" >
         <?php endif ?> 
         <div class="form-group">
          <label for="major">Jurusan</label>
          <input type="text" class="form-control" name='major' id='major' value="<?= $username->major ?>" >
         </div>
         <div class="form-group">
          <label for="year">Tahun</label>
          <input type="text" class="form-control" name='year' id='year' value="<?= $username->year ?>" >
         </div>
         <div class="form-group">
          <label for="phone">Kontak</label>
          <input type="text" class="form-control" name='phone' id='phone' value="<?= $username->phone ?>" >
         </div>
         <input type="hidden" name='id' value=<?= $username->id ?>>
         <input type="hidden" name='level' value=<?= $group_id ?>>
         <input type="hidden" name='old_img' value=<?= $username->photo ?>>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
    </div><!-- /.container-fluid -->
    </div>
  </div>
