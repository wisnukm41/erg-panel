<link rel="stylesheet" href="<?= base_url('assets/style/news.css') ?>">
<section class="news-catalogue">
	<div class="container">
		<div class="row mb-3">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<h3>Berita</h3>
					</div>
					<?php foreach ($news as $news): ?>
					<div class="card-body">
						<div class="row">
							<div class="col-4 ">
								<div class="news-img"
									style="background-image: url('<?= base_url('assets/uploads/news/').$news->img?>')">
								</div>
								<!-- <img src=>" alt="check" class="img-fluid img-thumbnail"> -->
							</div>
							<div class="col-8">
								<a href="<?= base_url('news/').$news->slug ?>" style="color:black;text-decoration:none">
									<h5><?php echo $news->name?></h5>
								</a>
								<small>Posted on <?php echo $news->date ?></small>
								<p><?php echo substr($news->description,0,100) ?>...</p>
							</div>
							<hr>
						</div>
					</div>
					<?php endforeach; ?>
					<div class="ml-auto mr-auto">
						<?= $page ?>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
					<div class="card-header">
						<h3>Media Sosial</h3>
					</div>
					<blockquote class="instagram-media" data-instgrm-version="2"
						style=" background:#000000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
						<div style="padding:8px;">
							<div
								style=" background:#000000; line-height:0; margin-top:40px; padding-bottom:55%; padding-top:45%; text-align:center; width:100%;">
								<div style="position:relative;">
									<div
										style=" -webkit-animation:dkaXkpbBxI 1s ease-out infinite; animation:dkaXkpbBxI 1s ease-out infinite; background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-44px; width:44px;">
									</div><span
										style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:12px; font-style:normal; font-weight:bold; position:relative; top:15px;">Loading</span>
								</div>
							</div>
							<p
								style=" line-height:32px; margin-bottom:0; margin-top:8px; padding:0; text-align:center;">
								<a href="https://instagram.com/p/B4B8PolFQV8/"
									style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; text-decoration:none;"
									target="_top"> View on Instagram</a></p>
						</div>
						<style>
							@-webkit-keyframes"dkaXkpbBxI" {
								0% {
									opacity: 0.5;
								}

								50% {
									opacity: 1;
								}

								100% {
									opacity: 0.5;
								}
							}

							@keyframes"dkaXkpbBxI" {
								0% {
									opacity: 0.5;
								}

								50% {
									opacity: 1;
								}

								100% {
									opacity: 0.5;
								}
							}

						</style>
					</blockquote>
					<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
				</div>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4>Artikel Penulis</h4>
					</div>
					<div class="card-body">
						<div id="medium-widget"></div>
						<script src="https://medium-widget.pixelpoint.io/widget.js"></script>
						<script>
							MediumWidget.Init({
								renderTo: '#medium-widget',
								params: {
									"resource": "https://medium.com/ergunikom",
									"postsPerLine": 3,
									"limit": 2,
									"picture": "small",
									"fields": ["description", "author", "claps", "likes", "publishAt"],
									"ratio": "square"
								}
							})

						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="<?= base_url('assets/script/news.js') ?>"></script>
