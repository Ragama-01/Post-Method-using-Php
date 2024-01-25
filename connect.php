<?php

$connection=mysqli_connect("localhost","root","12022019#Raf","farm_marketting");
if(!$connection)
 die("could not connect".mysqli_conect_error());

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

// attempt insert query execution
$sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
if (mysqli_query($connection, $sql)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }
}

// close connection
mysqli_close($connection);
?>
