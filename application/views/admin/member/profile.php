<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile of <?= $username->username ?></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
      <?php if ($this->session->flashdata('success')): ?>
       <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
       </div>
      <?php endif; ?>
        <div class="card-body">
            <div class="d-flex justify-content-center mb-5">
                <img src="<?= base_url('assets/uploads/profile/').$username->photo ?>" class="rounded-circle" width="150" height="150" > 
            </div>
                <table class="table table-striped table-bordered">
                    <tr>
                        <td width=30%>Username</td>
                        <td><?= $username->username ?></td>
                    </tr>
                    <tr>
                        <td width=30%>Email</td>
                        <td><?= $username->email ?></td>
                    </tr>
                    <tr>
                        <td width=30%>Sub Riset</td>
                        <td><?= $riset[$username->sub_riset] ?></td>
                    </tr>
                    <tr>
                        <td width=30%>Jabatan</td>
                        <td><?= $username->position ?></td>
                    </tr>
                    <tr>
                        <td width=30%>Jurusan</td>
                        <td><?= $username->major ?></td>
                    </tr>
                    <tr>
                        <td width=30%>Tahun</td>
                        <td><?= $username->year ?></td>
                    </tr>
                </table>
            <div class="container">
                <a class="btn btn-primary mt-3" href="<?= base_url('admin/profile/change_password/').$username->username?>">Change Password</a>
                <a class="btn btn-primary mt-3" href="<?= base_url('admin/profile/edit/').$username->username?>">Change Profile</a>
            </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->