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

        $('.single-slots-demo-back-play').on('click', function() {
          $('.single-slots-demo-back').removeClass('play');
          $('.single-slots-demo-block').addClass('play');
		    });
        
        document.querySelector('.full-btn').addEventListener('click', function(){
          if(document.documentElement.webkitRequestFullscreen) {
            document.querySelector('.demo-iframe').webkitRequestFullscreen();
          }
          else{
            document.documentElement.mozRequestFullScreen();
          }
        });

      });
    </script>
  </body>
</html>