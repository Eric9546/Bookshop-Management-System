<?php
    
    session_start ();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dorifto &mdash; A Travel Bus Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.php" class="js-logo-clone">Dorifto</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li class><a href="index.php">Home</a></li>
                    <li class="has-children active ">
                        <a href="#">Booking</a>
                        <ul class="dropdown">
                            <li><a href="destination_available.php">Destinations Available</a></li>
                            <li><a href="bus_available.php">Buses Available</a></li>
                        </ul>
                    </li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="signin.php">Sign In</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="career.php">Career</a></li>
                    <li><a href="purchasehistory.php">Purchase History</a></li>
                </ul>
            </nav>
          </div>
          <div class="icons">
            
            <a href="cart.php" class="icons-btn d-inline-block bag">
                <span class="icon-shopping-bag"></span>
           
            </a>
             <span>

              <?php 
               
                if (!isset ($_SESSION ['email']))
                {
              
                    echo "Not Logged In";
              
                }

                else 
                {
                   
                    echo "<a href='logout.php' class='icons-btn d-inline-block'>Logout</span></a>";
                
                }
              
              ?>
              
              </span>  
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-blocks-cover inner-page" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">New Buses!</h2>
            <h1>Daily Trips Available!</h1>
            <p><a href="#" class="btn btn-black rounded-0">Book Now!</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/model_4.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Buses Available</strong></div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-1">

            <div class="row align">
              <div class="col-md-12 mb-5">
                <div class="float-md-left"><h2 class="text-black h5">Available Buses</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Trip Occurence 
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Daily</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
               
                      <a class="dropdown-item" href="#">Trip, A to Z</a>
                      <a class="dropdown-item" href="#">Trip, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">

              <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="trips.php?trip=1" class="product-item md-height bg-gray d-block">
                  <img src="images/bus1.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="trips.php?trip=1">Penang to Perlis</a></h2>
                <strong class="item-price">$60.00</strong>

                  <div class="star-rating">
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="trips.php?trip=2" class="product-item md-height bg-gray d-block">
                      <img src="images/bus2.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="trips.php?trip=2">Perak to Selangor</a></h2>
                  <strong class="item-price">$20.00</strong>

                  <div class="star-rating">
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                  </div>
              </div>

              <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="trips.php?trip=3" class="product-item md-height bg-gray d-block">
                  <img src="images/bus3.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="trips.php?trip=3">Penang to Selangor</a></h2>
                <strong class="item-price">$98.00</strong>

                <div class="star-rating">
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                </div>

              </div>
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="trips.php?trip=4" class="product-item md-height bg-gray d-block">
                  <img src="images/bus4.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="trips.php?trip=4">Kedah to Perak</a></h2>
                <strong class="item-price">$28.00</strong>
                <div class="star-rating">
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="trips.php?trip=5" class="product-item md-height bg-gray d-block">
                      <img src="images/bus5.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="trips.php?trip=5">Johor to Penang</a></h2>
                  <strong class="item-price">$128.00</strong>

                  <div class="star-rating">
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="trips.php?trip=6" class="product-item md-height bg-gray d-block">
                      <img src="images/bus6.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="trips.php?trip=6">Selangor to Johor</a></h2>
                  <strong class="item-price">$58.00</strong>

                  <div class="star-rating">
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="trips.php?trip=7" class="product-item md-height bg-gray d-block">
                      <img src="images/bus7.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="trips.php?trip=7">Kelantan to Penang</a></h2>
                  <strong class="item-price">$28.00</strong>

                  <div class="star-rating">
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="trips.php?trip=8" class="product-item md-height bg-gray d-block">
                      <img src="images/bus8.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="trips.php?trip=8">Perlis to Kedah</a></h2>
                  <strong class="item-price">$28.00</strong>

                  <div class="star-rating">
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                  </div>
              </div>

            </div>
            
          </div>

          <div class="col-md-3 order-2 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Type of Bus</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="#" class="d-flex"><span>Single-Deck</span> <span class="text-black ml-auto">(6)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Double-Decker</span> <span class="text-black ml-auto">(2)</span></a></li>
                
              </ul>
            </div>

            <div class="border p-4 rounded mb-4">
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
              </div>

              

              

            </div>
          </div>
        </div>

      </div>
    </div>

    

    <footer class="site-footer custom-border-top">
        <div class="container">

            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>

                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All Rights Reserved Dorifto Bus Travel Company</a>

                    </p>
                </div>

            </div>
        </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>