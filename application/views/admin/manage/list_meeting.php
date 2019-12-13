
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Rapat</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
        <!-- /.content-header -->
        <!-- general form elements -->
        <div class="card">
          <?php if($this->ion_auth->in_group('1') || $this->ion_auth->in_group('7')) : ?>
            <div class="card-header">
                <a href="<?= base_url('admin/meeting/add') ?>" class='btn btn-primary' class='btn btn-primary'>Tambah Rapat</a>
            </div>
          <?php endif; ?>
         <!-- /.card-header -->
          <div class="card-body">
            <?php
              $i=$offset;
              foreach ($meetings as $meeting ) : ?>
              <div class="card card-default collapsed-card" id="<?= $meeting->id ?>">
                  <div class="card-header with-border">
                      <h5 class="card-title mr-5"><?=  ++$i.'  |  '  ?>
                      <?php if(strlen($meeting->topic) > 65): ?>
                      <?= substr($meeting->topic,0,60).'...' ?>
                      <?php else: ?>
                      <?=$meeting->topic ?>
                      <?php endif; ?>
                      </h5>
                      <div class="card-tools pull-right">
                          <small> Ditulis Oleh <?= $meeting->writer ?> at <?= $meeting->date ?></small>
                          <button class="btn btn-card-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                          <?php if($this->ion_auth->in_group('1') || $this->ion_auth->in_group('7')) : ?>
                            <a href="<?= base_url('admin/meeting/edit/').$meeting->id ?>" class="btn btn-card-tool"><i class="fas fa-pen"></i></a>
                            <a href="<?= base_url('admin/meeting/delete/').$meeting->id ?>" class="btn btn-card-tool remove"><i class="fa fa-times"></i></a>
                          <?php endif ?>
                      </div><!-- /.card-tools -->
                  </div><!-- /.card-header -->
                  <div class="card-body">
                  <?= $meeting->description ?>
                  </div><!-- /.card-body -->
              </div><!-- /.card -->
            <?php endforeach; ?>
            <?= $page ?>
            </div>
          </div>
    </div><!-- /.container-fluid -->
  </div>
