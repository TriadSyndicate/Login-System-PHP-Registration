<?php
session_start(); // Start the session
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$password = $_SESSION['password'];
$gender = $_SESSION['gender'];
$dob = $_SESSION['dob'];
$secretword= $_SESSION['secretword'];
$time=strtotime($dob);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/welcome.css">
</head>

<body>
    <div class="highlight-phone">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro">
                        <h2>Welcome <?php echo $username; ?></h2>
                        <p>Your Data will be displayed below You can sign out too.</p></div>
                </div>
                <div class="col-sm-4">
                    <div class="d-none d-md-block iphone-mockup"><img src="assets/img/stark.png" class="device">

                    </div>
                </div>
            </div>
            <div class="data">
              <h2>Your Account Details</h2>
              <h5>First Name: <?php echo $firstname; ?></h5>
              <h5>Last Name: <?php echo $lastname; ?></h5>
              <h5>Gender: <?php echo $gender; ?></h5>
              <h5>Date of Birth: <?php echo $dob; ?></h5>
              <h5>Secret Word: <?php echo $secretword; ?></h5>
              <h5>Age: <?php echo date("Y")-date("Y",$time); ?></h5>
            </div>
            <a class="btn btn-primary" role="button" href="./login.php">Sign Out</a>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
