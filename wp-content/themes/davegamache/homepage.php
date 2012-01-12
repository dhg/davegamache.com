<?php
  query_posts('category_name=article&showposts=1');
  if ( have_posts() ) while ( have_posts() ) : the_post();
  $postMeta = getPostMetadata($post->ID);
  include ("header.php");
?>

  <article class="art<?php if($postMeta["simple_art"] == "true"){ ?> simple<?php } ?>">
    <header class="art-header<?php if($postMeta["white_header"] == "true"){ ?> white<?php } ?>" style="background-image: url(<?php echo $postMeta["bg_image"]; ?>)">
      <div class="art-header-inner">
        <time class="art-time"><?php the_time('F jS, Y') ?></time>
        <h2 class="art-title"><?php the_title(); ?></h2>
        <p class="art-subtitle"><?php the_subtitle(); ?></p>
      </div>
    </header>
    <div class="art-body">
      <div class="art-body-inner">
        <?php the_content(); ?>
      </div>
    </div>
  </article>

<?php endwhile; ?>
<?php get_footer(); ?>