    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-3.4.0.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/public.js') ?>"></script>
    <script>
    $(document).ready(function() {
        $("nav").find("a").click(function(e) {
            e.preventDefault();
            var section = $(this).attr("href");
            $("html, body").animate({
                scrollTop: $(section).offset().top
            });
        });
        $("#footer-link").find("a").click(function(e) {
            e.preventDefault();
            var section = $(this).attr("href");
            $("html, body").animate({
                scrollTop: $(section).offset().top
            });
        });
    });
    </script>
    <script>
    $(function() {
        var header = $(".navbar");
    
        $(window).scroll(function() {    
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
    $(function() {
        $('#research-web').hide();
        $('#research-mobile').hide();
        $('#research-desktop').hide();
        $('#research-embedded').hide();
      
        $('#research-iot').show("slow");
        $('#iot-research').addClass('bg-research-active');
    });
    $('#iot-research').click(function(e) {
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

    $('#embedded-research').click(function(e) {
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

    $('#desktop-research').click(function(e) {
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

    $('#mobile-research').click(function(e) {
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

    $('#web-research').click(function(e) {
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
      $('body').on('click','.show-content',function (e) {
        e.preventDefault();
        $(this).parent().next().slideToggle();
      });
    });
    </script>
  </body>
</html>