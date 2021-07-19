<link rel="stylesheet" href="styles.css">

<?php
//inmport connection.php
include('connection.php');
//create a Blogcontainer class

//create a division with id BlogsContainer
echo "<div id='ContactContainer'></div>";
echo "<h1 class = 'blogtitle'>Kenny Blog</h1>";
echo "<ul class='ul' >";
  echo    "<li><a href='index.php' class='this_page'>Home</a></li>";
echo "<li><a href='Contact.php' class='this_page'>Contact</a></li>";
  echo "</ul class ='ul'>";
//echo "<input type='text' id='shopSearch' placeholder='Choose a number from 1 to 5'
//oninput='RefreshBlogs()'>";

//create jsonString variable to hold $myBlogscontainerJSON variable changed into JSON string representation by json.stringify

echo "<script type='text/javascript' src='contact.js'></script>";
echo "<h3 class='footer'> Adeseak 25/05/2021 </h3>";
echo "</div>";
//close php connection
$conn->close();

?>
