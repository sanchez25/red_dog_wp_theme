<?php 

 /* Template Post Type: post */

get_header(); ?>

  <section class="page-block">
    <div class="container">
      <div class="page-title">
        <h1 class="page-title-h1"><?php the_title(); ?></h1>
      </div>
      <div class="page-block-text">
        <?php
          echo the_content(); 
        ?>
      </div>
    </div>
  </section>
  <section class="last-block page">
    <div class="last-block-content">
      <span class="last-block-content-title"><span>Register now</span> and grab some bonuses!</span>
      <div class="last-btn-block">
        <a href="go/reg" class="last-block-btn" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/button-back.svg);">Register</a>
        <div class="arrow" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/arrow.svg);"></div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
