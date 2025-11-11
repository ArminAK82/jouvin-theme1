<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
    <header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'large' ); ?>
                </a>
            </div>
        <?php endif; ?>

        <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

        <div class="entry-meta">
            <span class="posted-on"><?php echo get_the_date(); ?></span>
            <span class="byline"><?php esc_html_e( 'by', 'jouvin' ); ?> <?php the_author_posts_link(); ?></span>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'jouvin' ); ?></a>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
