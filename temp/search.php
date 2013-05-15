<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php printf( __( 'search: %s', 'bone' ), '' . get_search_query() . '</h3>' ); ?><hr />

<?php get_template_part( 'loop' );?>

<?php else : ?>

<?php _e( 'Nothing Found', 'bone' ); ?>

<?php endif; ?>

<?php include("img-head.php"); ?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>