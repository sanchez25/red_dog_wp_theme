<?php
/*Template Name: Main*/
?>

<?php get_header()?>

  <section class="main-bammer">
    <div class="main-bammer-block">
      <div class="main-bammer-img">
        <img width="1920" height="878" src="<?php echo get_template_directory_uri() ?>/images/main-banner.jpg" alt="50 Spins on Asgard Deluxe">
      </div>
      <div class="main-bammer-promo">
        <span class="slider-content-title">240% </span>
        <span href="go/reg" class="slider-content-subtitle">+ 40 FS</span>
        <span href="go/reg" class="slider-content-subtitle">on Enchanted Garden 2</span>
        <a class="button-slider" href="go/reg" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/button-icon.png)">Sign Up</a>
      </div>
    </div>
  </section>
  <section class="winners">
    <div class="container">
      <div class="winntes-block">
        <div class="winntes-block-left">
          <span class="winntes-block-title">winners</span>
          <div class="slick-slider">
            <div class="slick-slider-item">
              <p>Dolly A. wins <span>$280</span> on <span>Scuba Fishing</span> slots</p>
              <a href="go/reg" class="winners-play">Play now</a>
            </div>
            <div class="slick-slider-item">
              <p>Frances T. wins <span>$113</span> on <span>Stardust</span> slots</p>
              <a href="go/reg" class="winners-play">Play now</a>
            </div>
            <div class="slick-slider-item">
              <p>Borat A. wins <span>$275</span> on <span>Scuba Fishing</span> slots</p>
              <a href="go/reg" class="winners-play">Play now</a>
            </div>
            <div class="slick-slider-item">
              <p>Barry N. wins <span>$322</span> on <span>Ancient Gods</span> slots</p>
              <a href="go/reg" class="winners-play">Play now</a>
            </div>
            <div class="slick-slider-item">
              <p>Wanda Z. wins <span>$60</span> on <span>Count Spectacular</span> slots</p>
              <a href="go/reg" class="winners-play">Play now</a>
            </div>
          </div>
        </div>
        <div class="winntes-block-right">
          <span class="winntes-block-title">jackpots</span>
          <span class="jackpot-block-sum"> 
            $ 
            <div class="big-jackots"></div>
          </span>
        </div>
      </div>
    </div>
  </section>
  <section class="slots">
    <div class="container">
      <div class="slots-block">
        <div class="slots-tabs">
          <a href="go/reg" class="slots-tabs-item active">latest</a>
          <a href="go/reg" class="slots-tabs-item">popular</a>
          <a href="go/reg" class="slots-tabs-item">slots</a>
          <a href="go/reg" class="slots-tabs-item">poker</a>
          <a href="go/reg" class="slots-tabs-item">table</a>
          <a href="go/reg" class="slots-tabs-item">specialties</a>
        </div>
        <div class="slots-search">
          <input type="text" placeholder="Search..." class="input-search">
          <a href="go/reg" aria-label="Search" class="slots-search-btn">
            <div class="slots-search-btn-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/search.svg);"></div>
          </a>
        </div>
      </div>
    </div>
    <div class="slots-slider">
      <div id="owl-slider" class="owl-carousel owl-theme">
        <?php
          if ($items = get_posts(array('numberposts' => 6, 'post_type' => 'Slots'))) {
            foreach($items as $item) {
              echo '<div class="slider-item">';
                echo get_the_post_thumbnail($item->ID);
                echo '<div class="slider-back">';
                  echo '<a href="'.get_permalink($item->ID).'" class="slider-btn demo">Practice</a>';
                  echo '<a href="go/reg" class="slider-btn play">Play now</a>';
                  echo '<span class="slider-title">'.$item->post_title.'</span>';
                  echo '<span class="slider-subtitle">Latest</span>';
                echo '</div>';
              echo '</div>';
            }
          }
        ?>
      </div>
    </div>
    <div class="container">
      <div class="games-block-button">
        <a href="/slots/" class="button-slider all" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/button-icon.png)">All games</a>
      </div>
    </div>
  </section>
  <section class="new-block">
    <div id="owl-new" class="owl-carousel owl-theme">
      <div class="slide-new">
        <div class="new-slider-item" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/welcome-slide.png);"></div>
        <div class="container">
          <div class="new-slide-content">
            <div class="new-slide-left">
              <img src="<?php echo get_template_directory_uri() ?>/images/welcome-slide.png" width="386" height="380" alt="Welcome Bonus">
            </div>
            <div class="new-slide-right">
              <span class="new-slide-title">Welcome Bonus</span>
              <p class="new-slide-promo">Red welcomes you to his own casino venue and offers you a hefty 225% reward!</p>
              <a href="go/reg" class="new-slide-btn">Read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="slide-new">
        <div class="new-slider-item" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/new-game-slide.png);"></div>
        <div class="container">
          <div class="new-slide-content">
            <div class="new-slide-left">
              <img src="<?php echo get_template_directory_uri() ?>/images/new-game-slide.png" width="388" height="380" alt="New game">
            </div>
            <div class="new-slide-right">
              <span class="new-slide-title">New game</span>
              <p class="new-slide-promo">Geri and Freki are here with gifts for Red's friends, right from the chilly North!</p>
              <a href="go/reg" class="new-slide-btn">Read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="slide-new">
        <div class="new-slider-item" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/new-game-slide.png);"></div>
        <div class="container">
          <div class="new-slide-content">
            <div class="new-slide-left">
              <img src="<?php echo get_template_directory_uri() ?>/images/247-bonus-slide.png" width="380" height="380" alt="24/7 Bonus">
            </div>
            <div class="new-slide-right">
              <span class="new-slide-title">24/7 Bonus</span>
              <p class="new-slide-promo">As much as I deserve a pat on the back, you deserve to have fun. Make the most of it by using my offers up to 160%! Ruff!</p>
              <a href="go/reg" class="new-slide-btn">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="numbers-block">
    <div class="container">
      <div class="numbers-block-content">
        <div class="numbers-block-item">
          <span class="numbers-block-item-title">1338</span>
          <span class="numbers-block-item-desc">Players online</span>
        </div>
        <div class="numbers-block-item">
          <span class="numbers-block-item-title">98%</span>
          <span class="numbers-block-item-desc">Of winners</span>
        </div>
        <div class="numbers-block-item">
          <span class="numbers-block-item-title">34</span>
          <span class="numbers-block-item-desc">Bonuses</span>
        </div>
      </div>
    </div>
  </section>
  <section class="phone-block">
    <div class="container">
      <span class="phone-block-title">Play from Any Device</span>
      <p class="phone-block-descr">
        Do dogs like mobile devices? I’ve undertaken some research on that topic and found
        out that we do! I, for one, can swipe on four gadgets at the same time with my four cute red paws. And I
        still have my wet cold nose free! I bet you can enjoy portable devices too, my hooman friend, and so
        I’ve made my casino fully mobile compatible! Grab your Android, iPhone or whatever you have, and let’s play! 
      </p> 
      <div id="trigger"></div>
      <div class="phone-iframe" id="phone">
        <img src="<?php echo get_template_directory_uri() ?>/images/phone.png" class="phone-iframe-img" width="330" height="664" alt="Phone">
        <div class="phone-iframe-view">
          <div class="phone-iframe-view-content" id="video" style="transform: scale(0.5, 0.5);">
            <video preload="auto" autoplay="true" loop="true" muted="muted" class="video">
              <source src="<?php echo get_template_directory_uri() ?>/images/red-dog-video.mp4" type="video/mp4">
            </video>
          </div>
          <div style="background-image: url(<?php echo get_template_directory_uri() ?>/images/phone-back.jpg);" id="img" class="phone-iframe-img-back"></div>
        </div>
      </div>
      <a href="go/reg" id="btn-phone" class="new-slide-btn more-btn" style="transform: translate(0px, -300px); opacity: 0;">Read more</a>
    </div>
  </section>
  <section class="advantages-block">
    <div class="container">
      <div class="advantages-content">
        <a href="go/reg" class="advantages-content-item">
          <img src="<?php echo get_template_directory_uri() ?>/images/advantage-daily.svg" width="77" height="60" alt="Daily Bones">
          <span class="advantage-icon-title">Daily Bones</span>
          <div class="dvantage-icon-desc">
            As a co-owner of the casino, Red is completely absorbed in his work, and he doesn’t even have a minute to spare! 
            But when he hears that a player wants to be perfectly entertained, you can bet he will drop everything and rush to 
            them with a great daily bonus!
          </div>
        </a>
        <a href="go/reg" class="advantages-content-item">
          <img src="<?php echo get_template_directory_uri() ?>/images/advantage-games.svg" width="60" height="60" alt="Games From Red">
          <span class="advantage-icon-title">Games From Red</span>
          <div class="dvantage-icon-desc">
            Red has spent days and nights looking for the software developer that would meet your needs. So far, he’s managed to dig 
            out the best of Real Time Gaming. But his search is still going on, and new titles monthly appear on the website. 
            What a hardworking little doggie Red is, huh?
          </div>
        </a>
        <a href="go/reg" class="advantages-content-item">
          <img src="<?php echo get_template_directory_uri() ?>/images/advantage-support.svg" width="63" height="60" alt="24/7 Assistances">
          <span class="advantage-icon-title">24/7 Assistance</span>
          <div class="dvantage-icon-desc">
            Customer agents at Red Dog are constantly monitored by Red and his associates. They make sure you receive quality assistance 
            around the clock via email, live chat, and phone.
          </div>
        </a>
        <a href="go/reg" class="advantages-content-item">
          <img src="<?php echo get_template_directory_uri() ?>/images/advantage-pay.svg" width="60" height="60" alt="Fast Payments">
          <span class="advantage-icon-title">Fast Payments</span>
          <div class="dvantage-icon-desc">
            Red loves it when you win and hates it when you have to wait for a long time to withdraw your money. 
            So, he has created a unique modern system which makes your payouts fast and secure.
          </div>
        </a>
      </div>
    </div>
  </section>
  <section class="main-text">
    <div class="container">
      <div class="main-text-block">
        <?php echo the_content(); ?>
      </div>
    </div>
  </section>
  <section class="last-block">
    <div class="last-block-content">
      <span class="last-block-content-title"><span>Register now</span> and grab some bonuses!</span>
      <div class="last-btn-block">
        <a href="go/reg" class="last-block-btn" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/button-back.svg);">Register</a>
        <div class="arrow" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/arrow.svg);"></div>
      </div>
    </div>
  </section>

<?php get_footer()?>