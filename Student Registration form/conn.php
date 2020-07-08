<?php


//Database connection

$conn =  mysqli_connect('localhost', 'root', '', 'students');
if ($conn) {
    echo "You have connected successfully";
   
} else {
    echo "error";
    die(mysqli_connect_error());
}

?>

