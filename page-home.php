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

							<div class="hero-outer">
								<div class="hero-inner">
									<div class="hero-taglines">
										<h1 class="hero-tagline-1" data-aos="fade" data-aos-easing="ease-in-back" data-aos-duration="600"><?php the_field('tagline_1', 'option'); ?></h1>
										<h2 class="hero-tagline-2" data-aos="fade" data-aos-easing="ease-in-back" data-aos-duration="900"><?php the_field('tagline_2', 'option'); ?></h2>
									</div>
									<a href="#overview"><img class="next-arrow animated bounce" src="<?php echo get_template_directory_uri(); ?>/library/images/next-arrow.svg" alt="next icon"/></a>
								</div>
							</div>

							<!-- START OVERVIEW SECTION -->

							<a class="anchor" id="overview"></a>

							<section class="section-outer section-gray section-base">

								<div class="section-inner wrap">

									<?php $overview_gif = get_field('overview_gif'); ?>

									<h3 class="section-heading" data-aos="fade" data-aos-easing="linear"><?php the_field('overview_heading'); ?></h3>

										<div class="overview-outer" data-aos="fade">

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

										<img class="overview-gif" src="<?php echo $overview_gif['url']; ?>" alt="<?php echo $overview_gif['alt']; ?>" />

									</div>

								</div>

							</section>

							<!-- END OVERVIEW SECTION -->

							<!-- START HIW SECTION 1 -->

							<a class="anchor" id="hiw"></a>

							<section class="section-outer section-white section-base">

									<div class="section-inner wrap">

										<h3 class="section-heading" data-aos="fade-up"><?php the_field('hiw_heading_1'); ?></h3>

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

										<?php if( have_rows('iphone_graphic') ):

											while( have_rows('iphone_graphic') ): the_row();

												// vars
												$iphone = get_sub_field('iphone');
												$gif = get_sub_field('gif');

												?>
												<div id="iphone-graphic-outer" data-aos="fade-up">
													<div class="iphone-graphic-inner">
														<img class="iphone-blank" src="<?php echo $iphone['url']; ?>" alt="<?php echo $iphone['alt']; ?>" />
														<img class="iphone-screen" src="<?php echo $gif['url']; ?>" alt="<?php echo $gif['alt']; ?>" />
													</div>
												</div>
											<?php endwhile; ?>

										<?php endif; ?>

									</div>

							</section>

							<!-- END HIW SECTION 1 -->

							<!-- START BACKGROUND IMAGE SECTION -->

							<div class="background-slide parallax-window" data-parallax="scroll" data-image-src="<?php the_field('background_image'); ?>"></div>

							<!-- END BACKGROUND IMAGE SECTION -->

							<!-- BEGIN HIW SECTION 2 -->

							<section class="section-outer section-white section-base">

								<div class="section-inner wrap">

										<h3 class="section-heading" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500"><?php the_field('hiw_heading_2'); ?></h3>

									<div class="hiw-outer" data-aos="fade-down">


												<div class="hiw-descriptions">

													<ol class="description-container">

														<?php if( have_rows('hiw_description_1') ):

															while( have_rows('hiw_description_1') ): the_row();

																// vars
																$description = get_sub_field('description');
																$details = get_sub_field('details');
																$pricing = get_sub_field('pricing');

																?>
																<li class="description">
																	<h4><?php echo $description; ?></h4>
																	<?php

																		$lines = explode("\n", $details); // or use PHP PHP_EOL constant
																		if ( !empty($lines) ) {
																		  echo '<ul>';
																		  foreach ( $lines as $line ) {
																		    echo '<li class="nocounter">'. trim( $line ) .'</li>';
																		  }
																		  echo '</ul>';
																		}
																	?>
																	<h5 class="pricing"><?php echo $pricing; ?></h5>
																</li>
															<?php endwhile; ?>

														<?php endif; ?>

														<?php if( have_rows('hiw_description_2') ):

															while( have_rows('hiw_description_2') ): the_row();

																// vars
																$description = get_sub_field('description');
																$details = get_sub_field('details');
																$pricing = get_sub_field('pricing');

																?>
																<li class="description">
																	<h4><?php echo $description; ?></h4>
																	<?php

																		$lines = explode("\n", $details); // or use PHP PHP_EOL constant
																		if ( !empty($lines) ) {
																		  echo '<ul>';
																		  foreach ( $lines as $line ) {
																		    echo '<li>'. trim( $line ) .'</li>';
																		  }
																		  echo '</ul>';
																		}
																	?>
																	<h5 class="pricing"><?php echo $pricing; ?></h5>
																</li>
															<?php endwhile; ?>

														<?php endif; ?>

													</ol>

												</div>

											</div>

										</div>

							</section>

							<!-- END HIW SECTION 2 -->

							<!-- BEGIN CONTACT SECTION -->

							<a class="anchor" id="contact"></a>

							<section class="section-outer section-gray section-base cf">

								<div class="section-inner form-wrap">

									<h3 class="contact-heading" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500"><?php the_field('contact_heading'); ?></h3>

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

						<script>

						jQuery(document).ready(function($){
						  if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');

						  $(window).scroll(function() {
						    if ($(this).scrollTop() > 60){
						      $('header.header').addClass("sticky");
						      $('#menu-logo').insertBefore('#menu-item-106');
						    } else {
						      $('header.header').removeClass("sticky");
						    }
						  });

						  if($(window).scrollTop()) {
						    $('header.header').addClass("sticky");
						    $('#menu-logo').insertBefore('#menu-item-106');
						  }

						  if($('header.header').hasClass('sticky')) {
						    $('#menu-logo').insertBefore('#menu-item-106');
						  }

						});

						</script>

				</div>

			</div>

<?php get_footer(); ?>
