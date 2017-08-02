			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="cf">

					<?php /* Uncomment this and the 'Footer Links' menu registration in template.php to use.
					Or delete it if you're not using it.

					<nav role="navigation">
						wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'templatetheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						));
					</nav>

					*/ ?>
					<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/rovely-logo-white.svg" />
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> Rovely</p>

				</div>

				<script>
			    AOS.init();
			  </script>

				<script>
					jQuery(document).ready(function($){
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
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- This is the end. My only friend. -->
