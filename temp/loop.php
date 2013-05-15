<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>    

<?php the_time() ?>
<?php the_title(); ?>
<?php the_post_thumbnail(); ?>
<?php the_content(); ?>
<?php the_tags(); ?>
<?php the_category() ?>
<?php the_permalink(); ?>

<a href="<?php bloginfo( 'url' ); ?>?author=<?php the_author_meta( 'id' ); ?>">
<?php the_author_meta( 'first_name' ); ?> <?php the_author_meta( 'last_name' ); ?></a>

<?php endwhile; ?>
<?php endif; ?>

<?php posts_nav_link(); ?>