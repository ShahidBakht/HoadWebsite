<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
mysqli_query ($con,"set character_set_client='utf8'"); 
mysqli_query ($con,"set character_set_results='utf8'"); 

mysqli_query ($con,"set collation_connection='utf8_general_ci'"); 
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>