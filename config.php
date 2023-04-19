<?php

$sname= "db";
$unmae= "root";
$password = "root";
$db_name = "akun_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}