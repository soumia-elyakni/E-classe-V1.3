<?php
$conn = new mysqli('localhost', 'root', '', 'e_classe_db');
$student_email = $_GET['index']; 
$stmt=$conn->prepare("DELETE FROM students WHERE email= '$student_email'");
$stmt->execute();
        
$stmt->close();
    
    header('location: stud.php');


?>