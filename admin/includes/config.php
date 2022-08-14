<?php 
// DB credentials.
define('DB_HOST','sql113.epizy.com	
');
define('DB_USER','epiz_32382711');
define('DB_PASS','AXRn49nANqU');
define('DB_NAME','epiz_32382711_tms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>