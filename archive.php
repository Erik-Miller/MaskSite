<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Archives', 'boilerplate' ); ?></h1>

					<div class="content">
						<div class="span-2 col empty"></div>
						<div class="span-8 col">
							<?php get_template_part('loop'); ?>
							</div>
						</div>
						<div class="span-2 col empty"></div>
					</div>

					<div class="content">
						<div class="span-2 col empty"></div>
						<div class="span-8 col">
			<?php get_template_part('pagination'); ?>
							</div>
						</div>
						<div class="span-2 col empty"></div>
					</div>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
