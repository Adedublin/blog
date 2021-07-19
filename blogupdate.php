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
echo" <h2 id = 'Welcome'>Welcome to New Blog page</h2>";
echo"<p>Fill the form below and submit to update a blog post. Note you will need the blog ID which is obtainable through the home page by providing the title.</p>
    <form action='#' method='post' enctype='multipart/form-data' >
  <table >
  <tr>
   <td><label class='control-label'>Blog ID</label></td>
      <td><input id='title' type='text'name='id' placeholder='Enter blog ID'/></td>
  </tr>
    <tr>
     <td><label class='control-label'>Title</label></td>
        <td><input id='title' type='text'name='title' placeholder='Enter your Title'/></td>
    </tr>

    <tr>
     <td><label class='control-label'>Caption</label></td>
        <td><input id='caption' type='text' name='caption'placeholder='Enter your Caption'/></td>
    </tr>
    <tr>
      <td><label class='control-label'>Blog Content</label></td>
       <td><textarea id='content' name='content'rows='10' cols='30'></textarea></td>
   </tr>
   <tr>
       <td colspan='2'><input type='submit'>
       </td>
   </tr>
  </table>

  </form>";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    if (empty($id)) {
      echo "ID box is empty. Please input Blog ID ";
    }
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    if (empty($title)) {
      echo "Title box is empty. Please input title ";
    }
  $caption = mysqli_real_escape_string($conn,$_POST['caption']);
    if (empty($caption)) {
      echo "Caption box is empty. Please input caption";
    }
    $date = date("Y-m-d");
      $content =mysqli_real_escape_string($conn,$_POST['content']);
        if (empty($content)) {
          echo "Content box is empty. Please input blog content";
        }
    else {
      echo "<div id='updateblogform'>";
      $sql = "UPDATE blog SET Title ='$title',Caption ='$caption',Blogdate ='$date',Content ='$content'
      WHERE  ID =  $id";

      //echo
      if (mysqli_query($conn, $sql)) {
          echo "<h3 id = 'adminID'>Update record created successfully!</h3>";
      } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

  echo "</div>";
    }
  }

  echo "</div>";
  echo "<footer class='footer' > 25/05/2021</footer>";
  ?>
