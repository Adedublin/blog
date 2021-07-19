<?php

include('connection.php');

$ajaxQuery = $_REQUEST["urlQuery"];

$sql = "SELECT * FROM blog WHERE first_name='$ajaxQuery'";

$title = $_REQUEST["title"];
$caption = $_REQUEST["caption"];
$image = $_REQUEST["image"];
$blogdate = $_REQUEST["blogdate"];
$content = $_REQUEST["content"];

$sql = "INSERT INTO blog (Title, Caption, Image, Blogdate,  Content)
VALUES ('$title', '$caption', '$image', '$blogdate','$content',)";



if (mysqli_query($conn, $sql)) {
    echo "New user record created successfully!";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  $date = date("Y-m-d");

?>
