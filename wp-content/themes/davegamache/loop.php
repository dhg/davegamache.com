<!-- <div class="background-image">
  <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2011/art-list-bg-3.jpg" alt="">
</div> -->
<nav class="art-list">
  <ul>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php
        $category = get_the_category();
        $category =  $category[0]->cat_name;
      ?>
      <li>
        <a href="<?php the_permalink(); ?>" <?php if($category == "simple"){ ?> class='simple'<?php } ?>>
          <h2 class="art-list-title"><?php the_title(); ?></h2>
          <div class="art-list-subtitle"><?php the_subtitle(); ?></div>
        </a>
      </li>
    <?php endwhile; ?>
  </ul>
</nav>