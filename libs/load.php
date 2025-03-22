<?php

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/demopro/templates/$name.php"; //not consistant.
}
function signup($name, $password, $email, $phone){
$servername = "mysql.selfmade.ninja";
$username = "samkaran";
$password = "Alita@123123";
$dbname = "samkaran_sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{
    print ("connection ok bro");
}

$sql = "INSERT INTO `demo` (`name`, `password`, `email`, `phone`)
VALUES ('$name', '$password', '$email', '$phone');";
$result = false;

if ($conn->query($sql) === TRUE) {
  $result = true;

} else {
    $result = false;
}

$conn->close();
return $result;
}