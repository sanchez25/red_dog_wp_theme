    <footer class="footer">
      <div class="container">
        <div class="footer-logo">
          <img width="96" height="95" src="<?php echo get_template_directory_uri() ?>/images/logo-footer.svg" alt="Logo">
        </div>
        <div class="footer-pay">
          <img width="54" height="17" src="<?php echo get_template_directory_uri() ?>/images/pays/visa-pay.png" alt="Visa">
          <img width="108" height="23" src="<?php echo get_template_directory_uri() ?>/images/pays/bitcoin.png" alt="Bitcoin">
          <img width="57" height="34" src="<?php echo get_template_directory_uri() ?>/images/pays/master-card.png" alt="Master Card">
          <img width="123" height="22" src="<?php echo get_template_directory_uri() ?>/images/pays/real-time.png" alt="Real Time">
          <img width="100" height="29" src="<?php echo get_template_directory_uri() ?>/images/pays/ssl-secured.png" alt="SSL Secured">
          <img width="157" height="40" src="<?php echo get_template_directory_uri() ?>/images/pays/cds-pay.png" alt="CDS">
          <img width="183" height="60" src="<?php echo get_template_directory_uri() ?>/images/pays/curacao.png" alt="Curacao">
        </div>
        <div class="footer-menu">
          <div class="footer-menu-item">
            <a href="go/reg" class="footer-menu-item-link">Terms</a>
          </div>
          <div class="footer-menu-item">
            <a href="go/reg" class="footer-menu-item-link">Privacy Policy</a>
          </div>
          <div class="footer-menu-item">
            <a href="go/reg" class="footer-menu-item-link">Responsible Gaming</a>
          </div>
          <div class="footer-menu-item">
            <a href="go/reg" class="footer-menu-item-link">Security</a>
          </div>
          <div class="footer-menu-item">
            <a href="go/reg" class="footer-menu-item-link">Affiliate Program</a>
          </div>
          <div class="footer-menu-item">
            <a href="go/reg" class="footer-menu-item-link">Sitemap</a>
          </div>
          <div class="footer-menu-item">
            <a href="go/reg" class="footer-menu-item-link">Download</a>
          </div>
          <div class="footer-menu-item">
            <a href="go/reg" class="footer-menu-item-link">RTP</a>
          </div>
          <div class="footer-menu-item">
            <a href="go/reg" class="footer-menu-item-link">AML Policy</a>
          </div>
          <div class="footer-menu-item">
            <a href="go/reg" class="footer-menu-item-link">KYC Policy</a>
          </div>
          <div class="footer-menu-item">
            <a href="go/reg" class="footer-menu-item-link">GDPR Policy</a>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <span>© Red Dog Casino, 2021. All Rights Reserved.</span>
      </div>
    </footer>
    <div class="modal">
      <div class="mobile-menu">
        <div class="mobile-head-btn">
          <div class="mobile-head-btn-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/close.svg);"></div>
          <span>Menu</span>
        </div>
        <div class="mobile-menu-nav">
          <div class="mobile-menu-nav-item">
            <a href="go/reg" class="mobile-menu-nav-link">
              <span class="header-content-list-text">Promotions</span>
            </a>
          </div>
          <div class="mobile-menu-nav-item">
            <a href="go/reg" class="mobile-menu-nav-link">
              <span class="header-content-list-text">games</span>
            </a>
          </div>
          <div class="mobile-menu-nav-item">
            <a href="go/reg" class="mobile-menu-nav-link">
              <span class="header-content-list-text">about us</span>
            </a>
          </div>
          <div class="mobile-menu-nav-item">
            <a href="go/reg" class="mobile-menu-nav-link">
              <span class="header-content-list-text">banking</span>
            </a>
          </div>
          <div class="mobile-menu-nav-item">
            <a href="go/reg" class="mobile-menu-nav-link">
              <span class="header-content-list-text">faq</span>
            </a>
          </div>
          <div class="mobile-menu-nav-item">
            <a href="go/reg" class="mobile-menu-nav-link">
              <span class="header-content-list-text">contact us</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/scroll.js"></script>
    <script>
      jQuery(document).ready(function ($) {

        $("#owl-slider").owlCarousel ({
            navigation: true,
            dots: false,
            nav: true,
            navText: ["<img class='arrow-prev' src='<?php echo get_template_directory_uri() ?>/images/arrow-left.svg' width='20' height='34' decoding='async' alt='Arrow prev'>", "<img class=' arrow-next' src='<?php echo get_template_directory_uri() ?>/images/arrow-right.svg' width='20' height='34' decoding='async' alt='Arrow next'>"],
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 4, 
            animateOut: false, 
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            loop: true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            responsive: {
              0: {
                  items: 1,
              },
              868: {
                  items: 2,
              },
              1300: {
                  items: 3,
              },
              1718: {
                  items: 4,
              }
            }
        });

        $("#owl-new").owlCarousel ({
            navigation: true,
            dots: false,
            nav: false,
            animateOut: 'fadeOut',
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 1, 
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            loop: true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false
        });

        $(".slick-slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            vertical: true,
            autoplay: true,
            autoplaySpeed: 3000,
            verticalSwiping: true
        });

        $('.menu-mobile-button').on('click', function() {
  			  $('.mobile-menu').toggleClass('active');
          return false;
		    });

        $('.menu-mobile-button').on('click', function() {
  			  $('.modal').toggleClass('active');
          return false;
		    });

        $('.modal').on('click', function() {
  			  $('.mobile-menu').removeClass('active');
          $('.menu-mobile-button').removeClass('active');
          $(this).removeClass('active');
		    });

        $('.menu-mobile-button').on('click', function() {
          $(this).toggleClass('active');
          return false;
		    });

        $(".btn-games-block").click(function () {
						$("#games").slideToggle(300);
						return false;
        });

        var jack = 1053646.751; 
        var timer = setInterval(function () {
            jack += 0.21; 
            $(".big-jackots").text(numeral(jack).format('0 0[.]00'));
        }, 5000);

      });
    </script>
  </body>
</html>