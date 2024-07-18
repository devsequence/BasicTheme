<?php get_header();
/*
 * Template name: home
 * */
?>

<div class="page-wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">
                <div class="container">
                    <h1>Ласкаво просимо на домашню сторінку!</h1>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                                <div class="entry-content">
                                    <?php the_excerpt(); ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                        <?php the_posts_navigation(); ?>
                    <?php else : ?>
                        <p><?php _e('Нічого не знайдено.', 'basictheme'); ?></p>
                    <?php endif; ?>
                    <?php echo basictheme_info_block();?>
                </div>
            </section>
        </main>

    </div>
</div>

<?php get_footer(); ?>
