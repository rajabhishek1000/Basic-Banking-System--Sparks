<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">

    <title>Sparks Banking System</title>

</head>

<body style="background-color: white;">

    <?php
    include 'navbar.php';
    ?>

    <div class="container-fluid" style="background-color: white;">
        <div class="row intro py-1" style="background-color: white;">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h1 style="color:blue;">SPARKS BANK</h1>
                   <!--<h1>TSF Bank</h1>-->
                </div>
            </div>
            <!--<div class="col-sm-12 col-md img text-center">
                <img src="img/bank.jpg" alt="bankimg" class="img-fluid pt-2">
            </div> -->
			

        <div class="row activity text-center">
           <!-- <div class="col-md act">
                <img src="img/user.jpg" alt="userimg" class="img-fluid">
                <br>
                <a href="createuser.php"><button style="background-color: #C86DFB;">Create User</button></a>
            </div> 
            -->
            <div class="col-md act">
                <img src="img/transfers.jpg" alt="transferimg" class="img-fluid">
                <br>
                <a href="transfer.php"><button style="background-color: #C86DFB;">Transfer Money</button></a>
            </div>

            <div class="col-md act">
                <img src="img/historys.jpg" alt="historyimg" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button style="background-color: #C86DFB;">All Transactions </button></a>
            </div>

        </div>

    </div>

    <footer class="text-center mt-5 py-2">
        <p>&copy <b>Kumar Abhishek Raj</b> GRIP @ TheSparksFoundation.</p>
    </footer>
     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>