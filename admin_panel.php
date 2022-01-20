<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <style type="text/css">
    p, body, td { font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 10pt; }
    body { padding: 0px; margin: 0px; background-color: #ffffff; }
    a { color: #1155a3; }
    .space { margin: 10px 0px 10px 0px; }
    .header { background: #003267; background: linear-gradient(to right, #011329 0%,#00639e 44%,#011329 100%); padding:20px 10px; color: white; box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.75); }
    .header a { color: white; }
    .header h1 a { text-decoration: none; }
    .header h1 { padding: 0px; margin: 0px; }
    .main { padding: 10px; margin-top: 10px; }
  </style>

  <style>
     .toolbar {
          margin-bottom: 10px;
      }

      .toolbar-item a {
          background-color: #fff;
          border: 1px solid #c0c0c0;
          color: #333;
          padding: 8px 0px;
          width: 80px;
          border-radius: 2px;
          cursor: pointer;
          display: inline-block;
          text-align: center;
          text-decoration: none;
      }

      .toolbar-item a.selected-button {
          background-color: #f3f3f3;
          color: #000;
      }

      /* context menu icons */
      .icon:before {
          position: absolute;
          margin-left: 0px;
          margin-top: 3px;
          width: 14px;
          height: 14px;
          content: '';
      }

      .icon-blue:before { background-color: #3d85c6; }
      .icon-green:before { background-color: #6aa84f; }
      .icon-orange:before { background-color: #e69138; }
      .icon-red:before { background-color: #cc4125; }
      .icon-indigo:before { background-color: #4B0082; }
      .icon-yellow:before { background-color: #FFFF00; }
      .icon-pink:before { background-color: #FF00FF; }

      /* active areas */
      .area-menu-icon {
          background-color: #333333;
          box-sizing: border-box;
          border: 1px solid white;
          border-radius: 10px;
          opacity: 0.7;
          color: white;
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 14px;
      }
/*      .area-menu-icon:hover {
          opacity: 1;
      }*/
      .dot {
  height: 18px;
  width: 18px;
  border-radius: 50%;
  display: inline-block;
}
  </style>

  <!-- DayPilot library -->
  <script src="js/daypilot/daypilot-all.min.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .header{
            text-align: center;
            background-color: #000;
            color: #f3f3f3;
            width: 100%;
            position: fixed;
            top: 0;
            padding: 1% 0;
        }
        .contact{
            margin-top: 5%;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Cargo's</h1>
    
</div>
<br><br><br><br><br>
<button type="button"><a href="index.html">Logout</a></button>
    
</body>
</html>

<?php



if(isset($_SESSION['admin'])){
    $dbhost = "localhost";
    $dbuser = "id11349246_root";
    $dbpass = "project";
    $dbname = "id11349246_user";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    mysqli_select_db($conn, $dbname);

    $sql = "select * from cont";
    $result = mysqli_query($conn, $sql);

    echo "<div class='contact'>
    <h2>Contact Details</h2>
    
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Message</th>
        </tr>";

    while(list($id, $name, $email, $contact, $message) = mysqli_fetch_row($result)){
        echo "<tr>
                <td>$id</td>
                <td>$name</td>
                <td>$email</td>
                <td>$contact</td>
                <td>$message</td>
            </tr>";
    }
    echo "</table> </div> <br>";

    $sql = "select * from booking";
    $result = mysqli_query($conn, $sql);

    echo "
    <h2>Booking Details</h2>
    <table border=1>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Loading Address</th>
        <th>Unloading Address</th>
        <th>Luggage</th>
        <th>Vehicle</th>
        <th>Loading MP</th>
        <th>Unloading MP</th>
        <th>Additional Message</th>
    </tr>";

    while(list($id, $name, $email, $contact, $La, $Ua, $luggage, $vehicle, $Lmp, $Ump, $mess) = mysqli_fetch_row($result)){
        echo "<tr>
                <td>$id</td>
                <td>$name</td>
                <td>$email</td>
                <td>$contact</td>
                <td>$La</td>
                <td>$Ua</td>
                <td>$luggage</td>
                <td>$vehicle</td>
                <td>$Lmp</td>
                <td>$Ump</td>
                <td>$mess</td>
            </tr>";
    }
    echo "</table>";
}

session_abort();



?>