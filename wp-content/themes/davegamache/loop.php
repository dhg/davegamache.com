<!-- <div class="background-image">
  <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2011/art-list-bg-3.jpg" alt="">
</div> -->
<nav class="art-list">
  <h2 class="art-list-section-title">Articles</h2>
  <h5 class="art-list-section-subtitle">Long form writing</h5>
  <ul>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php
        $category = get_the_category();
        $category =  $category[0]->cat_name;
        $summary = get_post_meta($post->ID, 'summary');
        $summary = $summary[0];
      ?>
      <?php if($category == "article"){ ?>
        <li class="art-list-item">
          <div class="art-list-time">July 30, 1988</div>
          <h2 class="art-list-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <p><?php echo $summary; ?></p>
          </a>
        </li>
      <?php } ?>
    <?php endwhile; ?>
  </ul>
  <h2 class="art-list-section-title">Thoughts</h2>
  <h5 class="art-list-section-subtitle">Short and sweet</h5>
  <ul>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php
        $category = get_the_category();
        $category =  $category[0]->cat_name;
        $summary = get_post_meta($post->ID, 'summary');
        $summary = $summary[0];
      ?>
      <?php if($category == "simple"){ ?>
        <li class="art-list-item">
          <div class="art-list-time">July 30, 1988</div>
          <h2 class="art-list-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <p><?php echo $summary; ?></p>
          </a>
        </li>
      <?php } ?>
    <?php endwhile; ?>
  </ul>
</nav>