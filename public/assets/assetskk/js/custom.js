     //SmothSchrol
     
        $(function () {
        $(".scroll").on("click", function (event) {
          var $anchor = $(this);
          $("html, body")
            .stop()
            .animate(
              {
                scrollTop: $($anchor.attr("href")).offset().top - 0,
              },
              1000
            );
          event.preventDefault();
        });
      });

      $(function () {
        $(".top").on("click", function (event) {
          $("html, body")
            .stop()
            .animate(
              {
                scrollTop: 0,
              },
              1000
            );
          event.preventDefault();
        });
      });

      
      $('.testimoni-slider').owlCarousel({
        autoplay:false,
          loop:true,
          margin:5,
          nav:true,
          dots:true,
          items:1,
      });

      $('.slide-client').owlCarousel({
        autoplay:false,
        margin:10,
        smartSpeed: 100,
        nav: true,
        dots: false,
        responsive:{
          0:{
            items:3
          },
          1000:{
            items:5
          }
        }
      });

          var cb = $('.owl-carousel');
          cb.owlCarousel({
              margin: 20,
              animateOut: 'fadeOut',
              animateIn: 'fadeIn',
              items: 1,
              loop: true,
              nav:true,
          });

          $('#tentang-kami').on("mouseenter", function(e) {
                cb.trigger('play.owl.autoplay', [4500]);
            });

            $('#promo').on("mouseenter", function(e) {
                cb.trigger('play.owl.autoplay', [4500]);
            });

            
      $('#floating-button').click(function(){
        $(this).closest('#container-floating').toggleClass('is-opened');
        $('.nds').removeClass('is-opened');
        $('.sdn').removeClass('is-opened');
        $('body').toggleClass('is-blur');
      });
      
      

