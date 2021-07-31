<?php

session_start();
$user=$pass="";
include "includes/db_connect.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $user=$_POST["username"];
  $pass=$_POST["pass"];

  if($user=="admin"&&$pass=="ovi")
  {
    $_SESSION['uname']=$user;
    header("Location:dashboard.php");
  }
  else{
    echo "<script>alert(`Invalid Username or Password`)</script>";
  }

}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Sign in</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="sign-in-form">
            <h2 class="title">SIGN IN</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required/>
              
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="pass" placeholder="Password" required/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            
            
          </form>
          
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3><i>OVI</i></h3>
            <p>
              INTERNET SERVICE PROVIDER AT FULBARI
            </p>
            
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>OVI</h3>
            <p>
              Internet Service Provider at Fulbari
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <!-- <script src="./js/app.js"></script> -->
  </body>
</html>
