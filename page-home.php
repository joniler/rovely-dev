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

							<!-- START OVERVIEW SECTION -->

							<a class="anchor" id="overview"></a>

							<section class="section-outer section-gray section-base">

								<div class="section-inner wrap">

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

													<div class="overview-infographic">

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

							<!-- END OVERVIEW SECTION -->

							<!-- START HIW SECTION -->

							<a class="anchor" id="hiw"></a>

							<section class="section-outer section-white section-base">

									<div class="section-inner wrap">

										<h3 class="section-heading" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500"><?php the_field('hiw_heading_1'); ?></h3>

											<div class="hiw-outer" data-aos="fade-up">

												<?php if( have_rows('hiw_infographics') ): ?>

													<div class="hiw-infographic">

														<?php while( have_rows('hiw_infographics') ): the_row();

														// vars
														$icon = get_sub_field('icon');
														$text = get_sub_field('text');

														?>

														<div class="hiw-infographic-inner">

															<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />

															<p class="hiw-infographic-text">
																<?php echo $text; ?>
															</p>

													    <?php echo $content; ?>

														</div>

													<?php endwhile; ?>

												</div>

												<?php endif; ?>

										</div>

									</div>

							</section>

							<!-- END HIW SECTION -->

							<!-- START BACKGROUND IMAGE SECTION -->

							<div class="background-slide parallax-window" data-parallax="scroll" data-image-src="<?php the_field('background_image'); ?>""></div>

							<!-- END BACKGROUND IMAGE SECTION -->

						</main>

				</div>

			</div>

<?php get_footer(); ?>
