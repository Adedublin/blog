<link rel="stylesheet" href="styles.css">
<?php

include('connection.php');

class Post {

}

$postObject = new stdClass();
$post = new Post();
$postObject->post = [];

$postID = $_GET['postID'];

$sql = "SELECT * FROM Blog WHERE ID='$postID'";

$result = $conn->query($sql);

//echo "<div id='peopleContainer'>";

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        $post = new Post();
        $post->title = $row["Title"];
        $post->text = $row["Content"];
        $post->date = $row["Blogdate"];
          $post->caption = $row["Caption"];
        $post->image = $row["Image"];
        array_push($postObject->post, $post);

    }
} else {
    echo "No results found, check your query...";
}

$myPostJSON = json_encode($postObject);

//create a division with id BlogsContainer
echo "<div id='BlogsContainer'></div>";
echo "<h1 class = 'blogtitle'>Kenny Blog</h1>";
echo "<ul class='ul' >";
  echo    "<li><a href='index.php' class='this_page'>Home</a></li>";
echo "<li><a href='#' class='this_page'>Post</a></li>";
echo "<li><a href='Contact.php' class='this_page'>Contact</a></li>";
  echo "</ul class ='ul'>";
//echo "<input type='text' id='shopSearch' placeholder='Choose a number from 1 to 5'
//oninput='RefreshBlogs()'>";
echo "<h3 class='footer'> Adeseak 25/05/2021 </h3>";
//create jsonString variable to hold $myBlogscontainerJSON variable changed into JSON string representation by json.stringify
echo "<script> var jsonString = JSON.stringify(" . $myPostJSON . ");</script>";
echo "<script type='text/javascript' src='javascriptForPost.js'></script>";
//close php connection
$conn->close();

?>
