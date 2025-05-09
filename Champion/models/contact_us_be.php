<?php
 $conn = new mysqli("localhost","root","","champion_sports");
 if(mysqli_connect_errno())
 {
    echo "connection failed:" . mysqli_connect_error();
 }

  $sql = "insert into User_Info(First_Name,Last_Name,Email_address,Suggestions) values ('" 
 . $_POST['name'] . "','" . $_POST['surname'] . "','" . $_POST['email'] . "','" . $_POST['suggestion']  . "')";

 $insert_row = $conn->query($sql);

 if ($insert_row == 1)
 {
    echo "Record inserted Successfully ! ";
 }
 else
 {
    echo "Some thing went Wrong ";
 }

 ?>
