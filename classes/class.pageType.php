<?php
class PageType
{
    $type = '';
    $page = '';

    function __construct( $page )
    {
        $this->page = $page;
        setPageType( $this->page );
    }

    private function getPageTypeFromPage( $page )
    {
        switch( $page )
        {
            case "":        $type = 'home';     break;
            case "news":    $type = 'news';     break;
        }

        if( !empty( $page ) && !empty( $type ) )
        {
            $type = '404';
        }

        return $type;
    }

    public function setPageType( $page )
    {
        $this->type = getPageTypeFromPage( $page );
    }

    public function getPageType()
    {
        return $this->type;
    }
}
?>
