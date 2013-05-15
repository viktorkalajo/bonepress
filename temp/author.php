<?php get_header(); ?>

<h3>Vem?</h3><hr />

<div class="left">
<?php get_template_part( 'loop' );?>
</div><!-- left -->

<div class="right">
<?php include("img-head.php"); ?>
<?php get_sidebar(); ?>
</div><!-- right -->

<?php get_footer(); ?>