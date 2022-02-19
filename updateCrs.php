<?php
$conn = new mysqli('localhost', 'root', '', 'e_classe_db');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <?php
    

    if(isset($_POST['update'])){
        $cours_id = $_GET['index'];    
        $title = $_POST['title'];
        $chapitre = $_POST['chapitre'];
        $prix = $_POST['prix'];

    
        $stmt = $conn->prepare("UPDATE courses SET title = '$title', chapitre = '$chapitre',  prix = '$prix'  WHERE id= '$cours_id'");
        
        $stmt->execute();
        
        $stmt->close();
        header('location: cours.php');
        
    } 
    
    
        $cours_id = $_GET['index'];
        $sql = "SELECT * FROM courses WHERE id= '$cours_id'";
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();
    
                echo "ok";
                $title = $row ["title"];
                $chapitre = $row ["chapitre"];
                $prix = $row ["prix"];

    ?>
    <form class="mt-5 w-75 m-auto"  method="POST" >
            
            <label for="title">
              <span>Title :</span>
            </label>
            <input type="text" name="title" class="w-100 p-1 mt-2" value="<?= $row['title'] ?>">
          
            <label for="chapitre">
              <span>Nombre de Chapitres :</span>
            </label>
            <input type="number"  name="chapitre" class="w-100 p-1 mt-2" value="<?= $row['chapitre'] ?>">
    
            <label for="prix">
                <span>Prix $ :</span>
            </label>
            <input type="text"  name="prix" class="w-100 p-1 mt-2" value="<?= $row['prix'] ?>">

            

            <input type="submit" value="update" name="update" class="btn btn-info w-100 mt-4"><a href="" class="text-white text-decoration-none"></a>

</form>
