<?php get_header(); ?>

<!-- Main Container -->
<div id="skip-link-target" class="mt-5">
    <div class="main-container container post-single">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('st-theme-post'); ?>>

                    <div class="post-media">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <header class="post-header">
                        <h1 class="post-title"><?php the_title(); ?></h1>

                        <div class="post-categories">
    						<?php 
    						$categories_list = get_the_category_list(', ');
    						if ($categories_list) {
        						echo wp_kses_post($categories_list);
							} 
    						?>	
						</div>

                        <div class="post-meta">
                            <span class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
                            <span class="meta-sep">/</span>
                            <?php comments_popup_link( esc_html__( '0 Comments', 'st-dentcare' ), esc_html__( '1 Comment', 'st-dentcare' ), '% '. esc_html__( 'Comments', 'st-dentcare' ), 'post-comments'); ?>
                        </div>
                    </header>

                    <div class="post-content">
                        <?php
                            // The Post Content
                            the_content('');

                            // Post Pagination
                            $defaults = array(
                                'before' => '<p class="single-pagination">'. esc_html__( 'Pages:', 'st-dentcare' ),
                                'after' => '</p>'
                            );
                            wp_link_pages( $defaults );
                        ?>
                    </div>

                    <footer class="post-footer">
                        <?php
                            // The Tags
                            $tag_list = get_the_tag_list( '<div class="post-tags">', '', '</div>');
                            if ( $tag_list ) {
                                echo $tag_list;
                            }
                        ?>
                        <span class="post-author"><?php esc_html_e( 'By', 'st-dentcare' ); ?>&nbsp;<?php the_author_posts_link(); ?></span>
                    </footer>
                    
                </article>

            <?php endwhile; // end of the loop ?>

            <?php
                if ( comments_open() || get_comments_number() ) {
                    echo '<div class="comments-area" id="comments">';
                    comments_template( '', true );
                    echo '</div>';
                }
            ?>

        <?php else : ?>
            <div class="no-post-found">
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'st-dentcare' ); ?></p>
            </div>
        <?php endif; ?>

    </div><!-- .main-container -->
</div>

<?php get_footer(); ?>
