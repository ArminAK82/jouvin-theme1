<?php get_header(); ?>

<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <header class="page-header">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </header>

            <div class="blog-layout">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content', 'post' );
                    endwhile;

                    the_posts_pagination( array(
                        'prev_text' => '<i class="fas fa-arrow-left"></i>',
                        'next_text' => '<i class="fas fa-arrow-right"></i>',
                    ) );
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
