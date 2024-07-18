<?php get_header(); ?>

<div class="page-wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">
                <div class="container">
                    <div class="hero-wrap">
                        <div class="hero-article__wrap">
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="hero-article__item">
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
                        </div>
                        <aside id="secondary" class="widget-area">
                            <?php dynamic_sidebar('sidebar-1'); ?>
                        </aside>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

<?php get_footer(); ?>
