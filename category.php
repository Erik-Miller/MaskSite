<?php get_header(); ?>

	<main role="main">
		<!-- section -->
			<section class="about-hero parrallax">
				<div class="content">
					<h1><?php single_cat_title(); ?></h1>
				</div>
			</section>
		<section class="header-sync">
			<div class="content">
			

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
		</div>
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
