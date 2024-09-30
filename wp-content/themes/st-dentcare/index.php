<?php get_header(); ?>

<!-- Main Container -->
<div id="skip-link-target" class="mt-5">

	<div class="main-container container" id="skip-link-target">
		
		<?php

		if ( have_posts() ) :

			while ( have_posts() ) :

				the_post();

				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('st-theme-post'); ?>>
					
					<div class="post-media">
						<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
					</div>

					<header class="post-header">

						<h2 class="post-title">
							
							<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
						</h2>

						<div class="post-categories">
    						<?php 
    						$categories_list = get_the_category_list(', ');
    						if ($categories_list) {
        						echo wp_kses_post($categories_list);
							} 
    						?>	
						</div>

					</header>

					<div class="post-content">
						<?php the_excerpt(); ?>
					</div>

					<footer class="post-footer">
						<div class="post-meta">
							<span class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
							<span class="meta-sep">/</span>
							<?php comments_popup_link( esc_html__( '0 Comments', 'st-dentcare' ), esc_html__( '1 Comment', 'st-dentcare' ), '% '. esc_html__( 'Comments', 'st-dentcare' ), 'post-comments'); ?>

						</div>

						<div class="read-more">
							<a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'read more','st-dentcare' ); ?></a>
						</div>

					</footer>

				</article>
			
				<?php

			endwhile;

		else:

		?>

		<div class="no-result-found">
			<h3><?php esc_html_e( 'Nothing Found!', 'st-dentcare' ); ?></h3>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'st-dentcare' ); ?></p>
			<div class="ashe-widget widget_search">
				<?php get_search_form(); ?>
			</div>
		</div>

		<?php
		
		endif;

		// Pagination
		the_posts_pagination();
		?>

	</div><!-- .main-container -->
</div>

<?php get_footer(); ?>