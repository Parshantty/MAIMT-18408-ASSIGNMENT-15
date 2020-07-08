<?php
$server = "localhost";
$username = "root";
$password = "";
$db="students";

//Make the connection:
$conn= mysqli_connect($server,$username,$password,$db);

if($conn){
    echo "You have connected successfully";
    $stmt=$conn->prepare("insert into register(firstname,lastname,phone_no,dob,course,email,password,confirm_)) values(?,?,?,?,?,?,?)");
}
else {
    echo "error";
    die(mysqli_connect_error());
}

?>