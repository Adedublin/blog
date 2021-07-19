  <link rel="stylesheet" href="Admin.css">
<?php
    include('session.php');
    $user = $_SESSION['login_user'];
    //inmport connection.php
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
echo" <h2 id = 'Welcome'>Welcome to the Admin page</h2>";
echo"<p>Please search for the ID of the blog to update or delete and click respective link above.</p>
  <form action='#' method='post' enctype='multipart/form-data' >
  <table >

    <tr>
     <td><label class='control-label'>Search by Blog Title</label></td>
        <td><input id='title' type='text' name='fname'placeholder='Enter Title'></td>
    </tr>
    <tr>
        <td colspan='2'><input type='submit'>
        </td>
    </tr>

      </table>

  </form>";
//echo "</div>";
//echo "<div id='Adminform'>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = mysqli_real_escape_string($conn,$_POST['fname']);
  if (empty($name)) {
    echo "Title box is empty. Please input title to search";
  } else {
    echo "The blog title you input is $name";
    echo "<div id='Adminform'>";
    $sql = "SELECT ID FROM blog WHERE Title='$name'";

    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
echo" <h3 id = 'adminID'>This title has been found and ID is:  $row[ID]</h3>";
            //echo 'This title has been found and ID is: ' . $row["ID"] ;
        }
    } else {
          echo "<h3 id = 'adminID'>This title, $name has not been found.....</h3>";
    }
echo "</div>";
  }
}

echo "</div>";
echo "<footer class='footer' > 25/05/2021</footer>";
?>
