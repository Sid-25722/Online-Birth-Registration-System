<?php
// Create connection
$con = mysqli_connect("localhost", "root", "", "certificate_registration");
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "UPDATE child_information SET status_='Rejected' where comp_num=$id";
  echo $id;
  $result = mysqli_query($con, $sql);
  //$row = mysqli_fetch_array($result);
  
}

if ($con->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("location: ../employee.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
?>

