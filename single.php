<?php /* Template Name: Article */
    get_header('secondary');
	$body = get_field('body_copy');
	$bodyPost = get_field('body_copy2');
	$subtitle = get_field('subtitle');
    $quote = get_field('quote');
    $images = get_field('gallery');
	$heroImage = get_field('featured_image');
	$heroBG = 'background:linear-gradient(rgba(33, 33, 33, 0.8),rgba(33, 33, 33, 0.8)),url('.$heroImage.') top center / cover no-repeat fixed;';
?>

	<main role="main">
	

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		<!-- article -->


		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<section class="article-head">
				<div class="content gutters">
					<div class="span-2 col empty"></div>
					<div class="span-8 col">
					<p class="category"><?php the_category( ', ' ); ?></p>
					<h1><?php the_title(); ?></h1>
					<span class="author-container">
                        <span class="author"><?php _e( 'Published by', 'boilerplate' ); ?> <?php the_author_posts_link(); ?></span>
                        <span class="date"><?php the_time('F j, Y'); ?></span>
                    </span>
					<?php echo $subtitle; ?>
					</div>
					<div class="span-2 col empty"></div>
					
				</div>
			</section>

			<section class="hero-image header-sync">
					<img src="<?php echo $heroImage; ?>">
			</section>


			<section class="article-body">
				<div class="content gutters">
				<div class="span-2 col empty"></div>
				<div class="span-8 col">
					<?php echo $body; ?>
				</div>
				<div class="span-2 col empty"></div>


			</div>
			</section>

			<?php if($quote){ ?>
				<section class="article-quote quote">
					<div class="content">
						<div class="span-2 col empty"></div>
						<div class="span-8 col">
							<div class="blockquote">
								<p>	<img src="<?php echo get_template_directory_uri(); ?>/dist/img/quote-icon.svg" onerror="this.src='<?php echo get_template_directory_uri(); ?>/dist/img/quote-icon.png'" class="quote-icon">				
									<?php echo $quote; ?>
								</p>
							</div>
						</div>
						<div class="span-2 col empty"></div>
					</div>
				</section>
			<?php } ?>

			<section class="article-body">
				<div class="content gutters">
				<div class="span-2 col empty"></div>
				<div class="span-8 col">
					<?php echo $bodyPost; ?>
				</div>
				<div class="span-2 col empty"></div>


			</div>
			</section>
			
            <?php if( $images ): ?>
			    <!-- <section class="article-photo-gallery">
					<div class="content gutters">
						<div class="span-2 col empty"></div>
						<div class="span-8 col">
		                    <span class="gallery-title">Photo Gallery</span>
		                        <?php foreach( $images as $image ): ?>
		                            <div class="gallery-image">
		                                <a href="<?php echo $image['url']; ?>" class="popup">
		                                    <img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>" />
		                                </a>
		                            </div>
		                        <?php endforeach; ?>

						</div>
						<div class="span-2 col empty"></div>

				</div>
			    </section> -->
            <?php endif; ?>

			<!-- post title -->
			
			<!-- /post title -->

			<!-- post details -->
			<!-- /post details -->

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
