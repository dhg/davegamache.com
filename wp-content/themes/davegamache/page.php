<?php
/**
 * The template for displaying all pages.
**/

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>
						<h2 class="page-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="page-title"><?php the_title(); ?></h1>
					<?php } ?>

						<?php the_content(); ?>

				<?php //comments_template( '', true ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>