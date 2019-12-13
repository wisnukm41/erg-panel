
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
            <h1 class="m-0 text-dark">Edit Data Keuangan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/finence/') ?>" class='btn btn-warning'>Kembali</a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?= base_url('admin/finence/edit/').$value->id ?>" method=post>
        <div class="card-body">
         <div class="form-group">
          <label for="description">Deskripsi</label>
          <input type="text" class="form-control" name="description" id='description' value="<?= $value->description ?>">
         </div>
         <div class="form-group">
          <label for="date">Tanggal</label>
          <input type="text" class="form-control" name="date" id='date' value="<?= $value->date ?>"">
         </div>
         <div class="form-group">
          <label for="type">Jenis</label>
          <?php echo form_dropdown('type', $type, $value->type, $type_style);?>
         </div>
         <div class="form-group">
          <label for="value">Jumlah</label>
          <input type="text" class="form-control" name='value' id='value' value=<?= $value->value ?> placeholder="Contoh = 100000" >
         </div>

         <input type="hidden" name='id' value=<?= $value->id ?>>
         <input type="hidden" name='username' value="<?= username() ?>">
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
