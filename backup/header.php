<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
  <link rel="preconnect" href="https://connect.facebook.net" crossorigin>
  <link rel="preconnect" href="https://static.hotjar.com" crossorigin>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-P3CDRKL');
	</script>
	<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo('charset'); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo THEME_URL; ?>/img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo THEME_URL; ?>/img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME_URL; ?>/img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEME_URL; ?>/img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEME_URL; ?>/img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo THEME_URL; ?>/img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME_URL; ?>/img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo THEME_URL; ?>/img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_URL; ?>/img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo THEME_URL; ?>/img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_URL; ?>/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo THEME_URL; ?>/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_URL; ?>/img/favicon-16x16.png">
	<link rel="manifest" href="<?php echo THEME_URL; ?>/img/manifest.json">
	<meta name="msapplication-TileColor" content="#202860">
	<meta name="msapplication-TileImage" content="<?php echo THEME_URL; ?>/img/ms-icon-144x144.png">
	<meta name="theme-color" content="#202860">
	<meta name="facebook-domain-verification" content="qfxv7m8vgzuy92524k4r4hd4s81uor" />

	<title><?php wp_title(''); ?></title>

	<?php wp_head(); ?>


	<link rel="preconnect" href="https://fonts.gstatic.com">

	<!--[if lt IE 9]>
    <script src="<?php echo THEME_URL; ?>/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="<?php echo THEME_URL; ?>/js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
	<!-- Facebook Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '242733306820435');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=242733306820435&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->

	<noscript>
		<style>
			.preloader-wrapper {
				display: none;
			}
		</style>
	</noscript>
	<!-- Hotjar Tracking Code for https://www.merkson.pl -->
	<script>
		(function(h, o, t, j, a, r) {
			h.hj = h.hj || function() {
				(h.hj.q = h.hj.q || []).push(arguments)
			};
			h._hjSettings = {
				hjid: 2821763,
				hjsv: 6
			};
			a = o.getElementsByTagName('head')[0];
			r = o.createElement('script');
			r.async = 1;
			r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
			a.appendChild(r);
		})(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
	</script>

</head>
<?php
$browserDetect = coala_mobile_detect();
$pagebuilderDetect = coala_pagebuilder(get_the_ID());
$dark_background = get_field('dark_background', get_the_ID());
if ($dark_background) {
	$background_color = 'dark-background';
} else {
	$background_color = '';
}
?>

<body <?php body_class($pagebuilderDetect . ' ' . $browserDetect[0] . ' ' . $background_color); ?> <?php echo $browserDetect[1]; ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3CDRKL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php

	if (TEMPL_PRELOADER) {
		// preloader ON
		get_template_part('theme_part/header', 'preloader');
	}

	get_template_part('theme_part/header');
