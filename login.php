<?php  
require('config.php');
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
     header("location:home.php");  
 }  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Practice 2</title>
    <link rel="stylesheet" href="CSS/style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div class="container-fluid text-center pt-3 pb-1 fw-bolder" id="offerHeadings">
            <p>
                Grab Your Offers Now..!<span><button class="btn btn-sm btn-dark ms-3">Book Now</button></span>
            </p>
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
                        <a href="about.php" class="nav-link px-4">About</a>
                    </li>
                    <li class="nav-items">
                        <a href="offers.php" class="nav-link px-4">Offers</a>
                    </li>
                    <li class="nav-items">
                        <a href="pricing.php" class="nav-link px-4">Book Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>

        <div class="container text-center about">
            <div class="row gx-0">
                <div class="col-md-12 col-sm-12">
                    <p class="py-1 fw-bolder" id="offerHeading">Login to continue</p>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" placeholder="Email" name="email" />
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="password" class="form-control" placeholder="Password" name="password" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
                                <input type="submit" name="login" class="form-control btn-outline-dark  mb-2 "
                                    value="Log in" />
                            </div>
                        </div>
                        <br />
                    </form>
                    <div>
                        <p>New to Aquatica..? try <span><a href="signup.php" class="btn-sm btn-outline-dark">
                                    sign
                                    up</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

<?php

   require('config.php');
   $conn = mysqli_connect("localhost","root","","aquatica");
   if(isset($_POST["login"])) {
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT `cid` FROM `customerinfo` WHERE cEmail = '$myusername' and cPassword = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
    
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['user'] = $myusername;
         header("location:home.php");
      }else {
            echo "<div class='alert-info alert text-center' role='alert'>Login name or Password is incorrect..!</div>";
      }
   }
?>