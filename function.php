<?php
includes("./login.php");
$username=$email=$password="";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $username=test_input($_POST["username"]);
    $email=test_input($_POST["email"]);
    $password=test_input($_POST["paassword"]);
}
function test_input($data) {
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
    
}