<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Tevent_Assets {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_css' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_js' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_front_back_css' ) );
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_customizer_css' ) );
	}

	public function enqueue_front_back_css() {
		wp_enqueue_style(
			'bicon',
			TEVENT_ASSETS_URI . 'vendor/bicon/css/bicon.min.css',
			array(),
			TEVENT_VERSION
			);
	}

	protected function get_inline_css() {
		$css = <<<TEVENT_CSS
		.mfp-close-btn-in .mfp-close,
		.creative-inline::after,
		.bg-primary,
		.label-primary,
		nav.navbar.bootsnav ul.nav li.dropdown > ul.dropdown-menu,
		nav.navbar.bootsnav ul.nav li.dropdown > ul.dropdown-menu li:hover > a,
		ul.cart-list > li.total > .btn,
		.attr-nav > ul > li > a span.badge,
		nav.navbar .share ul > li > a:hover,
		nav.navbar .share ul > li > a:focus,
		.btn-default:hover,
		.btn-default:focus,
		.btn-default.focus,
		.btn-default:active,
		.btn-default.active,
		.btn-default:active:hover,
		.btn-default:active:focus,
		.btn-primary,
		.btn-play--primary,
		.btn-play--hoverGradient:hover,
		.btn-play--hoverPrimary:hover,
		.BackToTop:hover,
		.Heading-wing::before,
		.Heading-wing::after,
		.Heading-wing--darker,
		.Dot,
		.Blurb:hover .Blurb__hoverBg,
		.Blurb--hoverBg:hover,
		.blurbMultiColor .blurb--primary,
		.ImageBlock__image__title::after,
		.nav-tabs > li.active::before,
		.panel-primary .panel-title > a[aria-expanded="true"],
		.progress--primary .progress-bar,
		.bg-dark .progress.progress--primary .progress-bar,
		.bg-darker .progress.progress--primary .progress-bar,
		.product-item .product-overlay,
		.product-item .sale-label,
		.portfolio-nav,
		.Thumb--primary {
		    background: [PRIMARY];
		}

		a:hover,
		a:focus,
		a:active,
		.text-primary,
		nav.navbar.bootsnav ul.nav > li:hover > a,
		nav.navbar.bootsnav ul.nav > li.active > a,
		.btn-link,
		.btn-shadow:hover,
		.btn-shadow:focus,
		.btn-shadow.focus,
		.btn-white:hover,
		.btn-white:focus,
		.btn-white.focus,
		.btn-white:active,
		.btn-white.active,
		.btn-white:active:hover,
		.btn-white:active:focus,
		.btn-play,
		.btn-play:hover,
		.btn-play--hoverGradient,
		.Blurb:hover .Blurb__hoverText,
		.Blurb:hover .Blurb__hoverBtn.btn-default,
		.Blurb--hoverBg:hover .Blurb__hoverBtn.btn-default:hover,
		.Blurb--hoverBg:hover .Blurb__hoverBtn.btn-default:focus,
		.Blurb--hoverBg:hover .Blurb__hoverBtn.btn-default:active:hover,
		.Blurb--hoverBg:hover .Blurb__hoverBtn.btn-default:active:focus,
		.Shortcode__,
		.nav-tabs > li > a h2,
		.panel-shadow .panel-title > a[aria-expanded="true"],
		.panel-border .panel-title > a[aria-expanded="true"],
		.product-item .product-price,
		.portfolio-grid .portfolio-item .portfolio-image .portfolio-hover-title .portfolio-content .portfolio-category span,
		.default-color,
		.Thumb--primaryOutline {
		    color: [PRIMARY];
		}

		.Blockquote--borderLeft2 {
		    border-left: 2px solid [PRIMARY];
		}
		.Blockquote--borderLeft5 {
		    border-left: 5px solid [PRIMARY];
		}

		ul.cart-list > li.total > .btn,
		.btn-default:hover,
		.btn-default:focus,
		.btn-default.focus,
		.btn-default:active,
		.btn-default.active,
		.btn-default:active:hover,
		.btn-default:active:focus,
		.btn-primary,
		.form-control:focus,
		.bg-darker .form-control:focus,
		.bg-dark .form-control:focus,
		.Blurb:hover .Blurb__hoverBtn.btn-default,
		.panel-primary .panel-title > a[aria-expanded="true"],
		.Thumb--primaryOutline {
		    border-color: [PRIMARY];
		}

		.btn-play:hover {
		    color: #fff;
		}

		@media screen and (max-width: 992px) {
		    .portfolio-nav:before {
		        background: [PRIMARY];
		    }
		}

		nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li a:hover,
		nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li a:hover {
		    background-color: rgba(0,0,0,.3) !important;
		}

		.mfp-close-btn-in .mfp-close:hover {
		    background: [SECONDARY];
		}

		.text-secondary {
		    color: [SECONDARY];
		}

		.btn-primary:hover,
		.btn-primary:focus,
		.btn-primary.focus,
		.btn-primary:active,
		.btn-primary.active,
		.btn-primary:active:hover,
		.btn-primary:active:focus {
		    border-color: [SECONDARY];
		    background-color: [SECONDARY];
		}
TEVENT_CSS;

	return $css;
	}

	public function enqueue_css() {
		$this->enqueue_front_back_css();
		
		wp_enqueue_style(
			'tevent-plugins',
			TEVENT_ASSETS_URI . 'css/plugins.css',
			array(),
			TEVENT_VERSION
			);

		wp_enqueue_style(
			'tevent',
			TEVENT_ASSETS_URI . 'css/main.css',
			array(),
			TEVENT_VERSION
			);

		if ( Tevent::get_option( 'theme_color_override' ) ) :
			wp_add_inline_style(
				'tevent',
				str_replace(
					array(
						'[PRIMARY]',
						'[SECONDARY]',
						),
					array(
						Tevent::get_option( 'theme_color_primary' ),
						Tevent::get_option( 'theme_color_secondary' ),
						),
					$this->get_inline_css() )
				);
		endif;
	}

	public function enqueue_js() {
		wp_enqueue_script(
			'bootstrap',
			TEVENT_ASSETS_URI . 'vendor/bootstrap/js/bootstrap.min.js',
			array( 'jquery' ),
			TEVENT_VERSION,
			true
			);

		wp_enqueue_script(
			'bootsnav',
			TEVENT_ASSETS_URI . 'vendor/bootsnav/js/bootsnav.js',
			array( 'jquery' ),
			TEVENT_VERSION,
			true
			);

		wp_enqueue_script(
			'headroom',
			TEVENT_ASSETS_URI . 'vendor/headroom/headroom.min.js',
			array( 'jquery' ),
			TEVENT_VERSION,
			true
			);

		wp_enqueue_script(
			'jquery.countdown',
			TEVENT_ASSETS_URI . 'vendor/jquery.countdown/jquery.countdown.min.js',
			array( 'jquery' ),
			TEVENT_VERSION,
			true
			);

		wp_enqueue_script(
			'magnific-popup',
			TEVENT_ASSETS_URI . 'vendor/magnific-popup/jquery.magnific-popup.min.js',
			array( 'jquery' ),
			TEVENT_VERSION,
			true
			);

		wp_enqueue_script(
			'owl-carousel',
			TEVENT_ASSETS_URI . 'vendor/owl.carousel2/owl.carousel.min.js',
			array( 'jquery' ),
			TEVENT_VERSION,
			true
			);

		wp_enqueue_script(
			'imagesloaded',
			TEVENT_ASSETS_URI . 'vendor/imagesloaded/imagesloaded.js',
			array( 'jquery' ),
			TEVENT_VERSION,
			true
			);

		wp_enqueue_script(
			'jquery.waypoints',
			TEVENT_ASSETS_URI . 'vendor/waypoints/jquery.waypoints.min.js',
			array( 'jquery' ),
			TEVENT_VERSION,
			true
			);

		wp_enqueue_script(
			'waypoints-sticky',
			TEVENT_ASSETS_URI . 'vendor/waypoints/sticky.min.js',
			array( 'jquery' ),
			TEVENT_VERSION,
			true
			);

		wp_enqueue_script(
			'isotope',
			TEVENT_ASSETS_URI . 'vendor/isotope/isotope.pkgd.min.js',
			array( 'jquery' ),
			TEVENT_VERSION,
			true
			);

		wp_enqueue_script(
			'ajaxchimp',
			TEVENT_ASSETS_URI . 'vendor/mailchimp/jquery.ajaxchimp.min.js',
			array( 'jquery' ),
			TEVENT_VERSION,
			true
			);

		wp_enqueue_script(
			'tevent',
			TEVENT_ASSETS_URI . 'js/main.js',
			array( 'jquery' ),
			TEVENT_VERSION,
			true
			);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	public function enqueue_customizer_css() {
		wp_enqueue_style(
			'tevent-customizer',
			TEVENT_ASSETS_URI . 'css/customizer.css',
			array(),
			TEVENT_VERSION
			);
	}

}
