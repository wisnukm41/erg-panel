<div class="container-fluid cf">
    <h3 class='mt-3'><?=$content->name?></h3>
    <hr>
    <div class="row">
        <div class="col-9 news-content">
            <div class="news-cover" style="background-image: url('<?= base_url('assets/uploads/news/').$content->img?>')"></div>
            <hr>
            <div class="news-date">
                <i class="far fa-clock"></i> | <?= $content->date ?>
            </div>
            <hr>
            <div class="news-desc">
                <?= $content->description ?>
            </div>
        </div>
        <div class="col-3">
        <h4>Berita Lainnya</h4>
        <hr>
            <?php 
                $i=1;
                foreach($news as $n):
                if($n->slug !== $slug && $i++ <=8):
            ?>
            <div class="other-news">
                <a href="<?=  base_url('news/').$n->slug ?>" style="text-decoration:none; color:black">
                    <div class="row">
                        <div class="col-4">
                            <div class="other-img" style="background-image: url('<?= base_url('assets/uploads/news/').$n->img ?>')"></div>
                        </div>
                        <div class="col-8" style="height:180px;overflow:hidden">
                            <p><b><?= $n->name ?></b></p>
                            <p><?= $n->description ?></p>
                        </div>
                    </div>
                </a>
                <hr>
            </div>
            <?php endif; endforeach; ?>
        </div>
    </div>
</div>