<?php
/*
$serverName = "localhost, 1433"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"php", "UID"=>"sa", "PWD"=>"sa@123");
$conn = sqlsrv_connect($serverName, $connectionInfo); */

$db_host = "mycentos"; //serverName\instanceName, portNumber (default is 1433)
$db_user = "mysqladmin";
$db_password = "P@ss123";
$db_database = "mysqladmin_php";
//mysql_set_charset('utf8');
//$conn = mysqli_connect($db_host, $db_user, $db_password, $db_database);
//mysql_select_db($dbName, $conn);

#mysqli_close($conn);
$conn = null;
?>