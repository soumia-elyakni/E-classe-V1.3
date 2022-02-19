<?php
    $name = $_POST['name'];
    $payement_schedule = $_POST['payement_schedule'];
    $bill_number = $_POST['bill_number'];
    $amount_paid = $_POST['amount_paid'];
    $balance_amount = $_POST['balance_amount'];
    
    

    $conn = new mysqli('localhost', 'root', '', 'e_classe_db');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO payements(name, payement_schedule, bill_number, amount_paid, balance_amount) VALUES(?,?,?,?,?)");
        $stmt->bind_param("sssii", $name, $payement_schedule, $bill_number, $amount_paid, $balance_amount);
        $stmt->execute();
        
        $stmt->close();
        $conn->close();
    }
    header('location:pay.php');
?>