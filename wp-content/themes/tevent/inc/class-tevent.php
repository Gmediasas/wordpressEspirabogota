<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Tevent {

    public function __construct() {
        $this->includes();
        $this->init();
    }

    public function includes() {
        /**
         * Custom template tags for this theme.
         */
        require_once TEVENT_INC_DIR . 'template-tags.php';

        /**
         * Custom functions that act independently of the theme templates.
         */
        require_once TEVENT_INC_DIR . 'extras.php';

        require_once TEVENT_INC_DIR . 'hooks.php';
        require_once TEVENT_INC_DIR . 'class-tevent-setup.php';
        require_once TEVENT_INC_DIR . 'class-tevent-widgets.php';
        require_once TEVENT_INC_DIR . 'class-tevent-assets.php';
        require_once TEVENT_INC_DIR . 'class-tevent-walker-comment.php';
        require_once TEVENT_INC_DIR . 'options.php';
        require_once TEVENT_LIB_DIR . 'wp-bootstrap-navwalker.php';

        if ( ! function_exists( 'breadcrumb_trail' ) || ! class_exists( 'Breadcrumb_Trail' ) ) {
            require_once TEVENT_LIB_DIR . 'breadcrumb-tail.php';
        }

        if ( is_admin() ) {
            require_once TEVENT_INC_DIR . 'meta.php';
            require_once TEVENT_INC_DIR . 'dependencies.php';
            require_once TEVENT_INC_DIR . 'demo.php';
        }
    }

    public function init() {
        new Tevent_Setup();
        new Tevent_Widgets();
        new Tevent_Assets();
    }


    public static function get_option( $field, $default = '' ) {
        if ( ! class_exists( 'TitanFramework' ) ) {
            return $default;
        }
        
        $titan = TitanFramework::getInstance( 'tevent' );
        $value = $titan->getOption( $field );
        return $value ? $value : $default;
    }

}
