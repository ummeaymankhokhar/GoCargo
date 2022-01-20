<?php

// starting the sesion
session_start();

// including DB connection file
include 'db_connection.php';
$conn = OpenCon();

//getting the values
$uname = $_POST['name'];
$upassword = $_POST['pass'];

//checking is the user exist or not
$query = "select * from reg where name = '$uname' && pass = '$upassword'";
$result = mysqli_query($conn, $query);

//fetching the values from DB
list($id,$name, $pass, $email) = mysqli_fetch_row($result);

//if authentication is successfull authorize the user else try again
if($name == $uname){
    echo "<script type='text/javascript'>alert('Login Successfull');
    window.location='./booking.html';
    </script>";
}else{
    echo "<script>
        window.alert('Username or password is wrong!');
        window.location='./register.html';
    </script>";
}

?>