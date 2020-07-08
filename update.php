<?php

// Create connection
$conn =  mysqli_connect('localhost', 'root', '', 'students');
// Check connection
if ($conn) {
    echo "You have connected successfully";
    $sql = "UPDATE register SET lastname='Kumar' WHERE id=15";
    echo $sql;
} else {
    echo "error";
    die(mysqli_connect_error());
}
?>
