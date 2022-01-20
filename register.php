<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'user');

$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$sql="INSERT INTO reg(name,pass,email,contact) VALUE ('$name','$pass','$email','$contact')";
if(!mysqli_query($con,$sql)){
    echo '<script type="text/javascript">alert("data not inserted");
    window.location="register.html";
    </script>';
}
else{
    echo '<script type="text/javascript">alert("data inserted");
    window.location="booking.html";
    </script>';
    
    
}

?>
