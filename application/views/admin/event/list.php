<style>

    table {
        table-layout: fixed;
        border-collapse:collapse;
    }
    th, td{
        text-align: center;  
        font-size: 1.4rem;
        position: relative;
        overflow: hidden;
        border: 1px solid #e2e0e0;
        padding:10px 0;
    }

    .arrow{
        padding: 10px 20px;
    }

    .day-content::before{
      content: '';
      width: 20px;
      height: 20px;
      background-color: orange;
      position: absolute;
      left: 0;
      top:0;
    }
    
    .highlight{
      border-bottom: 3px blue solid;
      margin: 0 30px;
    }
    
    .tanggal{
      background-color: orange;
      padding: 10px;
      margin-left: -20px;
    }

</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Kalender</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
        <!-- /.content-header -->
        <!-- general form elements -->
        <div class="card">
         <?php if($this->ion_auth->in_group('1') || $this->ion_auth->in_group(7)) : ?>
         <div class="card-header">
            <a href="<?php echo base_url('admin/event/add') ?>" class='btn btn-primary'>Tambah Data</a>
         </div>
        <?php endif ?>
         <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-lg-8">
                  <?php echo $calender; ?>
                </div>
                <div class="col-lg-4">
                  <h2>Data Acara</h2>
                  <?php 
                  if($caldata):
                  foreach ($caldata as $c ) { ?>
                    <div class="card card-default collapsed-card" id="<?= $c->id ?>">
                      <div class="card-header with-border">
                        <h5 class="card-title"> <span class='tanggal'><?= (int)explode('-',$c->date)[2] ?></span></h5>
                        <div class="card-tools">
                            <?= $c->name ?>
                            <button class="btn btn-card-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                            <?php if($this->ion_auth->in_group('1') || $this->ion_auth->in_group('7')) : ?>
                              <a href="<?= base_url('admin/event/edit/').$c->id ?>" class="btn btn-card-tool"><i class="fas fa-pen"></i></a>
                              <a href="<?= base_url('admin/event/delete/').$c->id ?>" class="btn btn-card-tool remove"><i class="fa fa-times"></i></a>
                            <?php endif ?>
                        </div><!-- /.card-tools -->
                      </div><!-- /.card-header -->
                      <div class="card-body">
                    <?= $c->description ?>
                      </div><!-- /.card-body -->
                  </div><!-- /.card -->
                <?php }
                else: 
                ?>
                <p>Tidak ada Acara Pada Bulan ini</p>
                <?php endif; ?>
                </div>
              </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
  </div>
