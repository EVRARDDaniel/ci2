<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

/* sur webhostapp
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id9530746_root');
define('DB_PASSWORD', 'tototo');
define('DB_NAME', 'id9530746_bookmark');  */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'id9530746_bookmark');

 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_set_charset($link, "utf8");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>