<?php


function OpenCon(){
    $dbhost = 'localhost';
    $dbuser = 'id11349246_root';
    $dbpass = 'project';
    $dbname = 'id11349246_user';

    // connecting the DB
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    mysqli_select_db($conn, $dbname);

    return $conn;
}

function CloseCon($conn){
    mysqli_close($conn);
}

?>