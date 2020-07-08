<?php
$email = $password = $msg = "";


include("conn.php");
if (isset($_POST['delete'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email == "") {
        $msg = "Please enter your Email";
    } elseif ($password == "") {
        $msg = "Please Enter your Password";
    } else {
        $msg = "Logged In";
        $sql = "delete from register where email = '$email' and password='$password' ";
        echo $sql;

        if ($conn->query($sql) === TRUE)   echo "Record deleted sucessfully";
        else echo "Error deleting record: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>
    body {
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        padding: 0;
        margin: 0;
        font-weight: 20px;
    }

    .row {
        margin-left: 600px;
        padding: 10px;
    }

    .col-20 {
        width: 8%;
        float: left;

    }

    .col-40 {
        width: 40%;
        display: flow-root;
    }

    input[type=email] {
        width: 60%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    input[type=password] {
        width: 60%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    .error {
        color: red;
        margin: 10px 0 10px 610px;
        ;
    }
</style>

<body>
    <h2 style="text-align: center;">Login form</h2>
    <form name="login" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
       <div class="error"> 
           <h3 style="color: red;"><?php echo $msg; ?></h3>
       </div>
        <div class="row">
            <div class="col-20">
                <label>Email:</label>
            </div>
            <div class="col-40">
                <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter email"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-20">
                <label>Password:</label>
            </div>
            <div class="col-40">
                <input type="password" name="password" value="<?php echo $password; ?>" placeholder="enter password"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-20">
                <input type="submit" name="delete" value="Delete">
            </div>
        </div>
    </form>
</body>

</html>