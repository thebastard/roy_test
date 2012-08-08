<?php
session_start();

include('define.php');

$pageType = new PageType( REQUEST_URI );
$template = new Template( $pageType->getPageType() );
echo $template->getTemplate();

/**
  * how it works **

$config = new Config( HOST_NAME, USER_NAME, PASSWORD, DATABASE, '' );
$db = new Database( $config );

$ping = $db->pingServer();
echo $ping;

$sql = $db->query("SELECT * FROM {table}");

$hasRows = $db->hasRows($sql);
echo "Heeft ie rijen: " . $hasRows;

$countRows = $db->countRows($sql);
echo "Hoeveel rijen: " . $countRows;

$result = $db->fetchAssoc($sql);

$result = $db->fetchArray($sql);

echo $db->lastQuery();
*/
?>
