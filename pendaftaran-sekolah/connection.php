<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = ""; // dikosongkan
$db_name = "db_school";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$connection) {
    die("Connection Failed: " . mysqli_connect_error());
}
