<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'forms1';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$value1 = $_POST['user_name'];

$sql = "INSERT INTO login VALUES (DEFAULT, '$value1')";

if ($conn->query($sql) === TRUE) {
    //echo "when you submit this should REDIRECT";
    header ("location: search.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>