<?php

$connect = new mysqli("localhost", "root", "", "e_classe_db");

if(isset($_POST['save'])){

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO comptes (name, email, pass) VALUES ('$name','$email','$pass')";
$user = $connect -> query($sql);
$connect -> close();
header("location : index.php ");
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
            <h3 class="text-center fs-5 mt-3">REGISTER</h3>
            <p class="text-center text-muted mt-2">Enter your infos to creat a user compte</p>
            
        </div>
        <form class="mt-5 pb-3" method="POST">


                <label for="name">
                  <span>Your Name:</span>
                </label>
                <input type="text" id="pass" name="pass" class="w-100 p-1 mt-2  text-muted" placeholder="Enter your name">
            
                <label for="email">
                  <span>Email :</span>
                </label>
                <input type="email" id="email" name="email" class="w-100 p-1 mt-2  text-muted" placeholder="Enter your email">
              
              
                <label for="pass">
                  <span>Password :</span>
                </label>
                <input type="password" id="pass" name="pass" class="w-100 p-1 mt-2  text-muted" placeholder="Enter your password">
                
               
                <button type="submit" class="btn btn-info w-100 mt-3 text-white text-decoration-none" name="save">REGISTER</button>
                
                <p class="text-center mt-2"><span class="text-muted">You have a user compte</span><a href="index.php">Click here to sign in</a></p>
               
              
        </form>
    </section>
</body>
</html>