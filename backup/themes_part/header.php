<?php
if (!defined('WPINC')) {
	die;
}
?>

<header id="header">
	<div class="container">
		<div class="row justify-content-end align-items-center">
			<?php
			if ( function_exists('icl_object_id') ) {
				echo do_shortcode('[wpml_language_switcher]');
			}
			?>
		</div>
		<div class="row justify-content-between align-items-center align-items-lg-stretch">
			<?php
			$menu_disable = get_field('menu_disable', get_the_ID());
			if ($menu_disable){
				?>
				<div class="col-6 menu-disable-first-column">
					<?php
					$global_settings = template_id(17);
					$logo = get_field('logo', $global_settings);
					echo wp_get_attachment_image($logo, 'full');
					echo do_shortcode('[wpml_language_switcher]');
					?>
				</div>
				<div class="col-6 button-column d-flex justify-content-end">
					<span class="btn-custom btn-custom-small btn-yellow open-form" title="Landing"
					      aria-label="Odbierz darmową specyfikację">
	          <span class="text"><?php echo __('Odbierz darmową specyfikację', 'theme'); ?></span>
	        </span>
				</div>
				<?php
			}else {
			?>
			<div class="col-4 col-lg-2 header-col">
				<?php
				$global_settings = template_id(17);
				?>
				<?php //if (get_theme_mod('theme_logo_svg')) : ?>
				<a href="<?php echo bloginfo('url'); ?>" id="logo">
					<?php

					$logo = get_field('logo', $global_settings);
					echo wp_get_attachment_image($logo, 'full');
					?>
				</a>
			</div>
			<div class="col-auto mobile-nav-toggle">
				<a href="<?php echo get_permalink(template_id(787)); ?>" class="basket-menu-item nav-link basket-mobile">
				<span class="basket-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="14.167" height="14.167" viewBox="0 0 14.167 14.167">
						<path id="Path_121" data-name="Path 121"
						      d="M5.25,13.333A1.417,1.417,0,1,0,6.667,14.75,1.415,1.415,0,0,0,5.25,13.333ZM1,2V3.417H2.417l2.55,5.376L4.01,10.528a1.37,1.37,0,0,0-.177.68A1.421,1.421,0,0,0,5.25,12.625h8.5V11.208h-8.2a.175.175,0,0,1-.177-.177l.021-.085.638-1.155h5.277a1.41,1.41,0,0,0,1.24-.73l2.536-4.6a.692.692,0,0,0,.085-.34.71.71,0,0,0-.708-.708H3.982L3.316,2H1ZM12.333,13.333A1.417,1.417,0,1,0,13.75,14.75,1.415,1.415,0,0,0,12.333,13.333Z"
						      transform="translate(-1 -2)" fill="#d5d8e5"/>
					</svg>
					<span class="basket-count">
						<span class="basket-count-number">0</span>
					</span>
				</span>
					<span><?php echo __('Koszyk', 'theme'); ?><span>
				</a>
				<div class="hamburger-wrapper" id="nav-icon3">
					<div class="nav-inner">
						<svg id="special-hamburger" class="special-hamburger2" version="1.1" xmlns="http://www.w3.org/2000/svg"
						     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18.7px"
						     height="19px" viewBox="0 0 18.7 19" style="enable-background:new 0 0 18.7 19;" xml:space="preserve">
							<path id="hamburger-path-1" class="hambuger-path" stroke-width="3" d="M1.37,9.55h15.96"/>
							<path id="hamburger-path-2" class="hambuger-path" stroke-width="3" d="M14.63,2.42L8,2.42l-6.63,0"/>
							<path id="hamburger-path-3" class="hambuger-path" stroke-width="3" d="M1.37,16.69l5.16,0l5.16,0"/>
						</svg>
						<div class="menu">
							<div class="menu-inner">menu</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-10 menu-column">
				<?php get_template_part('theme_part/header', 'nav'); ?>
			</div>
		</div>



		<?php
		}
		?>
	</div>
	<div id="menu-mobile">
		<div class="container">
			<?php
			// if(get_field('lang_switcher_hide', $global_settings)){
			// 	echo '1';
			// }else {
			// 	echo do_shortcode('[wpml_language_switcher]');
			// }
			get_template_part('theme_part/header', 'nav');
			?>
		</div>
	</div>
	</div>
</header>
