<?php get_header(); ?>

<?php printf( __( '<h3>%s'), '' . single_cat_title( '', false ) . '</h3>' );?><hr />

<div class="left">
<?php get_template_part( 'loop' );?>
</div><!-- left -->

<div class="right">
<?php include("img-head.php"); ?>
<?php get_sidebar(); ?>
</div><!-- right -->

<?php get_footer(); ?>
