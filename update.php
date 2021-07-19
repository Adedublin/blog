<?php

include("connection.php");

$firstName = $_REQUEST["firstName"];
$lastName = $_REQUEST["lastName"];
$emailToEdit = $_REQUEST["emailToEdit"];
$oldEmail = $_REQUEST["oldEmail"];

//$sql = "SELECT * FROM users WHERE email='$email'";

$sql = "UPDATE users SET first_name='$firstName', last_name='$lastName', email='$emailToEdit' WHERE email='$oldEmail'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

?>
