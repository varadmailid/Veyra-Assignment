<?php
//phpinfo();
//exit;
// MySQLi connection
$conn = new mysqli("localhost", "root", "", "champion_sports");
// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $mysqli->connect_error;
}

$sql = "SELECT Shorts_id FROM shorts";

$result = $conn->query($sql);

$sql1 = "insert into shorts (Shorts_id,Shorts_name,Available,Price) values (7,'ATM Shorts','Yes',500) ";

$conn->query($sql1);

$delete_row = "delete from shorts where Shorts_id = 7";

$conn->query($delete_row);
$results_array = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    // echo  "Shorts ID: " . $row["Shorts_id"]. "  Shorts Name: " . $row["Shorts_name"]. " Available:" . $row["Available"]. "<br>";
     $results_array[] = $row;
    }
  } else {
    echo "0 results";
  }
 //echo $results_array[0]["Shorts_name"];

 print_r(array_filter($results_array,2));

  print_r($results_array);

 



?>
