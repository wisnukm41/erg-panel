
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
            <h1 class="m-0 text-dark">Tambah Data Keuangan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/finence') ?>">Kembali</a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?= base_url('admin/finence/add') ?>" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="description">Deskripsi</label>
            <input type="text" class="form-control" id="description" placeholder="Deskripsi keuangan" name='description'>
          </div>    
          <div class="form-group">
            <label for="date">Tanggal</label>
            <input type="text" class="form-control" id="date" name='date' autocomplete='off'>
          </div> 
          <div class="form-group">
            <label for="type">Jenis</label>
            <select name="type" id="type" class="form-control">
            <option value="in">Masuk</option>
            <option value="out">Keluar</option>
            </select>
         </div>
         <div class="form-group">
            <label for="value">Jumlah</label>
            <input type="text" class="form-control" id='value' name='value' placeholder='Contoh : 100000'>
         </div>
         <input type="hidden" value="<?= username() ?>" name="username">
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
