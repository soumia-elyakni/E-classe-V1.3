<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enroll_number = $_POST['enroll_number'];
    $date_of_admission = $_POST['date_of_admission'];

    $conn = new mysqli('localhost', 'root', '', 'e_classe_db');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO students(name, email, phone, enroll_number, date_of_admission) VALUES(?,?,?,?,?)");
        $stmt->bind_param("sssis", $name, $email, $phone, $enroll_number, $date_of_admission);
        $stmt->execute();
        
        $stmt->close();
        $conn->close();
    }
    header('location:stud.php');
?>