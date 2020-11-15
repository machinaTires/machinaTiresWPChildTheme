<?php

    // Load the TGM init if it exists
    /*if ( file_exists( dirname( __FILE__ ) . '/tgm/tgm-init.php' ) ) {
        require_once dirname( __FILE__ ) . '/tgm/tgm-init.php';
    }*/

    // Load the embedded Redux Framework
    if ( file_exists( dirname( __FILE__ ).'/redux-framework/framework.php' ) ) {
        require_once dirname(__FILE__).'/redux-framework/framework.php';
    }

    // Load the theme/plugin options
    if ( file_exists( dirname( __FILE__ ) . '/options-init.php' ) ) {
        require_once dirname( __FILE__ ) . '/options-init.php';
    }

    // Load custom field options
    if ( file_exists( dirname( __FILE__ ) . '/custom.php' ) ) {
        require_once dirname( __FILE__ ) . '/custom.php';
    }
    
    // Load Redux extensions
    if ( file_exists( dirname( __FILE__ ) . '/redux-extensions/extensions-init.php' ) ) {
        require_once dirname( __FILE__ ) . '/redux-extensions/extensions-init.php';
    }
    
    // Load Redux extensions
    if ( file_exists( dirname( __FILE__ ) . '/sample-config.php' ) ) {
        //require_once dirname( __FILE__ ) . '/sample-config.php';
    }