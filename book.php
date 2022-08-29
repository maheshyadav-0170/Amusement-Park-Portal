<?php 
require('config.php');
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:login.php");
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
                        <a href="logout.php" class="nav-link px-4">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="row gx-0">
            <div class="col col-md-6 col-sm-3 pt-1" id="bookBgImage">
                <h2 class="text-center fw-bolder m-auto mt-5" id="bookHeadText">
                    Aquatica
                </h2>
                <p class="text-center fw-bolder mt-3" id="bookTitleText">
                    Step into the world of magic, where joy springs to life.., BOOK
                    NOW..!
                </p>
            </div>
        </div>

        <div class="container text-center about">
            <div class="row gx-0">
                <div class="col-md-7 col-sm-12">
                    <div class="aboutDesign ms-auto"></div>
                    <p class="py-1" id="aboutHeading">About us</p>
                    <p class="" id="aboutTitle">Exciting adventures</p>
                    <p class="aboutDesc">
                        We are so much more than an amusement park - a world where
                        everyone comes together and enjoys the little moments.
                    </p>
                    <p class="aboutDesc">
                        A life of fun is what everyone deserves, so come on down to the
                        Wonderla closest to you!
                        <span><a href="about.php" class="btn-light text-decoration-none">...read more</a></span>
                    </p>
                    <div class="aboutDesign1"></div>
                </div>

                <div class="col-md-5 col-sm-12">
                    <img src="assets/gabriel-valdez-PaFEcOj8Kqo-unsplash.jpg" id="aboutImage1" alt="" />
                </div>
            </div>
        </div>

        <div class="container text-center rounded" id="bookings">
            <h3 class="">Book now</h3>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <input type="text" class="form-control" name="fname" placeholder="First name" required />
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <input type="text" class="form-control" name="lname" placeholder="Last name" />
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="Email" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone No" />
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <input type="text" class="form-control" name="city" placeholder="City" />
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <select name="state" placeholder="State" class="form-control" required>
                            <option>Select state</option>
                            <option>Andhra Pradesh</option>
                            <option>Arunach Pradesh</option>
                            <option>Assam</option>
                            <option>Chattisgarh</option>
                            <option>Goa</option>
                            <option>Gujarat</option>
                            <option>Haryana</option>
                            <option>Himachal Pradesh</option>
                            <option>Jharkhand</option>
                            <option>Karnataka</option>
                            <option>Kerala</option>
                            <option>Madhya Pradesh</option>
                            <option>Manipur</option>
                            <option>Meghalaya</option>
                            <option>Mizoram</option>
                            <option>Nagaland</option>
                            <option>Odisha</option>
                            <option>Punjab</option>
                            <option>Rajasthan</option>
                            <option>Sikkim</option>
                            <option>Tamil Nadu</option>
                            <option>Telangana</option>
                            <option>Tripura</option>
                            <option>Uttarakhand</option>
                            <option>Utta Pradesh</option>
                            <option>West Bengal</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <input type="date" class="form-control" name="date" id="inputDate" min="2022-07-10" />
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <input type="number" class="form-control" name="guest" placeholder="No. of Guest" min="1" />
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <select class="form-select form-control" name="plans" aria-label="Default select example">
                            <option selected>Choose plans</option>
                            <option value="1">Wonder Wednesday</option>
                            <option value="2">Student Offer</option>
                            <option value="3">Early Bird Offers</option>
                            <option value="4">Stay & Play at Aquatica</option>
                            <option value="5">Hall-Ticket Offer</option>
                            <option value="6">2 nights - stay and play</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <input type="submit" name="booknow" class="form-control btn-outline-dark  mb-2 "
                            value="Book now" />
                    </div>
                </div>
                <?php 
                        
if (isset($_POST["booknow"])) 
{                        
    $bookinginfo = "INSERT INTO customerbookings(`custFname`,`custLname`,`custEmail`,`custPhone`,`custCity`,`custState`,`cDate`,`cGuestNo`,`plans`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[city]','$_POST[state]','$_POST[date]','$_POST[guest]','$_POST[plans]')";
    if (mysqli_query($conn, $bookinginfo)) 
    {
        echo "<div class='alert-info alert' role='alert'>Your have successfully booked your ticket at Aquatica! Direct to <span><a href='payments.php' class='btn-sm btn-outline-dark'>Payments</a></span></div>";
    }
    else 
    {
        echo "<script>alert('There was an error while booking up..! try again.!')</script>";
    }
}
?>
            </form>
        </div>
        <br>
    </main>

    <footer>
        <div class="container-fluid footerSection">
            <div class="row gx-0 flex-row">
                <div class="col-md-3 col-sm-3">
                    <ul>
                        <p class="footerHeading fw-bolder">Quick Links</p>
                        <li>
                            <a class="link-secondary text-decoration-none" href="index.php">Home</a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none" href="about.php">About us
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="offers.php">
                                Offers
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="book.php">
                                Book
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <ul>
                        <p class="footerHeading fw-bolder">Extra Links</p>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="index.php">
                                Ask questions
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="about.php">About us</a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="index.php">Privacy policy</a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="index.php">Terms of use</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <ul>
                        <p class="footerHeading fw-bolder">Contact us</p>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="index.php">
                                +91 9878987878
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="about.php">
                                +91 8989767878
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links"
                                href="offers.php">aquatica@gmail.com</a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="book.php">
                                Bengaluru, India
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <ul>
                        <p class="footerHeading fw-bolder">Follow us</p>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="facebook.com">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="instagram.com">
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="twitter.com">Twitter
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="linkedin.com">
                                Linkedin
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr />
            <p class="text-center">Created by Mahesh Yadav G</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>