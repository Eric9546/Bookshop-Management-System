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
                    <li class="has-children active">
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
            <h2 class="sub-title">New Destinations!</h2>
            <h1>New Places Available!</h1>
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
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Destinations Available</strong></div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-1">

            <div class="row align">
              <div class="col-md-12 mb-5">
                <div class="float-md-left"><h2 class="text-black h5">Available Destinations</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    
                    <div class="btn-group">
                        <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuReference" data-toggle="dropdown">Sorting</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">

                            <a class="dropdown-item" href="#">Name, A to Z</a>
                            <a class="dropdown-item" href="#">Name, Z to A</a>
                           
                        </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="row mb-5">

              <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="selangor.php" class="product-item md-height bg-gray d-block">
                  <img src="images/model_4.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="selangor.php">Selangor</a></h2>
                <strong class="item-day">Available on Monday</strong>

                 
              </div>
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="perak.php" class="product-item md-height bg-gray d-block">
                      <img src="images/model_6.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="perak.php">Perak</a></h2>
                  <strong class="item-day">Available on Tuesdays</strong>

              </div>

              <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="penang.php" class="product-item md-height bg-gray d-block">
                      <img src="images/model_5.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="penang.php">Penang </a></h2>
                  <strong class="item-day">Available on Wednesdays</strong>

              </div>
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="kedah.php" class="product-item md-height bg-gray d-block">
                  <img src="images/prod_1.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="kedah.php">Kedah</a></h2>
                <strong class="item-day">Available on Thurdays</strong>
                
              </div>

              <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="perlis.php" class="product-item md-height bg-gray d-block">
                      <img src="images/model_1.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="perlis.php">Perlis</a></h2>
                  <strong class="item-day">Available on Fridays</strong>


              </div>
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="johor.php" class="product-item md-height bg-gray d-block">
                      <img src="images/model_7.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="johor.php">Johor</a></h2>
                  <strong class="item-day">Available on Saturdays</strong>
              </div>
              
              

            </div>
            
          </div>

          <div class="col-md-3 order-2 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Select Date</h3>
              
                <form action="date_execute.php" method="post">

                                Day: <select name="day">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                      <option value="13">13</option>
                                      <option value="14">14</option>
                                      <option value="15">15</option>
                                      <option value="16">16</option>
                                      <option value="17">17</option>
                                      <option value="18">18</option>
                                      <option value="19">19</option>
                                      <option value="20">20</option>
                                      <option value="21">21</option>
                                      <option value="22">22</option>
                                      <option value="23">23</option>
                                      <option value="24">24</option>
                                      <option value="25">25</option>
                                      <option value="26">26</option>
                                      <option value="27">27</option>
                                      <option value="28">28</option>
                                      <option value="29">29</option>
                                      <option value="30">30</option>
                                      <option value="31">31</option>
                                      </select>

                                Month: <select name="month">
                                       <option value="July">July</option>
                                       <option value="August">August</option>
                                       </select>

                                Year: <select name="year">
                                       <option value="2020">2020</option>
                                       </select>

                                      <br /><br />

                                <input type="submit" name="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="Input Date" />

                             </form>

             
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