<?php
$host="localhost";
$username="root";
$password="";
$dbname="my_bd";
$conn = mysqli_connect($host,$username,$password,$dbname);
if (!$conn) {
    die("database connection error:".mysql_error());
}
