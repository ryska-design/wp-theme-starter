<?php
/**
 * Read up on the WP Template Hierarchy for
 * when this file is used
 *
 */
?>
<?php get_header(); ?>

	<article class="hero">
		<div class="hero__content">
			<h1 class="hero__title">RYSKA</h1>
			<div class="hero__text">
				WordPress</br>Theme Starter
			</div>
			<a class="btn _white"
			   target="_blank"
			   href="https://github.com/ryska-design/wp-theme-starter">
				The README
			</a>
		</div>
	</article>

	<article class="site__grid">
		<div class="container">
			<div class="row">
				<?php for( $i=0; $i<12; $i++ ): ?>
				<div class="site__grid__col col-xs-12 col-md-6 col-lg-4">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg" >
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in justo et mi dictum consequat eget sed dolor. Proin ut lacus vel dui placerat aliquam. Etiam sed eleifend massa. Nunc id efficitur ligula. Nullam et arcu euismod, blandit orci at, aliquet arcu. Duis quis dapibus purus, sit amet semper nisl. Sed ac cursus lacus, tincidunt tincidunt libero.</p>
					<a class="btn _white"
					   target="_blank"
					   href="https://github.com/ryska-design/wp-theme-starter">
						The README
					</a>					
				</div>
				<?php endfor; ?> 
			</div>
		</div>
	</article>

<?php get_footer(); ?>