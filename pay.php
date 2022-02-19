<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payements</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3a3f417346.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="main.css">
</head>
<body class="m-0 p-0 w-100 h-100">
    
    <?php 
    require 'dash.php'
    ?>
    <?php 
    $conn = new mysqli('localhost', 'root', '', 'e_classe_db');     
   ?>
    <main>

          <!--avanttable-->

      <section class="nav_bar d-flex align-items-center px-3 bg-light">
            <h2 class="tabtitle col-9 align-self-center mt-1">Payements Détails</h2> 
            <div class="col-3 align-self-center d-flex">
              <button style="border: transparent; background: transparent; align-self: center;"> 
                 <img src="images/svg/buttonpay.svg">
              </button>
              <a href="formP.php"><button class="addns text-white" style="border : none; background: #00C1FE; border-radius: 4px;">
             ADD A NEW PAYEMET
             </button></a>
             </div>
      </section> 

          <!--table-->
          
      <section class="mt-5 pt-3 mx-2">
        <table class="table table-responsive table-striped table-sm">
          <thead class="text-muted" style="background: transparent;">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Payment Schedule</th>
              <th scope="col">Bill Number</th>
              <th scope="col">Amount Paid</th>
              <th scope="col">Balance amount</th>
              <th scope="col">Date</th>
              <th scope="col"></th>
              <td></td>
            </tr>
          </thead>
          <tbody>

          <?php

            if($conn -> connect_error) {
            die("connection failed :".$conn -> connect_error);
            }
            $sql= "SELECT * from payements ";
            $read =$conn -> query($sql);
              if($read -> num_rows > 0){
                while($payment= $read -> fetch_assoc()){

           ?>

           <tr>
              <td class="pt-3"><?= $payment['name']?></td>
              <td class="pt-3"><?= $payment['payement_schedule']?></td>
              <td class="pt-3"><?= $payment['bill_number']?></td>
              <td class="pt-3"><?= $payment['amount_paid']?></td>
              <td class="pt-3"><?= $payment['balance_amount']?></td>
              <td class="pt-3"><?= $payment['date'] ?></td>
              <td class="pt-3"><i class="fas fa-eye" style="color: turquoise;"></i></td>
            </tr>

          <?php
          } 
          }

          else {
            echo "le tableau est vide";
         }

         $conn -> close();
           ?>

          </tbody>
        </table>
    </main>
</body>
</html>