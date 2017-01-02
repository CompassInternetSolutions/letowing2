<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
        

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon" role="contentinfo">

					<div class="site-info">
					
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<div class="fl-row fl-row-fixed-width fl-row-bg-none" >
  <div class="fl-row-content-wrap">
     <div class="fl-row-content fl-row-fixed-width fl-node-content">

<?php wp_footer(); ?>
    
    </div>    </div>    </div>

</body>

</html>
