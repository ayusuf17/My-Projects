<?php
/**
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                //
                // Post Content here
                //
            } // end while
        } // end if
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();