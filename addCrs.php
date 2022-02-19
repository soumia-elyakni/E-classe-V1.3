<?php
    $title = $_POST['title'];
    $chapitre = $_POST['chapitre'];
    $prix = $_POST['prix'];
    

    $conn = new mysqli('localhost', 'root', '', 'e_classe_db');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO courses(title, chapitre, prix) VALUES(?,?,?)");
        $stmt->bind_param("sis", $title, $chapitre, $prix);
        $stmt->execute();
        
        $stmt->close();
        $conn->close();
    }
    header('location:cours.php');
?>