<?php get_header(); ?>

<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1><?php the_archive_title(); ?></h1>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php the_posts_navigation(); ?>
            <?php else : ?>
                <p><?php _e('Нічого не знайдено.', 'basictheme'); ?></p>
            <?php endif; ?>
        </main>
    </div>
</div>

<?php get_footer(); ?>
