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
          <fo$ action="#" method="post">
            <input type="text" class="fo$-control" placeholder="Search keyword and hit enter...">
          </fo$>  
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

                    <li class="active"><a href="index.php">Home</a></li>
                    <li class="has-children ">
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

    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">Dorifto Bus Travel Company</h2>
            <h1>Popular Destinations Weekly!</h1>
            <p><a href="destination_available.php" class="btn btn-black rounded-0">Book Now!</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/model_3.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="title-section mb-5">
          <h2 class="text-uppercase"><span class="d-block">Popular</span>Destinations</h2>
        </div>
        <div class="row align-items-stretch">
          <div class="col-lg-8">
            <div class="product-item sm-height full-height bg-gray">
              <a href="selangor.php" class="product-category">Selangor</a>
              <img src="images/model_4.png" alt="Image" height="800">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <a href="penang.php" class="product-category">Penang</a>
              <img src="images/model_5.png" alt="Image" class="img-fluid">
            </div>

            <div class="product-item sm-height bg-gray">
              <a href="perak.php" class="product-category">Perak</a>
              <img src="images/model_6.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Available Destinations</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="selangor.php" class="product-item md-height bg-gray d-block">
              <img src="images/model_4.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="selangor.php">Selangor</a></h2>
            <strong class="item-price">Starting From $20.00</strong>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="perak.php" class="product-item md-height bg-gray d-block">
              <img src="images/model_6.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="perak.php">Perak</a></h2>
            <strong class="item-price">Starting From $28.00</strong>
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="penang.php" class="product-item md-height bg-gray d-block">
              <img src="images/model_5.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="penang.php">Penang</a></h2>
            <strong class="item-price">Starting From $28.00</strong>

          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="kedah.php" class="product-item md-height bg-gray d-block">
              <img src="images/prod_1.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="kedah.php">Kedah</a></h2>
            <strong class="item-price">Starting From $28.00</strong>
            
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="perlis.php" class="product-item md-height bg-gray d-block">
              <img src="images/model_1.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="perlis.php">Perlis</a></h2>
            <strong class="item-price">Starting From $28.00</strong>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="johor.php" class="product-item md-height bg-gray d-block">
              <img src="images/model_7.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="johor.php">Johor</a></h2>
            <strong class="item-price">Starting From $58.00</strong>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center mb-5 col-12">
            <h2 class="text-uppercase">Most Rated Trips</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="item-entry">
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
              </div>
              <div class="item">
                <div class="item-entry">
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
              </div>
              <div class="item">
                <div class="item-entry">
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
              </div>
              <div class="item">
                <div class="item-entry">
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
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="trips.php?trip=5" class="product-item md-height bg-gray d-block">
                    <img src="images/bus5.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="trips.php?trip=5">Johor to Melaka</a></h2>
                  <strong class="item-price">$58.00</strong>
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
          </div>
        </div>
      </div>
    </div>


    <div class="site-blocks-cover inner-page py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
                <h2 class="sub-title">Dorifto Travel Bus Company</h2>
            <h1>New Destinations!</h1>
            <p><a href="destination_available.php" class="btn btn-black rounded-0">Book Now!</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/model_6.png" alt="Image" class="img-fluid">
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
                        <script>document.write(new Date().getFullYear());</script> All Rights Reserved Dorifto Bus Travel Company.</a>

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