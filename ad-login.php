<?php

session_start();

$dbhost = "localhost";
$dbuser = "id11349246_root";
$dbpass = "project";
$dbname = "id11349246_user";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($conn, $dbname);

$user = $_POST['username'];
$passd = $_POST['password'];

$sql = "select * from admin where us_admin='$user' and password='$passd'";
$result = mysqli_query($conn, $sql);

list($ID, $name, $pass, $email) = mysqli_fetch_row($result);
$_SESSION['admin']=$user;

if($name == $user){
   echo "<script>window.location='admin_panel.php';</script>";
}else{
    echo "<script>window.location='admin.html';</script>"; 
}

?>