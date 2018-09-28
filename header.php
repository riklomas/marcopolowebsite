<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marcopolo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div>
	<div id="page" class="site">
		

		<header id="masthead" class="site-header header-inner flex no-wrap width-100 justify-ends fixed container z-9999">
			<div class="site-branding z-9999">
				<a href="/index.php">

						<svg class="logo soft-transition" viewBox="0 0 105 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<defs></defs>
								<g id="marcopolo-logo" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="download" transform="translate(-1.000000, -1.000000)" fill="#FFFFFF" fill-rule="nonzero">
												<path d="M6.957,19.057 L6.212,22.04 C7.329,19.992 9.19,17.2 11.238,17.014 C11.6181151,16.9346892 12.0134268,17.0381671 12.3059328,17.2935451 C12.5984387,17.5489231 12.7543032,17.9266601 12.727,18.314 C12.5556656,19.3856544 12.3066765,20.4434404 11.982,21.479 C13.471,18.687 15.333,16.639 17.008,16.453 C17.8688177,16.350292 18.6697921,16.9095115 18.87,17.753 C18.9013596,18.5153505 18.7747068,19.2759479 18.498,19.987 C18.0907161,21.5651003 17.5935722,23.1186335 17.009,24.64 C16.823,25.012 17.009,25.198 17.195,25.198 C17.567,25.198 18.684,24.081 19.243,23.336 C19.429,23.336 19.801,23.522 19.801,23.708 C18.8745297,25.7284263 16.9777156,27.1334877 14.775,27.431 C14.2118798,27.4746886 13.716475,27.0617773 13.658,26.5 C13.6285182,26.0584318 13.6918793,25.6155851 13.844,25.2 C14.402,23.338 14.961,21.663 15.519,19.8 C15.6453681,19.4412861 15.7083081,19.0633073 15.705,18.683 C15.6914569,18.4834287 15.5325713,18.3245431 15.333,18.311 C15.147,18.311 14.402,18.87 13.658,20.173 C12.358,22.034 11.424,25.013 10.493,27.433 C10.307,27.991 10.121,27.991 9.562,27.991 C8.445,28.177 7.7,27.991 7.7,27.433 C7.7,27.061 8.817,23.152 9.562,20.359 C9.68836808,20.0002861 9.75130814,19.6223073 9.748,19.242 C9.73445688,19.0424287 9.57557131,18.8835431 9.376,18.87 C9.004,18.87 8.259,19.428 7.514,20.732 C6.26641782,23.0394188 5.2681216,25.473143 4.536,27.992 C4.3970593,28.3750798 4.00834059,28.6080605 3.605,28.55 C2.488,28.736 1.744,28.55 1.744,27.992 C1.744,27.62 3.233,21.849 3.605,20.732 C3.791,19.801 3.791,19.615 3.419,19.801 C2.488,19.801 1.93,20.918 1.557,21.476 C1.371,21.476 0.999,21.29 0.999,21.104 C1.70769384,19.2114765 3.45174319,17.9034395 5.467,17.753 C7.143,17.568 7.143,18.313 6.957,19.057 Z" id="path"></path>
												<path d="M29.295,16.265 L29.667,14.965 C29.853,14.779 30.039,14.779 30.412,14.779 L31.343,14.779 C31.7093956,14.84947 32.0391242,15.0470946 32.274,15.337 C31.529,17.757 30.785,20.737 30.04,23.528 C30.04,23.9 30.04,24.086 30.226,24.086 C31.1188753,23.6689865 31.8885296,23.0278375 32.46,22.225 C32.7605278,22.2427233 33.0002767,22.4824722 33.018,22.783 C32.0193471,24.5160365 30.3242893,25.7365218 28.364,26.134 C27.8255359,26.1079381 27.3696423,25.7279588 27.247,25.203 C27.2313347,24.8218256 27.2946606,24.4415299 27.433,24.086 L27.991,22.038 L27.809,22.038 C26.509,24.086 24.272,26.32 22.597,26.506 C21.852,26.506 20.922,25.948 20.922,25.206 C20.736,23.717 21.853,20.552 24.087,18.132 C25.1570084,16.779492 26.6760851,15.8549909 28.369,15.526 C28.364,15.707 28.923,15.893 29.295,16.265 Z M27.62,17.01 C27.248,17.01 26.875,17.382 26.131,18.499 C25.009,20.176 24.083,22.776 24.269,24.27 L24.269,24.456 C24.2825431,24.6555713 24.4414287,24.8144569 24.641,24.828 C25.199,24.828 26.503,23.153 27.061,22.036 C27.806,20.736 28.55,18.685 28.922,17.936 C28.364,17.01 27.992,16.824 27.62,17.01 Z" id="path-2"></path>
												<path d="M43.257,15.52 C43.443,17.009 42.512,18.126 41.768,18.126 C41.21,18.126 41.21,17.754 41.023,17.009 C40.837,16.637 40.837,16.451 40.651,16.451 C40.279,16.451 39.72,17.568 39.162,18.871 C38.3128847,20.8593645 37.6279315,22.9138894 37.114,25.014 C36.8883339,25.4083118 36.4478088,25.6283772 35.997,25.572 C35.439,25.572 34.322,25.572 34.508,24.641 C35.066,22.221 35.625,19.615 36.183,17.381 C36.369,16.823 36.369,16.636 35.997,16.636 C35.625,16.636 34.697,17.567 34.136,18.311 C33.9823939,18.3326088 33.8275579,18.2808129 33.7178725,18.1711275 C33.6081871,18.0614421 33.5563912,17.9066061 33.578,17.753 C34.1905386,16.1268301 35.5974381,14.9307955 37.301,14.588 C38.79,14.402 38.976,15.519 38.601,16.822 L37.856,19.614 L38.042,19.614 C38.787,18.125 39.342,17.008 39.717,16.077 C40.462,14.96 41.017,14.216 41.951,14.029 C42.698,14.031 43.257,14.403 43.257,15.52 Z" id="path-3"></path>
												<path d="M43.443,21.849 C43.4129394,19.859273 43.9979112,17.9087851 45.118,16.264 C46.0574459,14.7416954 47.6271445,13.717963 49.399,13.472 C50.888,13.286 52.005,13.844 52.191,15.147 C52.2685301,15.5773896 52.1441457,16.0195462 51.853596,16.3463901 C51.5630464,16.6732341 51.1385091,16.8485683 50.702,16.822 C50.1957787,16.8878271 49.7187335,16.5696546 49.585,16.077 C49.585,15.519 49.399,14.588 49.026,14.588 C48.653,14.588 48.095,15.146 47.726,16.263 C47.0889524,17.7266214 46.832663,19.3276563 46.981,20.917 C47.167,22.034 47.539,22.592 48.098,22.406 C48.657,22.406 49.587,21.848 50.518,20.544 C50.6718047,20.5223169 50.8268513,20.5742349 50.9365847,20.684165 C51.0463181,20.7940951 51.0979585,20.9492344 51.076,21.103 C50.1314646,22.884433 48.4108369,24.1240687 46.422,24.456 C44.56,24.641 43.63,23.524 43.443,21.849 Z" id="path-4"></path>
												<path d="M62.803,15.707 C62.9033164,17.7361098 62.2388869,19.7290414 60.941,21.292 C59.8999747,22.5209557 58.4380605,23.3175207 56.841,23.526 C54.235,23.712 53.118,22.226 52.932,20.361 C52.8091579,18.1838846 53.5443892,16.0453237 54.98,14.404 C55.9259226,13.3155523 57.264666,12.6463604 58.703,12.543 C61.5,12.17 62.617,13.845 62.803,15.707 Z M57.777,14.59 C57.032,15.89 55.729,18.871 55.916,21.29 C55.9006359,21.5413125 55.9937785,21.7871484 56.1718151,21.9651849 C56.3498516,22.1432215 56.5956875,22.2363641 56.847,22.221 C57.405,22.221 57.964,21.476 58.522,20.36 C59.3852289,18.4931193 59.828965,16.4597837 59.822,14.403 C59.822,13.844 59.636,13.286 59.077,13.472 C58.708,13.473 58.335,13.845 57.777,14.59 Z" id="path-5"></path>
												<path d="M70.249,11.611 C70.621,11.611 70.807,11.425 70.994,11.425 C74.159,11.053 75.276,12.725 75.462,14.59 C75.6020228,16.2208219 75.0633475,17.8372097 73.973,19.058 C72.8319167,20.6365974 71.070793,21.6525183 69.133,21.85 C68.7510893,21.8795694 68.3677208,21.8157318 68.016,21.664 C67.83,21.664 67.83,21.85 67.644,22.036 L66.899,25.387 C66.713,26.318 66.713,26.876 67.644,26.876 L68.759,26.876 C68.9312522,26.9674214 69.0389398,27.1464905 69.0389398,27.3415 C69.0389398,27.5365095 68.9312522,27.7155786 68.759,27.807 L66.898,27.993 C65.409,28.179 63.92,28.365 61.872,28.738 C61.5,28.552 61.5,28.18 61.686,27.807 L62.431,27.621 C63.548,27.435 63.731,26.876 64.106,25.201 L66.898,13.287 C66.0541944,13.6473292 65.2443022,14.0823952 64.478,14.587 C64.106,14.587 63.92,14.215 64.106,13.842 C65.0265335,12.9710853 66.0993742,12.2768743 67.271,11.794 L67.829,9.932 C68.1585558,9.6704685 68.538965,9.4804342 68.946,9.374 C69.877,9.374 70.435,9.374 70.621,9.746 L70.249,11.611 Z M68.387,19.611 C68.387,19.983 68.201,20.356 68.573,20.542 C68.7782558,20.7381229 69.0378984,20.86777 69.318,20.914 C69.9143855,20.7895888 70.4052127,20.3678549 70.618,19.797 C71.5827612,18.2996737 72.100348,16.5581954 72.11,14.777 C71.924,13.288 71.179,12.729 70.248,12.916 L69.876,12.916 L68.387,19.611 Z" id="path-6"></path>
												<path d="M87.188,13.287 C87.2883164,15.3161098 86.6238869,17.3090414 85.326,18.872 C84.2850365,20.1010317 82.8230908,20.8976138 81.226,21.106 C78.62,21.292 77.503,19.806 77.317,17.941 C77.1940501,15.7638696 77.929295,13.6252691 79.365,11.984 C80.3106819,10.8950924 81.649487,10.2255101 83.088,10.122 C85.885,9.75 87.002,11.425 87.188,13.287 Z M82.162,12.17 C81.417,13.47 80.114,16.452 80.3,18.87 C80.2846359,19.1213125 80.3777785,19.3671484 80.5558151,19.5451849 C80.7338516,19.7232215 80.9796875,19.8163641 81.231,19.801 C81.789,19.801 82.348,19.056 82.907,17.939 C83.7706017,16.0728771 84.2150137,14.0402555 84.209,11.984 C84.209,11.426 84.023,10.867 83.464,11.053 C82.8668564,11.1767917 82.3751575,11.5986255 82.162,12.17 Z" id="path-7"></path>
												<path d="M88.864,19.057 C88.8541742,18.55431 88.9168175,18.052826 89.05,17.568 L92.028,4.723 C92.214,3.792 92.214,3.606 91.656,3.234 L90.911,2.862 C90.8232764,2.79607639 90.7716664,2.69273308 90.7716664,2.583 C90.7716664,2.47326692 90.8232764,2.36992361 90.911,2.304 C92.3574873,1.73409553 93.8530435,1.29761272 95.379,1 C95.564,1 95.564,1 95.564,1.186 C95.3163955,2.31948646 95.0055766,3.43823422 94.633,4.537 L92.028,17.009 C91.842,17.754 91.842,18.126 92.214,18.126 C92.772,18.126 94.076,16.451 94.634,15.706 C94.9345278,15.7237233 95.1742767,15.9634722 95.192,16.264 C94.5729719,18.387651 92.7366475,19.9300214 90.538,20.173 C89.236,20.174 88.864,19.615 88.864,19.057 Z" id="path-8"></path>
												<path d="M105.618,11.425 C105.718693,13.4539922 105.054614,15.4469434 103.757,17.01 C102.715975,18.2389557 101.254061,19.0355207 99.657,19.244 C97.051,19.43 95.934,17.944 95.748,16.079 C95.6249423,13.9018547 96.3602008,11.7632146 97.796,10.122 C98.7416819,9.03309241 100.080487,8.3635101 101.519,8.26 C102.496152,8.03761976 103.521555,8.26355857 104.314757,8.87602076 C105.107958,9.48848294 105.585951,10.4233757 105.618,11.425 Z M100.778,10.308 C100.033,11.608 98.73,14.589 98.916,17.008 C98.9006359,17.2593125 98.9937785,17.5051484 99.1718151,17.6831849 C99.3498516,17.8612215 99.5956875,17.9543641 99.847,17.939 C100.406,17.939 100.964,17.194 101.522,16.077 C102.385291,14.2101401 102.82903,12.1767906 102.822,10.12 C102.822,9.562 102.636,9.003 102.077,9.189 C101.489838,9.33255232 101.006907,9.74856403 100.778,10.308 Z" id="path-9"></path>
										</g>
								</g>
						</svg>
				
				</a>
			</div>

			<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
			</nav>
			
			<div class="menu-mobile mobile">
				<div class="menu-trigger mobile z-9999">
					<svg class="menu-trigger-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.042 9.16">
						<defs>
							<style>
								.cls-1 {
									fill: none;
									stroke: #8d64a9;
									stroke-width: 2px;
								}
							</style>
						</defs>
						<g id="Group_137" data-name="Group 137" transform="translate(-312.186 -40.431)">
							<line id="line" class="cls-1" x2="28.198" transform="translate(312.186 41.431)"/>
							<line id="line-2" data-name="line" class="cls-1" x2="28.198" transform="translate(312.186 48.591)"/>
						</g>
					</svg>
				</div>
				
		</header><!-- #masthead -->

		<div id="content" class="site-content relative" id="main">


			<div class="menu-mobile-container fixed top-0 left-0 w-100 h-100vh z-9 flex flex-column justify-between">
						<div class="menu-mobile-nav z-9999 container tungsten ttu white list mb4 ml-0">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
							?>
						
								<div class="menu-mobile-subnav mt5">
										<a class="gt-pressura-mono white h4-big db mb2">Behance</a>
										<a class="gt-pressura-mono white h4-big db">Instagram</a>
								</div>

									<div class="menu-mobile-directions align-end mt5">

										<a class="gt-pressura-mono white h4-big">Av. del Libertador 7766, <br>Buenos Aires, Argentina</a>
								</div>
						</div>
				
			</div><!-- .menu-mobile-container -->
