
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $product_count ?></h3>

                <p>Produk</p>
              </div>
              <div class="icon">
                <i class="ion ion-briefcase"></i>
              </div>
              <a href="<?= base_url('admin/products') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $news_count ?></h3>

                <p>Berita</p>
              </div>
              <div class="icon">
                <i class="ion ion-planet"></i>
              </div>
              <a href="<?= base_url('admin/news') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $image_count ?></h3>

                <p>Gallery</p>
              </div>
              <div class="icon">
                <i class="ion ion-images"></i>
              </div>
              <a href="<?= base_url('admin/image') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $member_count ?></h3>

                <p>Anggota</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="<?= base_url('admin/member') ?>" class="small-box-footer" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
        </div>
        <div class="row">
          <section class="col-lg-6 ">
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Pengumuman</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages" id='direct-chat-messages'>
                  <!-- Message. Default to the left -->
                  <?php 
                  foreach ($chats as $chat) :
                    if($chat->user_id != actUser()->id):
                  ?>
                  <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name float-left"><?= $chat->username ?></span>
                      <span class="direct-chat-timestamp float-right"><?= $chat->time ?></span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img class="direct-chat-img" src="<?= base_url('assets/uploads/profile/').$chat->photo ?>" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      <?= $chat->description ?>
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->
                  <?php else : ?>
                  <!-- Message to the right -->
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name float-right"><?= $chat->username ?></span>
                      <span class="direct-chat-timestamp float-left"><?= $chat->time ?></span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img class="direct-chat-img" src="<?= base_url('assets/uploads/profile/').$chat->photo ?>" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                    <?= $chat->description ?>
                    <?php if($this->ion_auth->in_group(1) || $this->ion_auth->in_group(3) || $this->ion_auth->in_group(7)): ?>
                      <a href="<?= base_url('admin/erg/delete/').$chat->id ?>" class='text-danger float-right remove'><i class="fas fa-trash"></i></a>
                    <?php endif ?>
                    </div>
                  <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->
                  <?php  
                    endif;
                  endforeach;
                   ?>
                </div>
                <!--/.direct-chat-messages-->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <?php if($this->ion_auth->in_group(1) || $this->ion_auth->in_group(3) || $this->ion_auth->in_group(7)): ?>
                <form action="<?= base_url('admin/erg/add_chat') ?>" method="post">
                  <div class="input-group">
                    <input type="text" name="description" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-primary">Send</button>
                    </span>
                  </div>
                </form>
                <?php endif; ?>
              </div>
              <!-- /.card-footer-->
            </div>
          </section>
          <section class="col-lg-6 ">
          <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Anggota ERG</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0" style="overflow:scroll;height:274px">
                    <ul class="users-list clearfix">
                      <?php
                       foreach ($list_members as $member) :
                        if($member->group_id == 2 || $member->group_id == 7) :
                        ?>
                      <li>
                        <div class="rounded-circle" style="background-image: url('<?= base_url('assets/uploads/profile/').$member->photo  ?>')"></div>
                        <span class="users-list-name"><?= $member->username ?></span>
                        <span class="users-list-date"><?= getRiset($member->sub_riset) ?></span>
                      </li>
                        <?php 
                          endif;
                        endforeach; ?>
                    </ul>
                    <!-- /.users-list -->
                  </div>
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
            <!-- DIRECT CHAT -->
            <!--/.direct-chat -->