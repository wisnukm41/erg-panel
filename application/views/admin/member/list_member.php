
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Member of ERG || Anggota</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
        <!-- /.content-header -->
        <!-- general form elements -->
        <div class="card">
         <div class="card-header">
            <!-- <a href="#">Add Product</a> -->
         </div>
         <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered" width = 100% cellspacing=0>
                        <thead>
                            <tr>
                                <th width=5%>No</th>
                                <th>Nama Lengkap</th>
                                <th>Sub-Riset</th>
                                <th>Jabatan</th>
                                <th>Jurusan</th>
                                <th>Tahun</th>
                                <th>Kontak</th>
                                <?php if($this->ion_auth->is_admin()): ?>
                                <th>Aksi</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($members as $member): 
                                if($member->group_id === '2'){    
                            ?>
                            <tr id=<?= $member->id ?>>
                                <td>
                                    <?php echo $i++ ?>
                                </td>
                                <td>
                                    <?php echo $member->username ?>
                                </td>
                                <td>
                                    <?php echo $riset[$member->sub_riset] ?>
                                </td>
                                <td>
                                    <?php echo $member->position ?>
                                </td>
                                <td>
                                    <?php echo $member->major ?>
                                </td>
                                <td>
                                    <?php echo $member->year ?>
                                </td>
                                <td>
                                    <?php echo $member->phone ?>
                                </td>
                                <?php if($this->ion_auth->is_admin()): ?>
                                <td>
                                <a href="<?php echo base_url('admin/member/edit/').$member->id ?> " class='btn btn-primary edit-btn'><i class="fas fa-pen"></i></a>
                                    <a href="<?php echo base_url('admin/member/delete/').$member->id ?> " class='btn btn-danger edit-btn remove'><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <?php endif; ?>
                            </tr>
                            <?php } endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
  </div>
