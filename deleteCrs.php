<?php
$conn = new mysqli('localhost', 'root', '', 'e_classe_db');

$cours_id = $_GET['index']; 
$stmt=$conn->prepare("DELETE FROM courses WHERE id= '$cours_id'");
$stmt->execute();
        
$stmt->close();
    
    header('location: cours.php');


?>