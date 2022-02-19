<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD STUDENT</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3a3f417346.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="main.css">
    
</head>

<body>

<h1 class="text-center text-secondary mt-3">A New Payement :</h1>
<h2 class="text-center text-primary">Remplissez les champs du payement</h2>
<form class="mt-5 w-75 m-auto" action="addP.php" method="POST" >
            
            <label for="name">
              <span>Name :</span>
            </label>
            <input type="text" name="name" class="w-100 p-1 mt-2">
          
            <label for="payement_schedule">
              <span>Payment Schedule :</span>
            </label>
            <input type="text"  name="payement_schedule" class="w-100 p-1 mt-2">
    
            <label for="bill_number">
                <span>Bill Number :</span>
            </label>
            <input type="text"  name="bill_number" class="w-100 p-1 mt-2">

            <label for="amount_paid">
                <span>Amount Paid :</span>
            </label>
            <input type="text"  name="amount_paid" class="w-100 p-1 mt-2">

            <label for="balance_amount">
                <span>Balance amount :</span>
            </label>
            <input type="text"  name="balance_amount" class="w-100 p-1 mt-2">



            

            <input type="submit" value="save" name="save" class="btn btn-info w-100 mt-4"><a href="" class="text-white text-decoration-none"></a>

</form>
</body>