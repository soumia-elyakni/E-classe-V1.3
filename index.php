<?php
if(isset($_POST['signin'])){
  if(!empty($_POST['email']) && !empty($_POST['pass'])){ 
  $connect = new mysqli("localhost", "root", "", "e_classe_db");
  $email = $_POST['email'];
  $pass = $_POST['pass'];
 $sql="SELECT * FROM comptes WHERE email = '$email' AND pass = '$pass'";
 $read =$connect-> query($sql); 
 if(mysqli_num_rows($read) != 0){
   session_start();
   $resl = mysqli_fetch_array($read);
   $_SESSION['email'] = $resl['email'];
   $_SESSION['name'] = $resl['name'];
   if(isset($_POST['box'])){
     setcookie('email', $email, time() + 3600*24);
     setcookie('pass', $pass, time() + 3600*24);
    }
    header("location:home.php");
  }
  else {
  
    $_SESSION["message_error"] = "email or password incorrect";
  }
}
else {
  
  $_SESSION["message_error"] = "Remplissez les champs";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Signin</title>

</head>
<body>
   
    <section class="bg-white position-absolute top-50 start-50 translate-middle p-4" >
        <div class="pt-2">
            <h1 class="border-start px-1 m-4 border-info border-5 ">E-classe</h1>
            <h3 class="text-center fs-5 mt-3">SIGN IN</h3>
            <p class="text-center text-muted mt-2 ">Enter your credentials to access your account</p>
            <p class="text-warning p-0 text-center bg-danger border  border-2 rounded-2">
                   <?php if(isset($_SESSION["message_error"])){ echo $_SESSION["message_error"] ;} ?>
            </p>
        </div>
        <form class="mt-4 pb-3" method="POST">
     
                <label for="email">
                  <span>Email :</span>
                </label>
                <input type="email" id="email" name="email" class="w-100 p-1 mt-2  text-muted" placeholder="Enter your email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>">
                <p></p>
                <label for="pass">
                  <span>Password :</span>
                </label>
                <input type="password" id="pass" name="pass" class="w-100 p-1 mt-2  text-muted" placeholder="Enter your password" value="<?php if(isset($_COOKIE['pass'])) echo $_COOKIE['pass']; ?>">
                
                <div class="form-check form-switch ms-1 m-1">
                <input class="form-check-input" type="checkbox" name="box" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Remember me</label>
                </div>
             
                <button type="submit" class="btn btn-info w-100 mt-3 mb-2 text-white text-decoration-none" name="signin">SIGN IN</button>
                
                <p class="text-center"><span class="text-muted">Forgot your password?</span> <a href="#">Reset Password</a></p>
                <p class="text-center"><span class="text-muted">You don't have a user compte?</span><a href="register.php">Click here to register</a></p>
               
              
        </form>
    </section>

</body>
</html>