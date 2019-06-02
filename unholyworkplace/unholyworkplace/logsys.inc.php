<?php
session_start();

//$id = $_SESSION['id'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$email = $_SESSION['email'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$gender = $_SESSION['gender'];
$dateofbirth = $_SESSION['dateofbirth'];
$secretword = $_SESSION['secretword'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Logged In</title>
        <link rel="stylesheet" type="text\css" href="loginsys.css">
    </head>
    <body>
        <div class="display">
            <p>Your details will be dispayed down bellow </p><br><br>
            <h5>First Name: <?php $firstname; ?></h5>
            <h5>Last Name: <?php $lastname; ?></h5>
            <h5>Email: <?php $email; ?></h5>
            <h5>Username: <?php $username; ?></h5>
            <h5>Gender: <?php $gender; ?></h5>
            <h5>Date Of Birth: <?php $dateofbirth; ?></h5>
            <h5>Secret Word: <?php $secretword; ?></h5>
        </div>
        <a href="loginsysa.inc.php" target="_SELF"><button type="button" name="logout" id="loutbut">LOGOUT</button></a>
    </body>
</html>
