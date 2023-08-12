<?php
/* Template Name: Post slots */
 /* Template Post Type: Slots */
?>


<?php get_header()?>

<section class="single-slot">
    <div class="container">
        <h1 class="single-slots-title"><?php the_title(); ?> Slot Machine</h1>
        <div class="single-slots-demo-back play">
            <div class="single-slots-demo-back-cont">
                <div class="single-slots-demo-back-image">
                    <img src="<?php echo get_field('image'); ?>" alt="<?php echo get_field('alt'); ?>">
                </div>
            </div>
            <div class="single-slots-demo-back-play" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/play.svg);"></div>
        </div>
        <div class="single-slots-demo-block">
            <div class="single-slots-demo-back-cont">
                <div class="single-slots-demo-back-iframe">
                    <div class="full-btn">
                        <div class="full-btn-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/full-screen.svg);"></div>
                    </div>
                    <?php echo get_field('iframe');?>
                </div>
            </div>
        </div>
        <div class="single-slot-button">
            <a href="go/reg" class="play-real-btn">Play for real</a>
        </div>
        <div class="page-block-text slot">
            <?php echo the_content(); ?>
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

<?php get_footer('slots')?>

