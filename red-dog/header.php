<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Reindeer.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Segoe.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
</head>
<body>
    <header class="header-block">
      <div class="menu-mobile-button">
        <div class="menu-mobile-burger">
          <span class="menu-mobile-button-icon"></span>
          <span class="menu-mobile-button-icon"></span>
          <span class="menu-mobile-button-icon"></span>
        </div>
        <span>menu</span>
      </div>
      <div class="header-content">
        <div class="header-logo">
          <a href="/">
            <img width="165" height="43" src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="Logo">
          </a>
        </div>
        <div class="header-buttons">
          <a class="btn reg" href="go/reg" aria-label="Sign Up">
            <div class="btn-icon reg" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/sign-up.svg);"></div>
            <span>Sign Up</span>
          </a>
          <a class="btn log" href="go/reg" aria-label="Sign In">
            <div class="btn-icon log" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/sign-in.svg);"></div>
            <span>Sign In</span>
          </a>
          <div class="btn games">
            <div class="btn-games">
              <div class="btn-games-block">
                <a href="#games" class="btn-games-link">
                  <span>games</span>
                  <div class="btn-games-link-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/down.svg);"></div>
                </a>
              </div>
              <div id="games">
                <div class="games-content">
                  <div class="games-content-item">
                    <div class="games-content-item-wrap">
                      <div class="games-content-item-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/games/paydirt-game.jpg);"></div>
                      <span class="games-content-item-title">Paydirt</span>
                      <a href="go/reg" class="games-content-item-link">play</a>
                    </div>
                  </div>
                  <div class="games-content-item">
                    <div class="games-content-item-wrap">
                      <div class="games-content-item-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/games/popinata-game.jpg);"></div>
                      <span class="games-content-item-title">Popinata</span>
                      <a href="go/reg" class="games-content-item-link">play</a>
                    </div>
                  </div>
                  <div class="games-content-item">
                    <div class="games-content-item-wrap">
                      <div class="games-content-item-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/games/achilles-game.jpg);"></div>
                      <span class="games-content-item-title">Achilles</span>
                      <a href="go/reg" class="games-content-item-link">play</a>
                    </div>
                  </div>
                  <div class="games-content-item">
                    <div class="games-content-item-wrap">
                      <div class="games-content-item-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/games/ancient-gods-game.jpg);"></div>
                      <span class="games-content-item-title">Ancient Gods</span>
                      <a href="go/reg" class="games-content-item-link">play</a>
                    </div>
                  </div>
                  <div class="games-content-item">
                    <div class="games-content-item-wrap">
                      <div class="games-content-item-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/games/asgard-game.jpg);"></div>
                      <span class="games-content-item-title">Asgard</span>
                      <a href="go/reg" class="games-content-item-link">play</a>
                    </div>
                  </div>
                  <div class="games-content-item">
                    <div class="games-content-item-wrap">
                      <div class="games-content-item-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/games/bubble-bubble-game.jpg);"></div>
                      <span class="games-content-item-title">Bubble Bubble</span>
                      <a href="go/reg" class="games-content-item-link">play</a>
                    </div>
                  </div>
                  <div class="games-content-item">
                    <div class="games-content-item-wrap">
                      <div class="games-content-item-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/games/caesars-empire-game.jpg);"></div>
                      <span class="games-content-item-title">Caesar’s Empire</span>
                      <a href="go/reg" class="games-content-item-link">play</a>
                    </div>
                  </div>
                  <a href="go/reg" class="btn-all-games">All games</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

