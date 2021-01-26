<?php get_header(); ?>
<?php the_post(); ?>

<div class="main-content">
    <?php the_post_thumbnail('large'); ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
</div>

<?php get_footer(); ?>
