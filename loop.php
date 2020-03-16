<?php 

$heroImage = get_field('featured_image');
$subtitle = wp_trim_words( get_field('subtitle' ), $num_words = 25, $more = '...' );

if (have_posts()): while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<p class="category"><?php the_category( ', ' ); ?></p>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<h2><?php the_title(); ?></h2>
		<img src="<?php echo $heroImage; ?>">
		</a>
					<span class="author-container">
                        <span class="author"><?php _e( 'Published by', 'boilerplate' ); ?> <?php the_author_posts_link(); ?></span>
                        <span class="date"><?php the_time('F j, Y'); ?></span>
                    </span>
					<p><?php echo $subtitle; ?></p>

					<hr/>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'boilerplate' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
