<?php
class PageTest
{
    $type = '404';
    $page = '';

    function __construct()
    {
    }

    public function setPageType( $type )
    {
        $this->type = $type;
    }

    public function getPageType()
    {
        return $this->type;
    }
}
?>
