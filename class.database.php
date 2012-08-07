<?php
class Database
{
    private $connection;
    private $selectdb;
    private $lastQuery;
    private $config;
    
    function __construct( $config )
    {
        $this->config = $config;
    }

    function __destruct()
    {
    }

    public function openConnection()
    {
        try
        {
            $this->connection = mysqli_connect( $this->config->hostname, $this->config->username, $this->config->password );
            if( !is_object( $this->connection ) ) {
                throw new exception('Could not connect to ' . $this->config->hostname );
            }
            $this->selectdb = mysqli_select_db( $this->connection, $this->config->database );
        }
        catch( exception $e )
        {
            return $e;
        }
    }

    public function closeConnection()
    {
        try
        {
            mysqli_close( $this->connection );
        }
        catch( exception $e )
        {
            return $e;
        }
    } 

    public function ecapeString( $string )
    {
        return mysqli_real_escape_string( $this->connection, $string );
    }

    public function query( $query )
    {
        $query = str_replace( "}", "", $query );
        $query = str_replace( "{", $this->config->prefix, $query );

        try
        {
            if( empty( $this->connection ) )
            {
                $this->openConnection();
                
                $this->lastQuery = mysqli_query( $this->connection, $this->ecapeString( $query ) );
                
                $this->closeConnection();
                
                return $this->lastQuery;
            }
            else
            {
                 $this->lastQuery = mysqli_query( $this->connection, $this->ecapeString( $query ) );
                 
                 return $this->lastQuery;
            }
        }
        catch( exception $e )
        {
            return $e;
        }
    }

    public function lastQuery()
    {
        return $this->lastQuery;
    }

    public function pingServer()
    {
        try 
        {
            if( !mysqli_ping( $this->connection ) )
            {
                return false;
            }
            else
            {
                return true;
            }
        }
        catch( exception $e )
        {
            return $e;
        }
    }

    public function hasRows( $result )
    {
        try
        {
            if( mysqli_num_rows( $result ) > 0 )
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch( exception $e )
        {
            return $e;
        }
    }

    public function countRows( $result )
    {
        try
        {
            return mysqli_num_rows( $result );
        }
        catch( exception $e )
        {
            return $e;
        }
    }

    public function fetchAssoc( $result )
    {
        try
        {
            return mysqli_fetch_assoc( $result );
        }
        catch( exception $e )
        {
            return $e;
        }
    }

    public function fetchArray( $result )
    {
        try
        {
            return mysqli_fetch_assoc( $result );
        }
        catch( exception $e )
        {
            return $e;
        }
    }
}
?>
