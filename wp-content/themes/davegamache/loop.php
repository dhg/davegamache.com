<!-- <div class="background-image">
  <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2011/art-list-bg-3.jpg" alt="">
</div> -->
<nav class="art-list">
  <ul class="art-list-articles">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php
        $category = get_the_category();
        $category =  $category[0]->cat_name;
        $summary = get_post_meta($post->ID, 'summary');
        $summary = $summary[0];
      ?>
        <li class="art-list-item <?php if($category == "article"){ echo "is-full-article"; }?>">
          <div class="art-list-time"><?php the_time('F jS, Y') ?></div>
          <h2 class="art-list-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span class="full-article">Full Article</span>
          </h2>
          <p><?php echo $summary; ?></p>
          </a>
        </li>
    <?php endwhile; ?>
  </ul>
</nav>