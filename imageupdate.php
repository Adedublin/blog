<link rel="stylesheet" href="Admin.css">
<?php
  include('session.php');
  $user = $_SESSION['login_user'];
  include('connection.php');
  echo" <ul class='links_displayed' id='nav_links'>
          <li><a href='Admin.php'>Home</a></li>
          <li><a href='newuser.php'>Create New User</a></li>
            <li><a href='newblog.php'>Create New blog</a></li>
          <li><a href='imageupdate.php'>Image Update</a></li>
          <li><a href='blogupdate.php'>Blog Update</a></li>
          <li><a href='deleteblog.php'>Delete Blog</a></li>
          <li><a href='deleteuser.php'>Delete User</a></li>
          <li><a href='logout.php'>Log out</a></li>
        </ul>";

echo "<div id='leftcolumn'>";
echo" <h2 id = 'Welcome'>Welcome to Image update page</h2>";
echo"<p>Fill the form below and submit to update a blog post. Note you will need the blog ID which is obtainable through the home page by providing the title.</p>
  <form action='#' method='post' enctype='multipart/form-data' >
<table >
<tr>
 <td><label class='control-label'>Blog ID</label></td>
    <td><input id='title' type='text'name='id' placeholder='Enter blog ID'/></td>
</tr>
<tr>
 <td><label class='control-label'>Select image to upload</label></td>
    <td><input type='file' name='fileToUpload' id='fileToUpload' ></td>
</tr>
  <tr>
     <td colspan='2'><input type='submit'value='Upload Image' name='submit'>
     </td>
 </tr>
</table>

</form>";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  // collect value of input field
  $id = $_POST['id'];
  if (empty($id)) {
    echo "ID box is empty. Please input Blog ID ";
  }
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    echo "<div id='updateblogform'>";
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

    $str =  htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
    $sql = "UPDATE blog SET Image ='$str'
    WHERE  ID =  $id";
    if ($conn->query($sql) === TRUE) {
      echo "<h3 id = 'adminID'>New record created successfully!</h3>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

  } else {
      echo "<h3 id = 'adminID'>Sorry, there was an error uploading your file.</h3>";
      }
  echo "</div>";
}
echo "</div>";
echo "<footer class='footer' > 25/05/2021</footer>";
?>
