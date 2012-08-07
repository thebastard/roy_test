<?php
define( "HOST_NAME", "localhost" );
define( "USER_NAME", "" );
define( "PASSWORD", "" );
define( "DATABASE", "" );

define( 'CLASS_DIR', dirname(__FILE__) . "/classes");

define( "SITE_NAME", "" );
define( "SITE_URL", "" );

function __autoload( $class_name ) 
{
    require( CLASS_DIR . '/class.' . $class_name . '.php' );
}
?>
