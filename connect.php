<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "lms";
$connect = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $connect->error);

return $connect;
