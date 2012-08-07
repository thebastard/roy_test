<?php
include('classes.php');

$config = new Config( "" );
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
?>
