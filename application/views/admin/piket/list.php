
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Data Piket</h1>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
        <!-- /.content-header -->
        <!-- general form elements -->
        <div class="card">
         <?php if($this->ion_auth->in_group('1') || $this->ion_auth->in_group('7')) : ?>
         <div class="card-header">
            <a href="<?php echo base_url('admin/piket/add') ?>" class='btn btn-primary'>Tambah Data Piket</a>
         </div>
        <?php endif ?>
         <!-- /.card-header -->
            <div class="card-body">
               <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success p-2" role="alert">
                         <?php echo $this->session->flashdata('success'); ?>
                    </div>
               <?php endif; ?>
                    <table class="table table-hover table-striped table-bordered text-center" width = 100% cellspacing=0 id='table-piket'>
                        <thead>
                            <tr>
                                <th width='15%'>Hari</th>
                                <th width='35%'>Lab Atas</th>
                                <th width='35%'>Lab Bawah</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php for($i = 0 ; $i<=5 ; $i++){ ?>
                              <tr id=<?= 'piket-'.$i ?>>
                                   <td><?= $days[$i] ?></td>
                                   <td><?php echo ($this->ion_auth->in_group('1') || $this->ion_auth->in_group('7')) ? getPiket($piket,$i,'0',1) : getPiket($piket,$i,'0',0); ?></td>
                                   <td><?php echo ($this->ion_auth->in_group('1') || $this->ion_auth->in_group('7')) ? getPiket($piket,$i,'1',1) : getPiket($piket,$i,'1',0); ?></td>
                              </tr>
                           <?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div><!-- /.container-fluid -->
  </div>
  <?php if(isset($pikets)){ ?>
  <input type="hidden" value=<?= $pikets ?> id="pikets">
  <?php } ?>
