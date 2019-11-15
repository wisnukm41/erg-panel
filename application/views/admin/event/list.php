
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Acara</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
        <!-- /.content-header -->
        <!-- general form elements -->
        <div class="card">
         <div class="card-header">
         <?php if($this->ion_auth->in_group('1')) : ?>
            <a href="<?php echo base_url('admin/event/add') ?>" class='btn btn-primary'>Tambah Acara</a>
        <?php endif ?>
         </div>
         <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered" width = 100% cellspacing=0>
                        <thead>
                            <tr>
                                <th width=5%>No</th>
                                <th width=20%>Topik</th>
                                <th>Deskripsi</th>
                                <th width=5%>Tanggal</th>
                                <?php if($this->ion_auth->in_group('1')) : ?>
                                <th width=9%>Aksi</th>
                                <?php endif ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=$offset; foreach ($event as $event): ?>
                            <tr id=<?= $event->id ?>>
                                <td>
                                    <?php echo ++$i ?>
                                </td>
                                <td>
                                    <?php echo $event->name ?>
                                </td>
                                <td>
                                    <?php echo substr($event->description,0,120) ?>
                                </td>
                                <td>
                                    <?php echo reconvert_date($event->date) ?>
                                </td>
                                <?php if($this->ion_auth->in_group('1')) : ?>
                                <td>
                                    <a href="<?php echo base_url('admin/event/edit/').$event->id ?>" class='btn btn-primary edit-btn'><i class="fas fa-pen"></i></a>
                                    <a href="<?php echo base_url('admin/event/delete/').$event->id ?>" class='btn btn-danger edit-btn remove'><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <?php endif ?>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?= $page ?>
            </div>
        </div>
    </div><!-- /.container-fluid -->
  </div>
