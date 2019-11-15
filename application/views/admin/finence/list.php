
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Keuangan ERG</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
        <!-- /.content-header -->
        <!-- general form elements -->
        <div class="card">
         <div class="card-header">
            <a href="<?php echo base_url('admin/finence/add') ?>" class='btn btn-primary'>Tambah Data</a>
            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
            </div>
             <?php endif; ?>
             <?php if ($this->session->flashdata('warning')): ?>
            <div class="alert alert-warning" role="alert">
            <?php echo $this->session->flashdata('warning'); ?>
            </div>
             <?php endif; ?>
         </div>
         <!-- /.card-header -->
            <div class="card-body">
            <div class="container">
            <div class="row">
              <div class="col-12 ">
                <div class="card">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="finence-list" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" href="#pemasukan" role="tab" aria-controls="description" aria-selected="true">Pemasukan</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link"  href="#pengeluaran" role="tab" aria-controls="history" aria-selected="false">Pengeluaran</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="text-center">
                      <h5 class="mb-2">Keuangan ERG</h5>
                      <?php if($sign == '-') :?>
                      <h2 class="text-danger"><?= $sign.' '.$totals ?></h2>
                      <?php else : ?>
                      <h2 class="text-success"><?= $sign.' '.$totals ?></h2>
                      <?php endif; ?>
                    </div>
                    <div class="tab-content mt-3">
                      <div class="tab-pane active" id="pemasukan" role="tabpanel">
                        <div class="table-responsive">
                          <table class="table table-hover table-striped table-bordered" width = 100% cellspacing=0>
                            <thead>
                                <tr>
                                    <th width=4%>No</th>
                                    <th>Tanggal</th>
                                    <th>Asal</th>
                                    <th>Jumlah</th>
                                    <?php if($this->ion_auth->in_group(1)) : ?>
                                    <th width=10%>Aksi</th>
                                    <?php endif ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;
                                      $intotal = 0;
                                foreach ($in as $in): 
                                $intotal = $intotal + $in->value; ?>
                                <tr id=<?= $in->id ?>>
                                    <td>
                                        <?php echo $i++ ?>
                                    </td>
                                    <td>
                                        <?php echo $in->date?>
                                    </td>
                                    <td>
                                        <?php echo $in->description ?>
                                    </td>
                                    <td>
                                        <?php echo total($in->value) ?>
                                    </td>
                                    <?php if($this->ion_auth->in_group(1)): ?>
                                    <td>
                                      <a href="<?php echo base_url('admin/finence/edit/').$in->id ?>" class='btn btn-primary edit-btn'><i class="fas fa-pen"></i></a>
                                      <a href="<?php echo base_url('admin/finence/delete/').$in->id ?>" class='btn btn-danger edit-btn remove'><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                    <?php endif ?>
                                </tr>
                                <?php endforeach; ?>
                                <tr>
                                  <td colspan = 3>Jumlah  </td>
                                  <td colspan = 2><?= total($intotal) ?></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                      </div>
                      
                      <div class="tab-pane" id="pengeluaran" role="tabpanel" aria-labelledby="history-tab">  
                      <div class="table-responsive">
                          <table class="table table-hover table-striped table-bordered" width = 100% cellspacing=0>
                            <thead>
                                <tr>
                                    <th width=4%>No</th>
                                    <th>Tanggal</th>
                                    <th>Asal</th>
                                    <th>Jumlah</th>
                                    <th width=10%>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;
                                      $outtotal = 0;
                                foreach ($out as $out): 
                                $outtotal = $outtotal + $out->value; ?>
                                <tr id=<?= $out->id ?>>
                                    <td>
                                        <?php echo $i++ ?>
                                    </td>
                                    <td>
                                        <?php echo $out->date?>
                                    </td>
                                    <td>
                                        <?php echo $out->description ?>
                                    </td>
                                    <td>
                                        <?php echo total($out->value) ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/finence/edit/').$out->id ?>" class='btn btn-primary edit-btn'><i class="fas fa-pen"></i></a>
                                        <a href="<?php echo base_url('admin/finence/delete/').$out->id ?>" class='btn btn-danger edit-btn remove'><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <tr>
                                  <td colspan = 3>Jumlah  </td>
                                  <td colspan = 2><?= total($outtotal) ?></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                      </div>
                
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
  </div>
