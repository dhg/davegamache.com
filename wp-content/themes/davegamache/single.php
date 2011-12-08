<?php
  $white_header = get_post_meta($post->ID, 'white_header');
  $white_header = $white_header[0];
  $white_nav = get_post_meta($post->ID, 'white_nav');
  $white_nav = $white_nav[0];
  $simple_art = get_post_meta($post->ID, 'simple_art');
  $simple_art = $simple_art[0];
  $bg_image = get_post_meta($post->ID, 'bg_image');
  $bg_image = $bg_image[0];
  include ("header.php");
?>





<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <article class="art<?php if($simple_art == "true"){ ?> simple<?php } ?>">
    <header class="art-header<?php if($white_header == "true"){ ?> white<?php } ?>" style="background-image: url(<?php if(isset($bg_image)) { echo $bg_image; } ?>)">
      <div class="art-header-scroll-container">
        <time class="art-time"><?php the_time('F jS, Y') ?></time>
        <h2 class="art-title"><?php the_title(); ?></h2>
        <p class="art-subtitle"><?php the_subtitle(); ?></p>
      </div>
    </header>
    <div class="art-content-wrapper">
      <div class="art-content">
        <?php the_content(); ?>
      </div>
    </div>
  </article>

<?php endwhile; ?>




<div class="castle">
  <div class="rampart1"></div>
  <div class="castle-body"></div>
  <div class="rampart2"></div>
</div>



<div class="shelf-wash">
  <nav class="shelf">
    <div class="shelf-header">
      <h5>Articles</h5>



    </div>
    <div class="shelf-body">
      <ul>
        <li>
          <a href="">
            <h2>Craftsmanship</h2>
            <p class="subtitle">Quality, passion and experience</p>
          </a>
        </li>
        <li>
          <a href="">
            <h2>Skeleton Boilerplate</h2>
            <p class="subtitle">A Beautiful Boilerplate for Responsive, Mobi&hellip;</p>
          </a>
        </li>
        <li>
          <a href="">
            <h2>Craftsmanship</h2>
            <p class="subtitle">Quality, passion and experience</p>
          </a>
        </li>
        <li>
          <a href="">
            <h2>Skeleton Boilerplate</h2>
            <p class="subtitle">A Beautiful Boilerplate for Responsive, Mobi&hellip;</p>
          </a>
        </li>
        <li>
          <a href="">
            <h2>Craftsmanship</h2>
            <p class="subtitle">Quality, passion and experience</p>
          </a>
        </li>
        <li>
          <a href="">
            <h2>Skeleton Boilerplate</h2>
            <p class="subtitle">A Beautiful Boilerplate for Responsive, Mobi&hellip;</p>
          </a>
        </li>
        <li>
          <a href="">
            <h2>Craftsmanship</h2>
            <p class="subtitle">Quality, passion and experience</p>
          </a>
        </li>
        <li>
          <a href="">
            <h2>Skeleton Boilerplate</h2>
            <p class="subtitle">A Beautiful Boilerplate for Responsive, Mobi&hellip;</p>
          </a>
        </li>
        <li>
          <a href="">
            <h2>Craftsmanship</h2>
            <p class="subtitle">Quality, passion and experience</p>
          </a>
        </li>
        <li>
          <a href="">
            <h2>Skeleton Boilerplate</h2>
            <p class="subtitle">A Beautiful Boilerplate for Responsive, Mobi&hellip;</p>
          </a>
        </li>
        <li>
          <a href="">
            <h2>Craftsmanship</h2>
            <p class="subtitle">Quality, passion and experience</p>
          </a>
        </li>
        <li>
          <a href="">
            <h2>Skeleton Boilerplate</h2>
            <p class="subtitle">A Beautiful Boilerplate for Responsive, Mobi&hellip;</p>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>























<?php get_footer(); ?>