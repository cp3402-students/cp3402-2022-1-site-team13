<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="page-bg-banner">
        <?php if (get_the_post_thumbnail_url()):?>
            <img class="page-bg-banner-image" src="<?php echo the_post_thumbnail_url(); ?>">
        <?php endif; ?>
        <div class="page-bg-banner-title">
            <?php echo the_title(); ?>
        </div>
    </div>

    <div class="container article-container">
        <?php echo the_content(); ?>
    </div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>