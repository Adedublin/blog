<?php

    include("connection.php");
    session_start();

    $user_feedback = "Please enter your credentials above....";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT id FROM pass WHERE email='$email' and password='$password'";
        $result = $conn->query($sql);

        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1) {
            $_SESSION['login_user'] = $email;
            echo "User Found";
            header("location: Admin.php");
        } else {
            $user_feedback =  "Invalid Credentials!!!!";
        }

    }

?>
<html>
    <form action="" method="POST">
        <label>Email:</label><input type="text" name="email"><br><br>
        <label>Password:</label><input type="password" name="password"><br><br>
        <input type="submit" value="Login"/><br>
        <div style="color:#cc0000"><?php echo $user_feedback;?></div>
    </form>
</html>
