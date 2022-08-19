<?php
/**
 * Template Name: All
 */
?>

<?php
    get_header();

    $args = array(
        'ignore_sticky_posts' => 1,//忽略sticky_posts，即不置顶
    );
    $query = new WP_Query( $args );
?>


<div class="container">
    <div class="news-container">
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="news-item" onclick="window.location.href='<?php echo the_permalink();?>'">
                <div class="news-item-left">
                    <div class="news-item-image">
                        <img class="news-item-photo" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                    </div>
                </div>
                <div class="news-item-right">
                    <div class="news-item-title"><?php echo the_title(); ?></div>
                    <div class="news-item-date"><?php echo get_the_date(); ?></div>
                    <div class="news-item-content">
                        <?php
                        $read_more = '&hellip; <a class="read-more-link" href="' . get_the_permalink() . '">Read Full Article</a>';
                        // wpautop() auto-wraps text in paragraphs
                        echo wpautop(
                        // wp_trim_words() gets the first X words from a text string
                            wp_trim_words(
                                get_the_content(), // We'll use the post's content as our text string
                                100, // We want the first 55 words
                                $read_more // This is what comes after the first 55 words
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
