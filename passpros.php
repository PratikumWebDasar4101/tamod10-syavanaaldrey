<?php
require_once("Class.php");

$db = new Data;

$username   = $_POST["username"];
$password   = $_POST["password"];
$nim        = $_POST["nim"];

$sql = "UPDATE webprog SET password='$password' WHERE nim=$nim";
if ($db->query($sql)) {
    header("Location: login.php");
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?> 