<?php
$theme = "light";
if (get_field("dark_theme")) {
	$theme = "dark";
}
?>
<!doctype html>
<html <?php language_attributes(); ?> data-theme="<?= $theme ?>">

<head>
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
		})(window, document, 'script', 'dataLayer', 'GTM-MML9G7B');
	</script>
	<!-- End Google Tag Manager -->


	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<link href="<?= get_template_directory_uri() . '/assets/img/faviconmonty.webp' ?>" rel="shortcut icon">
	<link href="<?= get_template_directory_uri() . '/assets/img/faviconmonty.webp' ?>" rel="apple-touch-icon-precomposed">

	<meta name="facebook-domain-verification" content="ed9xv4360f49lzzzg7bt1ehtsahj9k" />
	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-FCLLMVSZJ1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-FCLLMVSZJ1');
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-199567258-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-199567258-1');
	</script>
	<script type="text/javascript">
		_linkedin_partner_id = "609028";
		window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
		window._linkedin_data_partner_ids.push(_linkedin_partner_id);
	</script>
	<script type="text/javascript">
		(function(l) {
			if (!l) {
				window.lintrk = function(a, b) {
					window.lintrk.q.push([a, b])
				};
				window.lintrk.q = []
			}
			var s = document.getElementsByTagName("script")[0];
			var b = document.createElement("script");
			b.type = "text/javascript";
			b.async = true;
			b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
			s.parentNode.insertBefore(b, s);
		})(window.lintrk);
	</script>
	<noscript>
		<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=609028&fmt=gif" />
	</noscript>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-979460023"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'AW-979460023');
	</script>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16690522364">
	</script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'AW-16690522364');
	</script>
	<!-- Event snippet for Sign-Up conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
	<script>
		function gtag_report_conversion(url) {
			var callback = function() {
				if (typeof(url) != 'undefined') {
					window.location = url;
				}
			};
			gtag('event', 'conversion', {
				'send_to': 'AW-16690522364/e9ogCIbNws8ZEPzR1JY-',
				'event_callback': callback
			});
			return false;
		}
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<?php if (!get_field("disable_header")) : ?>
			<?= get_template_part("template-parts/search"); ?>
			<div class="mobile-menu">
				<?=
				wp_nav_menu(
					array(
						'menu'            => 'main-menu',
						'container'       => 'div',
						'container_class' => 'menu-{menu slug}-container',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul>%3$s</ul>',
						'depth'           => 0,
						'walker'          => new AWP_Menu_Walker()
					)
				);
				?>
				<a href="<?= home_url('/contact-us/') ?>" class="mb-3 mm-button inside-menu d-block d-lg-none border-0">Contact An Expert</a>
				<a target="_blank" href="https://app.montymobile.com/sign-up" class="mm-button inside-menu d-block d-lg-none border-0">Sign Up For Free</a>
			</div>
			<div class="background-container">
				<div class="stars"></div>
				<div class="twinkling"></div>
			</div>
			<header>
				<div class="container-fluid">
					<div class="header-content px-0 px-lg-5">
						<span class="burger-wrapper">
							<div id="burger">
								<div></div>
								<div></div>
								<div></div>
							</div>
						</span>
						<div class="logo-wrapper">
							<a href="<?= home_url(); ?>">
								<img class="header-logo" src="<?= get_field('logo', 'options') ?>" alt="Monty Mobile Logo">
							</a>
						</div>
						<div class="menu-wrapper">
							<?= get_template_part("template-parts/menu"); ?>
						</div>
						<div class="right-content-wrapper d-flex align-items-center">
							<a href="<?= home_url('/contact-us/') ?>" class="mm-button transparent d-none d-xl-inline-block">Contact An Expert</a>
							<a target="_blank" href="https://app.montymobile.com/sign-up" class="mm-button d-none d-xl-inline-block">Sign Up For Free</a>
							<a href="#" class="search-icon" id="search-btn">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" height="25px" width="25px" version="1.1" id="Capa_1" viewBox="0 0 490.4 490.4" xml:space="preserve" stroke="#ffffff">

									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>

									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>

									<g id="SVGRepo_iconCarrier">
										<g>
											<path d="M484.1,454.796l-110.5-110.6c29.8-36.3,47.6-82.8,47.6-133.4c0-116.3-94.3-210.6-210.6-210.6S0,94.496,0,210.796 s94.3,210.6,210.6,210.6c50.8,0,97.4-18,133.8-48l110.5,110.5c12.9,11.8,25,4.2,29.2,0C492.5,475.596,492.5,463.096,484.1,454.796z M41.1,210.796c0-93.6,75.9-169.5,169.5-169.5s169.6,75.9,169.6,169.5s-75.9,169.5-169.5,169.5S41.1,304.396,41.1,210.796z"></path>
										</g>
									</g>

								</svg>
							</a>

						</div>
					</div>
				</div>
			</header>

		<?php endif; ?>