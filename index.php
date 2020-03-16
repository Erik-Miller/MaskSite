<?php get_header();
$heroBG = 'background:linear-gradient(rgba(33, 33, 33, 0.8),rgba(33, 33, 33, 0.8)),url(/wp-content/themes/mask/dist/img/archive.jpg) top center / cover no-repeat fixed;';
?>

<!-- Homepage Template -->

	<main role="main">
		<section class="about-hero parrallax" style="<?php echo $heroBG; ?>">
			<div class="content">
					<h1><?php the_field('archive_title', get_option('page_for_posts')); ?></h1>
			</div>
		</section>
		<section class="archive header-sync">
			<div class="top"></div>
			<div class="content">
				<div class="span-2 col empty"></div>
				<div class="span-8 col">
					</div>
				</div>
				<div class="span-2 col empty"></div>
			</div>

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
	</main>


<?php get_footer(); ?>
