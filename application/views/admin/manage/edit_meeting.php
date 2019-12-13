
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
            <h1 class="m-0 text-dark">Edit Rapat</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/meeting') ?>" class='btn btn-warning'>Kembali</a>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?= base_url('admin/meeting/edit_meeting/').$meeting->id ?>" method=post>
        <div class="card-body">
          <div class="form-group">
            <label for="topic">Topik</label>
            <input type="text" class="form-control" id="topic" placeholder="Meeting Topic" name='topic' value="<?= $meeting->topic ?>">
          </div>
          <div class="form-group mb-3">
          <label for="meetingDescription">Deksripsi</label>
                <textarea class="summernote" placeholder="Place some text here" id="meetingDescription" name='description'><?= $meeting->description ?></textarea>
          </div>
          <input type="hidden" value=<?= $meeting->id ?> name='id'>
          <input type="hidden" value=<?= date("d/m/Y")?> name='dates'>
          <input type="hidden" value=<?= $meeting->writer ?> name='user'>
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
