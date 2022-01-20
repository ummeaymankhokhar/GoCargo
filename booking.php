<?php
$con=mysqli_connect('localhost','id11349246_root','project');
mysqli_select_db($con,'id11349246_user');

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$message=$_POST['message'];
$mess=$_POST['mess'];
$lugg=$_POST['lugg'];
$drop=$_POST['veh'];
$butt=$_POST['check'];
$addi=$_POST['addi'];

if($butt[0] == 'Check1'){ 
    //query. to insert yes in loading
    $sql="INSERT INTO booking(name,email,contact,message,mess,lugg,veh,loading,unloading,addi) VALUE ('$name','$email','$contact','$message','$mess','$lugg','$drop','Yes',' ','$addi')";
}
if($butt[0] == 'Check1' && $butt[1] == 'Check2'){
    //query. to insert yes in both loading and unloading
    $sql="INSERT INTO booking(name,email,contact,message,mess,lugg,veh,loading,unloading,addi) VALUE ('$name','$email','$contact','$message','$mess','$lugg','$drop','Yes','Yes','$addi')";
}
if($butt[0] == 'Check2'){
    //query. to insert yes in unloading
    $sql="INSERT INTO booking(name,email,contact,message,mess,lugg,veh,loading,unloading,addi) VALUE ('$name','$email','$contact','$message','$mess','$lugg','$drop',' ','Yes','$addi')";
}

if(!mysqli_query($con,$sql)){
    echo '<script type="text/javascript">alert("data not inserted");
    window.location="booking.html";</script>';
}
else{
    echo '<script type="text/javascript">alert("data inserted");
    window.location="index.html";
    </script>';
}
?>