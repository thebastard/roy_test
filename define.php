<?php
// Database settings
define( "HOST_NAME", "localhost" );
define( "USER_NAME", "" );
define( "PASSWORD", "" );
define( "DATABASE", "" );

// Global variables
$request_uri = ( empty( $_SERVER["REQUEST_URI"] ) || $_SERVER["REQUEST_URI"] == "/" ) ? "/" : $_SERVER["REQUEST_URI"];
define( "REQUEST_URI", $request_uri );
define( 'CLASS_DIR', dirname( __FILE__ ) . "/classes" );
define( "SITE_DIR", dirname( __FILE__ ) );
define( "SITE_NAME", "" );
define( "SITE_URL", "" );

// Classes
function __autoload( $class_name ) 
{
    require( CLASS_DIR . '/class.' . $class_name . '.php' );
}
?>
