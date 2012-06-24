<?php

function getPostMetadata($thisPost) {
  $white_header = get_post_meta($thisPost, 'white_header');
  $white_header = $white_header[0];
  $simple_art = get_post_meta($thisPost, 'simple_art');
  $simple_art = $simple_art[0];
  $bg_image = get_post_meta($thisPost, 'bg_image');
  $bg_image = $bg_image[0];
  $category = get_the_category();
  $category =  $category[0]->cat_name;
  return array (
    "white_header" => $white_header,
    "simple_art" => $simple_art,
    "bg_image" => $bg_image,
    "category" => $category
  );
}


?>