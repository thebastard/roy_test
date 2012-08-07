<?php
class Template
{
    private $header;
    private $content;
    private $footer;
    private $type;
    private $template;
    
    function __construct( $type )
    {
        $this->type = $type;
        $this->setTemplate();
    }

    function __destruct()
    {
    }

    private function header()
    {
        return include( SITE_PATH . "header.php" );
    }

    private function content()
    {
        return include( SITE_PATH . $this->type . ".php" );
    }

    private function footer()
    {
        return include( SITE_PATH . "footer.php" );
    }

    public function setTemplate()
    {
        $this->template = $this->header;
        $this->template .= $this->content;
        $this->template .= $this->footer;
    }

    public function getTemplate()
    {
        return $this->template;
    }
}
?>
