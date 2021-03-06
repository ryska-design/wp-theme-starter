<?php
/**
 * Nav
 *
 */
?>

<header class="site__header">
	<div class="site__logo"><a href="/"><?php MOZ_SVG::svg( 'logo' ); ?></a></div>

	<nav class="site__header__nav">
		<div class="site__header__btn hamburger modal-link" target="#mm"><div class="bar"></div></div>
	</nav> 
</header> 

<nav id="mm" class="site__nav modal">
	<div class="modal__box">
		<div class="hamburger">
			<span class="hamburgerX"></span>		
		</div>	
		<?php if ( is_active_sidebar( 'nav' ) ) : ?>
			<div class="block menu">
				<?php dynamic_sidebar( 'nav' ); ?>
			</div>
		<?php else: ?>
			<ul class="nav menu">
				<li><a href="#">Just add</a></li>
				<li><a href="#">Your menu</a></li>
				<li><a href="#">To nav widget :)</a></li>
				<li><a href="#">Have fun!</a></li>	
			</ul>
		<?php endif; ?>			
	</div>
</nav> 