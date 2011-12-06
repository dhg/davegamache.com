<?php

  /* Template Name: homepage */

  $post_query = array(
    'category_name'      => 'article',
    'posts_per_page'     => 1
  );

  query_posts($post_query);
  if(have_posts()) while (have_posts()) : the_post();
    $white_header = get_post_meta($post->ID, 'white_header');
    $white_header = $white_header[0];
    $white_nav = get_post_meta($post->ID, 'white_nav');
    $white_nav = $white_nav[0];
    $category = get_the_category();
    $category =  $category[0]->cat_name;
    $bg_image = get_post_meta($post->ID, 'bg_image');
    $bg_image = $bg_image[0];
    include ("header.php"); ?>

      <article class="art<?php if($category == "simple"){ ?> simple<?php } ?>">
        <header class="art-header<?php if($white_header == "true"){ ?> white<?php } ?>" style="background-image: url(<?php if(isset($bg_image)) { echo $bg_image; } ?>)">
          <time class="art-time"><?php the_time('F jS, Y') ?></time>
          <h2 class="art-title"><?php the_title(); ?></h2>
          <p class="art-subtitle"><?php the_subtitle(); ?></p>
        </header>
        <div class="art-content">
          <?php the_content(); ?>
        </div>
      </article>

  <?php endwhile;
get_footer(); ?>