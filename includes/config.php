<?php 
// DB credentials.
define('DB_HOST','db4free.net');
define('DB_USER',' elitelit1');
define('DB_PASS','Heshan1234');
define('DB_NAME','elitelit2');
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
