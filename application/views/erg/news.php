<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>News</h3>
        </div>
        <?php foreach ($news as $news): ?>
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <img src="<?php echo base_url('assets/uploads/news/').$news->img?>" alt="check" class="img-fluid img-thumbnail">
                </div>
                <div class="col-8">
                    <a href="#" style="color:black"><h3><?php echo $news->name?></h3></a>
                    <small>Posted on <?php echo $news->date ?></small>
                    <p><?php echo substr($news->description,0,500) ?>...</p>
                    <a href="#" class="btn btn-secondary float-right mr-3 mb-2">Read more</a>
                </div>
                <hr>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>