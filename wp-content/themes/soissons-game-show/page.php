<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soissons-game-show
 */

get_header();
?>
<main id="primary" class="site-main">
	<div class="content-main">
		<div class="content-title-main-section">
			<h2 class="title-main-section">
				<?php echo get_field('title_main_section') ?>
				<span class="color-illust-tile-red"><?php echo get_field('title_main_red_span') ?></span>
			</h2>
		</div>
		<div class="content-section-main-one">
			<div class="content-section-paragraphe-img-main-one">
				<div class="content-image-section-one">
					<img class="image-section-one" src="<?php echo get_field('image_section_one_main') ?>" alt="Image de luigi">
				</div>
				<div class="content-title-section-one">
					<h2 class="title-section-one">
						<?php echo get_field('title_section_one_main') ?>
					</h2>
					<div class="separe-paragraphe-section-one"></div>
					<div class="content-paragraphe-section-one-main">
						<p class="paragraphe-section-one-main">
							<?php echo get_field('parag_section_one_main') ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="content-section-main-second">
			<div class="content-paragraphe-section-second-main">
				<h2 class="content-title-section-two">
					<?php echo get_field('title_section_title_main_second') ?>
				</h2>
				<p class="parag-section-second">
					<?php echo get_field('parag_section_second_main') ?>
				</p>
			</div>
			<div class="content-image-section-two">
				<div class="content-image-section-second">
					<img class="image-section-second" src="<?php echo get_field('image_section_second_main') ?>" alt="Image de carte">
				</div>
			</div>
		</div>
		<div class="content-section-influanceurs">
			<div class="content-title-section-influanceurs">
				<h2 class="title-section-influanceurs"><?php echo get_field('title_influanceurs') ?></h2>
			</div>
			<div class="content-post-influanceurs">
				<?php while(have_posts()){

					the_post();

					?>

				<div class="content-image-influanceurs">
					<img src="<?php echo the_post_thumbnail_url() ?>">
				</div>
				<div class="content-title-influanceurs">
					<h3 class="title-influanceurs"><?php  ?></h3>
				</div>
				<div class="content-description-influanceurs">
					<p class="description-influanceurs">
						<?php echo the_excerpt_rss() ?>
					</p>
				</div>

					<?php

				} ?>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
