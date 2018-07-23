<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- contents of the loop -->

<?php endwhile; endif; ?>


<?php get_page(); ?>



<?php get_footer(); ?>
