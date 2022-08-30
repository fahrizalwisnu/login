<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "webloginfahrizal";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Maaf gagal tersambung dengan database.')</script>");
}
 
?>