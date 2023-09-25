<?php
$name = $_POST['name'];
$cnic = $_POST['cnic'];
$city = $_POST['city'];
$date = $_POST['date'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
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

$sql = "INSERT INTO customer (name,cnic,city,date,address,email,phone)
VALUES ('$name','$cnic','$city','$date','$address','$email','$phone')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>