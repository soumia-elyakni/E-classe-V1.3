<?php
$conn = new mysqli('localhost', 'root', '', 'e_classe_db');
// $slt= "SELECT * FROM students WHERE email= ]" ;

// if($_SERVER['REQUEST_METHOD'] == 'GET'){
//     $type = $_GET['type'] ?? "";
//     $index = $_GET['index'] ?? "";

//     if($type == 'update'){
//         if(isset($index)){

//             $connect =  new mysqli('localhost', 'root', '', 'e_classe_db');

//             $slt = "SELECT * FROM  students WHERE email = $index";
    
//             $res = mysqli_query($connect , $slt);
//             $row = mysqli_fetch_array($res);
        
                    // $name = $_GET['name'];
                    // $email = $_GET['email'];
                    // $phone = $_GET['phone'];
                    // $enroll_number = $_GET['enroll_number'];
                    // $date_of_admission = $_GET['date_of_admission'];
            
            
//         }
//     }
    

// }
 


 /*if(isset($_GET['sub'])){
    $id=$_GET['id'];
   $name=$_POST['name'];
   $email=$_GET['email'];
   $phone=$_POST['phone'];
   $enroll_number=$_POST['enroll_number'];
   $date_of_admission=$_POST['date_of_admission'];

   $i="update students set name='$name', email='$email', phone='$phone', enroll_number='$enroll_number', date_of_admission='$date_of_admission', where email=$email";
 mysqli_query($connect, $i);
 header('location:stud.php');

 }

 $s="select * from students where email=$email";
 $qu= mysqli_query($connect, $s);
 $row=mysqli_fetch_assoc($qu);*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <?php
    $connect =  new mysqli('localhost', 'root', '', 'e_classe_db');

    if(isset($_POST['update'])){
        $student_email = $_GET['index'];    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $enroll_number = $_POST['enroll_number'];
        $date_of_admission = $_POST['date_of_admission'];
    
        $stmt = $conn->prepare("UPDATE students SET name = '$name', email = '$email',  phone = '$phone',  date_of_admission = '$date_of_admission'   WHERE email= '$student_email'");
        
        $stmt->execute();
        
        $stmt->close();
        header('location: stud.php');
        
    } 
    
    
        $student_email = $_GET['index'];
        $sql = "SELECT * FROM students WHERE email= '$student_email'";
        $res = $connect->query($sql);
        $row = $res->fetch_assoc();
    
                
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $enroll_number = $row['enroll_number'];
                $date_of_admission = $row['date_of_admission'];
    
  
    
    ?>
<form class="mt-5 w-75 m-auto" action="" method="POST" >
            
            <label for="name">
              <span>Name :</span>
            </label>
            <input type="text" name="name" class="w-100 p-1 mt-2" value="<?php echo $name ?>">
          
            <label for="mail">
              <span>Email :</span>
            </label>
            <input type="text"  name="email" class="w-100 p-1 mt-2" value="<?php echo $email ?>">
    
            <label for="phone">
                <span>Phone :</span>
            </label>
            <input type="tel"  name="phone" class="w-100 p-1 mt-2" value="<?php echo $phone ?>">

            <label for="enroll_number">
                <span>Eroll Number :</span>
            </label>
            <input type="tel"  name="enroll_number" class="w-100 p-1 mt-2" value="<?php echo $enroll_number ?>">

            <label for="date_of_admission">
                <span>Date of admission :</span>
            </label>
            <input type="date"  name="date_of_admission" class="w-100 p-1 mt-2" value="<?php echo $date_of_admission ?>">

            <input type="submit" value="update" name="update" class="btn btn-info w-100 mt-4">

</form>
</body>
</html>