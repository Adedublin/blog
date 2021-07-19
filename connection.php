<?php
//these are the database user crendetials we set up to gain access to the SQLiteDatabase
$servername='localhost';
$username='sswdclass';
$password='sswdclass123';
$databaseName='film';
//creating a connection using the credentials
$conn=new mysqli($servername, $username, $password, $databaseName);
//Check to see if the connection worked?
if($conn->connect_error) {
    // If the connection had an error, it will be described here and the Die command will stop the script - you will not go any further
    die("Connection Failed: " . $conn->connect_error);
}

//If the connection worked you should see the next section

?>
