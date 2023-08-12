<?php get_header('error'); ?>

  <div class="error-block">
    <div class="error-block-left">
      <h1>404</h1>
      <h2>Oops, you look lost</h2>
      <p>
        Have you been chasing your treats so hard that you ran too far? Oh boy, it happens to me all the time!
        No worries! Get back to where you left off in a couple of clicks. So many rewarding games are waiting
        for your attention out there!
      </p>
      <div class="error-block-buttons">
        <a href="go/reg">Promotions</a>
        <a href="/">Main page</a>
      </div>
    </div>
    <div class="error-block-right" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/error-back.jpg);"></div>
  </div>

<?php get_footer('error'); ?>
