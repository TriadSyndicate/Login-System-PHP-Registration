<?php
session_start();
//$_SESSION['id']= " ";
$_SESSION['fistname']= " ";
$_SESSION['lastname']= " ";
$_SESSION['email']= " ";
$_SESSION['username']= " ";
$_SESSION['password']= " ";
$_SESSION['gender']= " ";
$_SESSION['datofbirth']= " ";
$_SESSION['secretword']= " ";
$loger= " ";
$loguser= " ";
if(isset($_POST['submit'])){
    $servername= "localhost";
    $db= "login";
    $dbpassword= "";
    $dbuser="root";
    //Connection
    $conn= mysqli_connect($servername, $dbuser, $dbpassword, $db);
     //echo "connected";
    //Check connection
     if (!$conn) {
         die ("Connection failed: ".mysqli_connect_error());
      }
    $useroremail = htmlentities($_POST['useroremail']);
    $password = htmlentities($_POST['password']);
    $sql= "SELECT * FROM 'logintb' WHERE username = '$useroremail' OR email = '$useroremail'";
    $result= mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
     //Error handlings
    if($resultCheck < 1){
        $loguser = "Invalid Username";
    }
    else{
        if($row = mysqli_fetch_assoc($result)){
            if($password == $row['password']){
                $loger = "Invalid Password";
            }
            elseif($password != $row['password']){
                //$_SESSION['id'] = $row["id"];
                $_SESSION['firstname'] = $row["firstname"];
                $_SESSION['lastname'] = $row["lastname"];
                $_SESSION['email'] = $row["email"];
                $_SESSION['username'] = $row["username"];
                $_SESSION['password'] = $row["password"];
                $_SESSION['gender'] = $row["gender"];
                $_SESSION['dateofbirth'] = $row["dateofbirth"];
                $_SESSION['secretword'] = $row["secretword"];

                header("Location: logsys.inc.php");
                exit();
            }
        }
    }
    CloseCon($conn);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login System</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="loginsys.css">
    </head>
    <body>
        <div class="logaform">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <center>
                <h1>LOGIN SYSTEM</h1>
                </center>
                <hr>
                <label for="useroremail">Username/Email</label><br>
                <input type="text" name="useroremail" required="true"><br><br>
                <span class="error"><?php echo $loguser; ?></span>
                <label for="password">Password</label><br>
                <input type="password" name="password" placeholder="***********" required="true"><br><br><br>
                <span class="error"><?php echo $loger; ?></span>
                <button type="submit" name="submit">LOGIN</button>
                <button type="reset">RESET</button>

            </form>
        </div>
        <a target="_SELF" href="logsysb.inc.php"><button id="sign" type="button">SIGN UP</button></a>
    </body>
</html>
