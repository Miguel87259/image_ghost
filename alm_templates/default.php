<article  id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>
    <?php if ( has_post_thumbnail() ): ?> 
        <a href="<?php esc_url( the_permalink() ); ?>" class="entry-featured-image-url">
            <?php the_post_thumbnail('full'); ?>
        </a>
    <?php endif; ?>
    <h3 class="entry-title">
        <a href="<?php esc_url( the_permalink() ); ?>">
            <?php the_title(); ?>
        </a>
    </h3>
    <p class="post-meta">
        by <span class="author vcard">
                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>">
                    <?php the_author(); ?>
                </a>
            </span>
        |
        <span class="published">
            <?php echo esc_html( get_the_date( "M d, Y" ) ) ?>
        </span>
        |
        <?php get_the_category_list(', ') ?>
    </p>
    <div class="post-content">
        <p>
            <?php the_excerpt(); ?>
        </p>
        <a href="<?php esc_url( get_permalink() ) ?>" class="more-link">
            Read more
        </a>
    </div>
</article>