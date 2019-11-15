
    <!-- Carousel -->
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?= base_url('assets/uploads/images/').$active_slide->img ?>" alt="<?= $active_slide->name.' Image' ?>">
                </div>
                <?php foreach ($slides as $slide) : ?>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= base_url('assets/uploads/images/').$slide->img ?>" alt="<?= $slide->name.' Image' ?>">
                </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container color-light pt-2">
        <div class="content p-4">
            <div class="row content">
                <div class="col text-center mb-3 jumbotron content-head">
                    <p class="head-title"> Sub Divisi </p>
                    <hr width="5%" size="10px">
                    <p class="head-content">Divisi ERG memiliki sub divisi yang dapat dipilih sesuai dengan bakat dan minat anggotanya</p>
                </div>
            </div>
            <div class="row" id="sub">
                <div class="col-md-4 sub-col">
                    <div class="place-image">
                        <a href="#" class="show-content">
                            <img src="<?php echo base_url('assets/public/software.png') ?>" alt="Software.png" class="sub-image">
                        </a>
                    </div>
                    <div class="content-hide">
                        <p class="text-center sub-title"> Software </p>
                        <ul>
                            <li>Desktop</li>
                            <li>Mobile</li>
                            <li>Website</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 sub-col">
                    <div class="place-image">
                        <a href="#" class="show-content">
                            <img src="<?php echo base_url('assets/public/hardware.png') ?>" alt="Hardware.png" class="sub-image">
                        </a>
                    </div>
                    <div class="content-hide">
                        <p class="text-center sub-title"> Embedded System </p>
                        <ul>
                            <li>Desain PCB</li>
                            <li>Mikrokontroler</li>
                            <li>RTOS</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 sub-col">
                    <div class="place-image">
                        <a href="#" class="show-content">
                            <img src="<?php echo base_url('assets/public/IoT.png') ?>" alt="Iot.png" class="sub-image">
                        </a>
                    </div>
                    <div class="content-hide">
                        <p class="text-center sub-title">Internet Of Things</p>
                        <ul>
                            <li>Raspyberry Pi</li>
                            <li>GSM Module</li>
                            <li>MQTT</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mx-5">
                <div class="col text-center mb-3 jumbotron content-head">
                    <p class="text-center head-title">Kegiatan Kami</p>
                    <hr width="5%" size="10px">
                    <p class="head-content">anggota divisi ERG memiliki kegiatan rutin yang dapat membangun anggotanya</p>
                </div>
                <div class="row">
                    <div class="col-md-4 sub-col aktivitas">
                        <div class="place-image">
                            <a href="#" class="show-content">
                                <img src="<?php echo base_url('assets/public/riset.png') ?>" alt="Riset.png" class="sub-image">
                            </a>
                        </div>
                        <div class="content-hide">
                            <p class="text-center sub-title">Riset</p>
                            <p class="sub-content">Kami Melakukan riset sesuai dengan minat kami, dibantu oleh para senior agar riset kami terarah</p>
                        </div>
                    </div>
                    <div class="col-md-4 sub-col aktivitas">
                        <div class="place-image">
                            <a href="#" class="show-content">                                
                                <img src="<?php echo base_url('assets/public/rapat.png') ?>" alt="Rapat.png" class="sub-image">
                            </a>
                        </div>
                        <div class="content-hide">
                            <p class="text-center sub-title">Rapat</p>
                            <p class="sub-content">Rapat diadakan secara rutin, untuk membahas project, dan juga lomba-lomba mendatang</p>
                        </div>
                    </div>
                    <div class="col-md-4 sub-col aktivitas">
                        <div class="place-image">
                            <a href="#" class="show-content">
                                <img src="<?php echo base_url('assets/public/game.png') ?>" alt="Game.png" class="sub-image">
                            </a>
                        </div>
                        <div class="content-hide">
                            <p class="text-center sub-title">Hiburan</p>
                            <p class="sub-content">Riset itu berat, jadi kami menghibur diri dengan bermain game, atau mengadakan acara keluar</p>
                        </div>
                    </div>
                    <div class="col-md-4 sub-col aktivitas">
                        <div class="place-image">
                            <a href="#" class="show-content">
                                <img src="<?php echo base_url('assets/public/olahraga.png') ?>" alt="Olahraga.png" class="sub-image">
                            </a>
                        </div>
                        <div class="content-hide">
                            <p class="text-center sub-title">Olahraga</p>
                            <p class="sub-content">Olahraga juga penting, kami agendakan untuk olahraga agar tubuh tetap sehat</p>
                        </div>
                    </div>
                    <div class="col-md-4 sub-col aktivitas">
                        <div class="place-image">
                            <a href="#" class="show-content">
                                <img src="<?php echo base_url('assets/public/kompetisi.png') ?>" alt="Kompetisi.png" class="sub-image">
                            </a>
                        </div>
                        <div class="content-hide">
                            <p class="text-center sub-title">Kompetisi</p>
                            <p class="sub-content">Tujuan utama riset kita adalah untuk mengikuti kompetisi, mengharumkan nama universitas juga membanggakan orangtua</p>
                        </div>
                    </div>
                    <div class="col-md-4 sub-col aktivitas">
                        <div class="place-image">
                            <a href="#" class="show-content">
                                <img src="<?php echo base_url('assets/public/seminar.png') ?>" alt="Seminar.png" class="sub-image">
                            </a>
                        </div>
                        <div class="content-hide">
                            <p class="text-center sub-title">Sharing</p>
                            <p class="sub-content">Kami biasa membagi ilmu-ilmu yang telah dipelajari, entah dari riset atau pengalaman kompetisi, agar kedepannya dapat jadi lebih baik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mx-5">
                <div class="col text-center mb-3 jumbotron content-head">
                    <p class="text-center head-title">Prestasi Kami</p>
                    <hr width="5%" size="10px">
                    <p class="head-content">Kami banyak mendapat prestasi, sebagai berikut</p>
                </div>
            </div>
        </div>
        <?php $year = 3000;
             foreach ($awards as $award):
             if($award->year < $year):
             ?>
        <div class="row">
            <div class="col-md-2 award-year">
                <p><?=$award->year?></p>
            </div>
            <div class="col-md-10 award-list">
               <ul>
                   <?php foreach ($awards as $list) : 
                        if($list->year == $award->year):
                    ?>
                       <li><?= $list->topic ?></li>
                   <?php
                        endif;
                        endforeach;
                    ?>
               </ul>
            </div>
        </div>
            <?php
                endif;
                $year = $award->year; 
                endforeach;
            ?>
        <div class="row">
            <div class="col text-center mb-3 jumbotron content-head">
                <p class="text-center head-title">Info Lebih Lanjut</p>
                <hr width="5%" size="10px">
                <div class="row">
                    <div class="head-content col-md-4">
                        <img src="<?php echo base_url('assets/public/instagram.png') ?>" alt="" class='info'>
                        <p>ergunikom_</p>    
                    </div>
                    <div class="head-content col-md-4">
                        <img src="<?php echo base_url('assets/public/facebook.png') ?>" alt="" class='info'>
                        <p>@divisiergunikom</p>
                    </div>
                    <div class="head-content col-md-4">
                        <img src="<?php echo base_url('assets/public/youtube.png') ?>" alt="" class='info'>
                        <p>Divisi ERG UNIKOM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
