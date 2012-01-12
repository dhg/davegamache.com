<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>


      <div class="fourohfour">
				<p>Nope. This page doesn't exist. Sorry!</p>
      </div>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>