<?php
/*Template Name: Slots*/
?>

<?php get_header()?>
  
  <section class="page-block">
    <div class="container">
      <div class="page-title">
        <h1 class="page-title-h1"><?php the_title(); ?></h1>
      </div>
      <div class="slots-block page">
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
      <?php
        if ($items = get_posts(array('numberposts' => 100, 'post_type' => 'Slots'))) {
          echo '<div class="page-slots">';
            foreach($items as $item) {
              echo '<div class="page-slider-item">';
                echo '<div class="slider-item">';
                  echo get_the_post_thumbnail($item->ID);
                  echo '<div class="slider-back">';
                    echo '<a href="'.get_permalink($item->ID).'" class="slider-btn demo page">Practice</a>';
                    echo '<a href="go/reg" class="slider-btn play page">Play now</a>';
                    echo '<span class="slider-title">'.$item->post_title.'</span>';
                    echo '<span class="slider-subtitle">Slots</span>';
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            }
          echo '</div>';
        }
      ?>
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

<?php get_footer()?>