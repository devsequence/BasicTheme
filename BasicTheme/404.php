<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package basictheme
 */

get_header();
?>
    <div class="page-wrap">
    <main id="primary" class="site-main">
        <section class="error-404 not-found">
            <div class="container">
                <br>
                <br>
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'basictheme' ); ?></h1>
                <br>
                <br>
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'basictheme' ); ?></p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </section><!-- .error-404 -->

    </main><!-- #main -->
    </div>
<?php
get_footer();
