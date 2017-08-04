<?php
/*
 Template Name: FAQ Page
 *
 * No Sidebar on this page.
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

						<main id="main" class="m-all t-all d-all cf section-gray" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<section class="section-outer section-white section-base cf">

								<div class="section-inner wrap">

									<dl class="faqs">

										<h3 class="section-heading-faq">FAQ</h3>

										<a class="expand-collapse-buttons" id="expand-all" href="javascript:void(0);">Expand all</a> | <a class="expand-collapse-buttons" id="collapse-all" href="javascript:void(0);">Collapse all</a>

										<dt class="question">I already do social media marketing – how would <span class="rovely-text">Rovely</span> work with that?</dt>
										<dd class="answer"><span class="rovely-text">Rovely</span> expands the reach of your existing online content. <span class="rovely-text">Rovely</span> helps drive additional traffic to your content to help you deepen your relationship with existing customers, grow your audience and your business.</dd>

										<dt class="question">What do I get when I order <span class="rovely-text">Rovely</span>?</dt>
										<dd class="answer">You are shipped a new tablet pre-loaded with the <span class="rovely-text">Rovely</span> software, a tablet stand and charging cable. You can customize the customer landing page  by adding your business name, logo, and any additional content. You will also get access to your <span class="rovely-text">Rovely</span> account dashboard where you can view your customer response data and <span class="rovely-text">Rovely</span> analytics.</dd>

										<dt class="question">What do you mean by content?</dt>
										<dd class="answer">Content can include anything you post on social media platforms like Instagram, Facebook, and Twitter, other marketing tools such as Constant Contact email lists, and links to your website or other supporting services (Grubhub, Yelp, etc.). <span class="rovely-text">Rovely</span> amplifies your existing marketing to help you expand your audience, connect more easily with your customers and grow your business.</dd>

										<dt class="question">Why do my customers want or need <span class="rovely-text">Rovely</span>?</dt>
										<dd class="answer">Customers want to connect to their favorite businesses and brands, but they want it to be as easy as possible. <span class="rovely-text">Rovely</span> puts your specific content links into your customers' hands, quickly and easily. They can then connect the way they choose.</dd>

										<dt class="question">I already have a "Like Us on Facebook" sticker/card/line on my window/tables/menu. Isn't that the same?</dt>
										<dd class="answer">Most merchants have lots of ways that they connect with their customer community – multiple social media networks, email lists, websites and apps. <span class="rovely-text">Rovely</span> connects your customers to all of them with one trip to your customized <span class="rovely-text">Rovely</span> landing page. <span class="rovely-text">Rovely</span> is a better way to drive traffic to your content and lets you track where your customers go most frequently.</dd>

										<dt class="question">How does <span class="rovely-text">Rovely</span> get my content to my customers?</dt>
										<dd class="answer">Your customers use the <span class="rovely-text">Rovely</span> tablet to text or email themselves a link to your customized landing page. That landing page has links to the content that you choose – social networks, email lists, websites, etc.</dd>

										<dt class="question">How long does the process of connecting take?</dt>
										<dd class="answer"><span class="rovely-text">Rovely</span> usually takes less than 15 seconds to work. Customers tap to connect, enter a phone number (for texting) or email address, and press submit. That’s it – the link to your landing page is on its way!</dd>

										<dt class="question">What does <span class="rovely-text">Rovely</span> do with the phone numbers and emails that are entered?</dt>
										<dd class="answer">Those are only used to send the landing page link. <span class="rovely-text">Rovely</span> does NOT collect, store, use or resell any customer information. We value and protect everyone’s privacy.</dd>

										<dt class="question">What kind of analytics does <span class="rovely-text">Rovely</span> offer?</dt>
										<dd class="answer">Your <span class="rovely-text">Rovely</span> dashboard will track daily interactions – how many texts and emails were sent, the number of visits to the landing page and which content was visited. These interactions are depicted graphically, but the data can also be downloaded to Excel for further analysis.</dd>

									</dl>

								</div>

							</section>

						</main>

						<script>

							jQuery(document).ready(function( $ ) {

								$('.faqs dt').click(function(){
								  $(this).toggleClass('question').next().slideToggle('normal').toggleClass('expanded');
								});

								$('#expand-all').click(function(){
								  $('.faqs dd').slideDown(300).addClass('expanded');
								});

								$('#collapse-all').click(function(){
								  $('.faqs dd').slideUp(300).removeClass('expanded');
								  $('.faqs dt').removeClass('question');

								});

							});

						</script>

				</div>

			</div>

<?php get_footer(); ?>
