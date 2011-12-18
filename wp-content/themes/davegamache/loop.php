<nav class="art-list">
  <ul class="art-list-body">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php
        $summary = get_post_meta($post->ID, 'summary');
        $summary = $summary[0];
      ?>
        <li class="art-list-item">
          <div class="art-list-item-title-and-time">
            <h2 class="art-list-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="art-list-time"><?php the_time('F jS, Y') ?></div>
          </div>
          <p><?php echo $summary; ?></p>
          </a>
        </li>
    <?php endwhile; ?>
  </ul>
</nav>