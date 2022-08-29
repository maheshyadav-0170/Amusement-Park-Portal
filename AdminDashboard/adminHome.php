<?php 
require('config.php');
session_start();  
if(!isset($_SESSION["admin"]))
{
 header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Practice 2</title>
    <link rel="stylesheet" href="../CSS/style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div id="preloader">
        </div>

        <div class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Aquatica</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-items">
                        <a href="home.php" class="nav-link px-4">Home</a>
                    </li>
                    <li class="nav-items">
                        <a href="about.php" class="nav-link px-4">Payments</a>
                    </li>
                    <li class="nav-items">
                        <a href="logout.php" class="nav-link px-4">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="row">
            <div class="col text-center pt-1" id="HomebgImage">
                <h2 class="text-center fw-bolder mt-5" id="loginHeadText">
                    Admin Dasboard
                </h2>
                <p class="text-center fw-bolder mt-3" id="loginTitleText">
                    Bookings Details
                </p>
            </div>
        </div>

        <?php
        require('config.php');
        $sql = "select * from customerinfo";
        $re = mysqli_query($conn,$sql);
        ?>
        <div class="row">
            <table class="table table-bordered table-hover text-center table-sm table-responsive-sm" id="table">
                <thead>
                    <tr>
                        <th class="py-3"> Customer Id</th>
                        <th class="py-3"> Customer Name</th>
                        <th class="py-3"> Email</th>
                        <th class="py-3"> Phone No.</th>
                        <th class="py-3"> Date</th>
                        <th class="py-3"> No. of Guest</th>
                        <th class="py-3"> Plans Choosed</th>
                        <th class="py-3">Send Confirmation</th>
                    </tr>
                </thead>
                <tbody>
        </div>
        <?php
                require('config.php');
                $conn = mysqli_connect("localhost","root","","aquatica"); 
				$tsql = "select * from `customerbookings`";
				$tre = mysqli_query($conn,$tsql);
				while($trow=mysqli_fetch_array($tre) )
				{	
				echo"<tr><td>".$trow['BOOKINGID']."</td>
                <td class='py-3'>".$trow['custFname']." ".$trow['custLname']."</td>
                <td class='py-3'>".$trow['custEmail']."</td>
                <td class='py-3'>".$trow['custPhone']."</td>
                <td class='py-3'>".$trow['cDate']."</td>
                <td class='py-3'>".$trow['cGuestNo']."</td>
                <td class='py-3'>".$trow['plans']."</td>
                <th><a href='mailto:".$trow['custEmail'].";?subject=Aquatica..! your tickets has been confirmed., get ready to enjoy..!' class='my-3 btn-sm text-decoration-none btn-dark'>Send Mail</a></th>
                </tr>";		
                }	
				?>
        </tbody>
        </table>
    </main>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="index.js"></script>

    <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
        loader.style.display = "none";
    })
    </script>
</body>

</html>