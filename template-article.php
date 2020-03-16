<?php /* Template Name: Article */
    get_header();
    $quote = get_field('quote');
    $images = get_field('gallery');
?>

	<main role="main">
	

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		<!-- article -->



		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!--Need to add class of span-12, col-->

			
			<section class="article-head">
				<div class="content">
					<h1>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<span class="author-container">
                        <span class="author"><?php _e( 'Published by', 'boilerplate' ); ?> <?php the_author_posts_link(); ?></span>
                        <span class="date"><?php the_time('F j, Y'); ?></span>
                    </span>
					
				</div>
			</section>
			
			<section class="hero-image">
				<div class="content">
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->				
				</div>
			</section>

			<?php if($quote){ ?>
				<section class="article-quote quote">
					<div class="content">
						<div class="blockquote">
							<p>					
								<?php echo $quote; ?>
							</p>
						</div>
					</div>
				</section>
			<?php } ?>

			<section class="article-body">
				<?php the_content(); ?>
			</section>
			
            <?php if( $images ): ?>
			    <section class="article-photo-gallery">
                    <span class="gallery-title">Photo Gallery</span>
                    <ul>
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <a href="<?php echo $image['url']; ?>">
                                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
			    </section>
            <?php endif; ?>

			<!-- post title -->
			
			<!-- /post title -->

			<!-- post details -->
			<!-- /post details -->

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>


		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'boilerplate' ); ?></h1>

		</article>
		<!-- /article -->
		

	<?php endif; ?>

	<!-- /section -->
	</main>


<?php get_footer(); ?>
