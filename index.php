<?php
$servername = "208.91.198.109";
$username = "itglarid_docsea";
$password = "docsea%23";

$link = mysql_connect($servername, $username, $password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
