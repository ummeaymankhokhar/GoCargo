<?php

$dbhost = 'localhost';
$dbuser = 'id11349246_root';
$dbpass = 'project';
$dbname = 'id11349246_user';

// connecting the DB
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($conn, $dbname);

$names = $_POST['name'];
$mail = $_POST['email'];
$phone = $_POST['contact'];
$mess = $_POST['message'];

$query = "insert into cont(name, email, contact, message) value('$names', '$mail', '$phone', '$mess')";
if(!mysqli_query($conn, $query)){
    echo '<script type="text/javascript">alert("data not inserted");</script>';
}else{
    echo '<script type="text/javascript">alert("data inserted");
    window.location="contact.html";
    </script>';
}

?>