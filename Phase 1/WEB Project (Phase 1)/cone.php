	
<?php
error_reporting(0);
$username = 'root';
$password = "";
$db='admin_login';
// Create connection
$cn = new mysqli('localhost', $username, $password,$db) or die ("unable to connect");


?>