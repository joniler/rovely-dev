<?php
/*
 Template Name: Home Page
 *
 * No Sidebar on this page.
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<section id="overview" class="section-outer section-gray section-base">
								<div class="section-inner wrap">

									<?php $overview_heading = get_field('overview_heading'); ?>
									<?php $overview_gif = get_field('overview_gif'); ?>

									<h3 class="section-heading" data-aos="fade-down"><?php the_field('overview_heading'); ?></h3>

										<div class="overview-outer" data-aos="fade-down">

										<?php if( have_rows('overview_infographic_2') ): ?>

										<div class="overview-infographic">

											<?php while( have_rows('overview_infographic_2') ): the_row();

												// vars
												$icon = get_sub_field('icon');
												$text = get_sub_field('text');

												?>

												<div class="overview-infographic-inner">

														<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />

														<p class="overview-infographic-text">
															<?php echo $text; ?>
														</p>

												    <?php echo $content; ?>

												</div>

											<?php endwhile; ?>

										</div>

										<?php endif; ?>

										<?php if( have_rows('overview_infographic_1') ): ?>

										<div class="overview-infographic">

											<?php while( have_rows('overview_infographic_1') ): the_row();

												// vars
												$icon = get_sub_field('icon');
												$text = get_sub_field('text');

												?>

												<div class="overview-infographic-inner">

														<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />

														<p class="overview-infographic-text">
															<?php echo $text; ?>
														</p>

												    <?php echo $content; ?>

												</div>

											<?php endwhile; ?>

										</div>

										<?php endif; ?>

										<img class="overview-gif" src="<?php echo $overview_gif['url']; ?>" alt="<?php echo $overview_gif['alt']; ?>" />

									</div>

								</div>
							</section>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
