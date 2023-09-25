<?php
$m_name = $_POST['m_name'];
$stock = $_POST['stock'];
$discription = $_POST['discription'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medical_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "successfuly...";

$sql = "INSERT INTO stock (m_name,stock,discription)
VALUES ('$m_name','$stock','$discription')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>