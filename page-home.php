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

									<h3 class="section-heading" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500"><?php the_field('overview_heading'); ?></h3>

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

													</div>

												<?php endwhile; ?>

											</div>

											<?php endif; ?>

										<img class="overview-gif" src="<?php echo $overview_gif['url']; ?>" alt="<?php echo $overview_gif['alt']; ?>" />

									</div>

								</div>

							</section>

							<!-- END OVERVIEW SECTION -->

							<!-- START HIW SECTION 1 -->

							<a class="anchor" id="hiw"></a>

							<section class="section-outer section-white section-base">

									<div class="section-inner wrap">

										<h3 class="section-heading" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-anchor-placement="bottom-bottom"><?php the_field('hiw_heading_1'); ?></h3>

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

														</div>

													<?php endwhile; ?>

												</div>

												<?php endif; ?>

										</div>

									</div>

							</section>

							<!-- END HIW SECTION 1 -->

							<!-- START BACKGROUND IMAGE SECTION -->

							<div class="background-slide parallax-window" data-parallax="scroll" data-image-src="<?php the_field('background_image'); ?>"></div>

							<!-- END BACKGROUND IMAGE SECTION -->

							<!-- BEGIN HIW SECTION 2 -->

							<section class="section-outer section-gray section-base">

								<div class="section-inner wrap">

									<h3 class="section-heading" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500"><?php the_field('hiw_heading_2'); ?></h3>

									<div class="hiw-outer" data-aos="fade-up">

										<?php if( have_rows('hiw_descriptions') ): ?>

											<div class="hiw-descriptions">

												<?php while( have_rows('hiw_descriptions') ): the_row();

												// vars
												$description = get_sub_field('description');
												$details = get_sub_field('details');

												?>
												<div class="description-container">

													<h4><?php echo $description; ?></h4>

												</div>

												<?php
													$items = get_sub_field('details');

													$lines = explode("\n", $items); // or use PHP PHP_EOL constant
													if ( !empty($lines) ) {
													  echo '<ul class="hiw-ul">';
													  foreach ( $lines as $line ) {
													    echo '<li class="hiw-li">'. trim( $line ) .'</li>';
													  }
													  echo '</ul>';
													}
												?>

											<?php endwhile; ?>

										</div>

										<?php endif; ?>

								</div>

							</section>

							<!-- END HIW SECTION 2 -->

							<!-- BEGIN PRICING SECTION -->

							<a class="anchor" id="pricing"></a>

							<section class="section-outer section-white section-base">

								<div class="section-inner wrap">

									<h3 class="section-heading" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500"><?php the_field('pricing_heading'); ?></h3>

									<div class="pricing-outer" data-aos="fade-up">

										<h4 class="pricing-text"><?php the_field('pricing_text'); ?></h4>

										<a href="#" class="button center">Learn More</a>

									</div>

								</div>

							</section>

							<!-- END PRICING SECTION -->

							<!-- BEGIN CONTACT SECTION -->

							<a class="anchor" id="contact"></a>

							<section class="section-outer section-gray section-base cf">

								<div class="section-inner wrap">

									<h3 class="section-heading" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500"><?php the_field('contact_heading'); ?></h3>

									<div class="contact-outer" data-aos="fade-up">

										<h4 class="form-header"><?php the_field('contact_text'); ?></h4>

										<?php $contact_form_shortcode = get_field('contact_form_shortcode'); ?>

										<?php echo do_shortcode($contact_form_shortcode); ?>

									</div>

								</div>

							</section>

							<!-- END CONTACT SECTION -->

						</main>

						<script>
							jQuery(function($){
								// Add smooth scrolling to all links
									$("a").on('click', function(event) {

										// Make sure this.hash has a value before overriding default behavior
										if (this.hash !== "") {
											// Prevent default anchor click behavior
											event.preventDefault();

											// Store hash
											var hash = this.hash;

											// Using jQuery's animate() method to add smooth page scroll
											// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
											$('html, body').animate({
												scrollTop: $(hash).offset().top
											}, 800, function(){

												// Add hash (#) to URL when done scrolling (default click behavior)
												window.location.hash = hash;
											});
										} // End if
									});
								});
						</script>

				</div>

			</div>

<?php get_footer(); ?>
