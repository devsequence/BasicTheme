<?php get_header(); ?>

<div class="page-wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </div>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="entry-footer">
                            <span class="posted-on"><?php _e('Опубліковано', 'basictheme'); ?> <?php the_time(get_option('date_format')); ?></span>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e('Нічого не знайдено.', 'basictheme'); ?></p>
            <?php endif; ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>
