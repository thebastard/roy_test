<?php
class Config 
{
    private $hostname;
    private $username;
    private $password;
    private $database;
    private $prefix;
    
    function __construct( $hostname = NULL, $username = NULL, $password = NULL, $database = NULL, $prefix = NULL )
    {
        $this->hostname = !empty( $hostname ) ? $hostname : "";
        $this->username = !empty( $username ) ? $username : "";
        $this->password = !empty( $password ) ? $password : "";
        $this->database = !empty( $database ) ? $database : "";
        $this->prefix = !empty( $prefix ) ? $prefix : "";
    }

    function __destruct()
    {
    }
}
?>
