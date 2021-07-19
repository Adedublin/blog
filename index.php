<link rel="stylesheet" href="styles.css">

<?php
//inmport connection.php
include('connection.php');
//create a Blogcontainer class
class Blogscontainer {
}
//create a Blog class
class Blog {
}
//create an instance of Blogcontainer class
$Blogscontainerobject = new Blogscontainer();
//Add Blogs to Blogscontainer as an array
$Blogscontainerobject->Blogs = [];
//select parameters from Blog database and store with variable $sql
$sql = "SELECT ID, Title, Caption, Image, Blogdate, Content FROM Blog";
//Declare variable result to hold sql passed into query function with connection variable
$result = $conn->query($sql);
//echo "<div id='BlogsContainer1'>";
//loop if result rows is greater than zero, then while a variable row equals fetch_assoc function stored in a variable $result
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
//create Blog variable $Blog as an instance of Blog class, then assign $Blog with values
      $Blog = new Blog();
      $Blog->ID = $row["ID"];
      $Blog->Title = $row["Title"];
      $Blog->Caption= $row["Caption"];
      $Blog->Image = $row["Image"];
      $Blog->Blogdate = $row["Blogdate"];
      $Blog->Content = $row["Content"];

      // add $Blog to the Blogs variable stored in $myBlogscontainerobject
      array_push($Blogscontainerobject->Blogs, $Blog);
      //echo "</div>";
    }
} else {
  // if no result then print
    echo "No results found, check your query...";
}
//create $myBlogscontainerJSON variable to hold $myBlogscontainerobject changed into JSON representation by json_encode
$myBlogscontainerJSON = json_encode($Blogscontainerobject);

//create a division with id BlogsContainer
echo "<div id='BlogsContainer'></div>";
echo "<h1 class = 'blogtitle'>Kenny Blog</h1>";
echo "<ul class='ul' >";
  echo    "<li><a href='#' class='this_page'>Home</a></li>";
echo "<li><a href='Contact.php' class='this_page'>Contact</a></li>";
  echo "</ul class ='ul'>";
//echo "<input type='text' id='shopSearch' placeholder='Choose a number from 1 to 5'
//oninput='RefreshBlogs()'>";

echo "<h3 class='footer'> Adeseak 25/05/2021 </h3>";
//create jsonString variable to hold $myBlogscontainerJSON variable changed into JSON string representation by json.stringify
echo "<script> var jsonString = JSON.stringify(" . $myBlogscontainerJSON . ");</script>";
//create javascript with source as javascript.js
echo "<script type='text/javascript' src='javascript.js'></script>";
//close php connection
$conn->close();

?>
