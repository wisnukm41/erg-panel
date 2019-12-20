<section id="footer" class="content-footer">
	<div class="container">
		<div class="row mb-5">
			<div class="col-lg-12">
				<div class="text-center">
					<img class="img-logo-footer" src="<?= base_url('assets/public/erg-logo-white.png') ?>"
						alt="ERG Logo">
				</div>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-lg-6">
				<div class="row mb-4">
					<div class="col-lg-12">
						<h3 class="text-center">LINKS</h3>
					</div>
				</div>
				<div id="footer-link" class="row text-center d-flex justify-content-center mb-3 footer-menu">
					<div class="col-4 mb-3">
						<span class="text-uppercase font-weight-bold">
							<a class="text-light text-decoration-none" href="<?= site_url('')?>">Utama</a>
						</span>
					</div>
					<div class="col-4 mb-3">
						<span class="text-uppercase font-weight-bold">
							<a class="text-light text-decoration-none" href="#news">Berita</a>
						</span>
					</div>
					<div class="col-4 mb-3">
						<span class="text-uppercase font-weight-bold">
							<a class="text-light text-decoration-none" href="https://www.unikom.ac.id">UNIKOM</a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-lg-6" style="border-left: 1px solid #0b387c">
				<div class="row mb-3">
					<div class="col-lg-12">
						<h3 class="text-center">Follow Up</h3>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-3">
						<a href="https://www.facebook.com/divisiergunikom">
							<div class="row">
								<div class="col-lg-12">
									<div class="bg-follow">
										<img class="img-research" src="<?= base_url('assets/public/facebook.png') ?>"
											alt="Designer" width="100%">
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="https://www.instagram.com/ergunikom_">
							<div class="row">
								<div class="col-lg-12">
									<div class="bg-follow">
										<img class="img-research" src="<?= base_url('assets/public/instagram.png') ?>"
											alt="Designer" width="100%">
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="https://www.youtube.com/channel/UCSAT6XES3dH19wegALq7-EQ">
							<div class="row">
								<div class="col-lg-12">
									<div class="bg-follow">
										<img class="img-research" src="<?= base_url('assets/public/youtube.png') ?>"
											alt="Designer" width="100%">
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="mailto:ergunikom.official@gmail.com">
							<div class="row">
								<div class="col-lg-12">
									<div class="bg-follow">
										<img class="img-research" src="<?= base_url('assets/public/email.png') ?>"
											alt="Designer" width="100%">
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<p class="text-center">Ruang ERG, 4503 (Gdg Miracle), Jalan Dipatiukur No. 112-116, Coblong,
							Lebakgede, Bandung, Kota Bandung, Jawa Barat 40132</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center font-italic">
					<p>ERG adalah divisi yang bergerak di bidang riset & teknologi. Kami membuat banyak produk untuk
						membantu masyarakan, mengikuti kompetisi di bidang teknologi, menyebarkan pengetahuan tentang
						pengembangan teknologi, bekerja dengan banyak lembaga untuk membangun produk ber-teknologi</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="footbar" class="content-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center">
					<span>Crafted By ERG | Web Team</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url('assets/js/jquery-3.4.0.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="<?= base_url('assets/js/public.js') ?>"></script>
<script>
	$(document).ready(function () {
		$("nav").find("a").click(function (e) {
			e.preventDefault();
			var section = $(this).attr("href");
			$("html, body").animate({
				scrollTop: $(section).offset().top
			});
		});
		$("#footer-link").find("a").click(function (e) {
			e.preventDefault();
			var section = $(this).attr("href");
			$("html, body").animate({
				scrollTop: $(section).offset().top
			});
		});
	});

</script>
<script>
	$(function () {
		var header = $(".navbar");

		$(window).scroll(function () {
			var scroll = $(window).scrollTop();
			if (scroll >= 50) {
				header.addClass("scrolled");
			} else {
				header.removeClass("scrolled");
			}
		});

	});

</script>
<script>
	$(function () {
		$('#research-web').hide();
		$('#research-mobile').hide();
		$('#research-desktop').hide();
		$('#research-embedded').hide();

		$('#research-iot').show("slow");
		$('#iot-research').addClass('bg-research-active');
	});
	$('#iot-research').click(function (e) {
		$('#research-web').hide("slow");
		$('#research-mobile').hide("slow");
		$('#research-desktop').hide("slow");
		$('#research-embedded').hide("slow");

		$('#web-research').removeClass('bg-research-active');
		$('#mobile-research').removeClass('bg-research-active');
		$('#desktop-research').removeClass('bg-research-active');
		$('#embedded-research').removeClass('bg-research-active');

		$('#research-iot').show("slow");
		$(this).addClass('bg-research-active');
	});

	$('#embedded-research').click(function (e) {
		$('#research-web').hide("slow");
		$('#research-mobile').hide("slow");
		$('#research-desktop').hide("slow");
		$('#research-iot').hide("slow");

		$('#web-research').removeClass('bg-research-active');
		$('#mobile-research').removeClass('bg-research-active');
		$('#desktop-research').removeClass('bg-research-active');
		$('#iot-research').removeClass('bg-research-active');

		$('#research-embedded').show("slow");
		$(this).addClass('bg-research-active');
	});

	$('#desktop-research').click(function (e) {
		$('#research-web').hide("slow");
		$('#research-mobile').hide("slow");
		$('#research-embedded').hide("slow");
		$('#research-iot').hide("slow");

		$('#web-research').removeClass('bg-research-active');
		$('#mobile-research').removeClass('bg-research-active');
		$('#embedded-research').removeClass('bg-research-active');
		$('#iot-research').removeClass('bg-research-active');

		$('#research-desktop').show("slow");
		$(this).addClass('bg-research-active');
	});

	$('#mobile-research').click(function (e) {
		$('#research-web').hide("slow");
		$('#research-desktop').hide("slow");
		$('#research-embedded').hide("slow");
		$('#research-iot').hide("slow");

		$('#web-research').removeClass('bg-research-active');
		$('#desktop-research').removeClass('bg-research-active');
		$('#embedded-research').removeClass('bg-research-active');
		$('#iot-research').removeClass('bg-research-active');

		$('#research-mobile').show("slow");
		$(this).addClass('bg-research-active');
	});

	$('#web-research').click(function (e) {
		$('#research-mobile').hide("slow");
		$('#research-desktop').hide("slow");
		$('#research-embedded').hide("slow");
		$('#research-iot').hide("slow");

		$('#mobile-research').removeClass('bg-research-active');
		$('#desktop-research').removeClass('bg-research-active');
		$('#embedded-research').removeClass('bg-research-active');
		$('#iot-research').removeClass('bg-research-active');

		$('#research-web').show("slow");
		$(this).addClass('bg-research-active');
	});

</script>
<script>
	$(function () {
		$('body').on('click', '.show-content', function (e) {
			e.preventDefault();
			$(this).parent().next().slideToggle();
		});
	});

</script>
</body>

</html>
