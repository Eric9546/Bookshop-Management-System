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
    
   

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="trips.php">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Buses</strong></div>
        </div>
      </div>
    </div>  

    <?php

        $trip = $_GET ['trip'];

        if ($trip == "1")
        {
      
            echo '<div class="site-section">';
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-md-6">';
            echo '<div class="item-entry">';
            echo '<a href="#" class="product-item md-height bg-gray d-block">';
            echo '<img src="images/bus1.png" alt="Image" class="img-fluid">';
            echo '</a>';
            echo '';
            echo '</div>';
            echo '';
            echo '</div>';
            echo '<div class="col-md-6">';
            echo '<h2 class="text-black">Penang to Perlis</h2>';
            echo '<p>A one-way ticket from Nibung Tebal Bus Terminal to Kuala Perlis Bus Terminal.</p>';
            echo '<p class="mb-4">Journey Time is 2 - 3 Hours.</p>';
            echo '<p><strong class="text-primary h4">$60.00</strong></p>';
            echo '';
            echo '<div class="mb-5">';
            echo '';
            echo '<form action="cart_input.php" method="post">';
            echo '';
            echo '<input type="hidden" id="custId" name="image" value="images/bus1.png">';
            echo '<input type="hidden" id="custId" name="product" value="Penang to Perlis">';
            echo '<input type="hidden" id="custId" name="price" value="60.00">';
            echo '';
            echo 'Tickets: <select name="ticket">';
            echo '<option value="1">1</option>';
            echo '<option value="2">2</option>';
            echo '<option value="3">3</option>';
            echo '<option value="4">4</option>';
            echo '<option value="5">5</option>';
            echo '</select>';
            echo '<br /><br />';
            echo '';
            echo 'Date Available: <select name="date">';
            echo '<option value="3rd July 2020">3rd July 2020</option>';
            echo '<option value="10th July 2020">10th July 2020</option>';
            echo '<option value="17th July 2020">17th July 2020</option>';
            echo '<option value="24th July 2020">24th July 2020</option>';
            echo '<option value="31st July 2020">31st July 2020</option>';
            echo '<option value="7th August 2020">7th August 2020</option>';
            echo '<option value="14th August 2020">14th August 2020</option>';
            echo '<option value="21st August 2020">21st August 2020</option>';
            echo '<option value="28th August 2020">31st August 2020</option>';
            echo '</select>';
            echo '';
            echo '<br /><br />';
            echo '';
            echo '<input type="submit" name="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="Add to Cart" />';
            echo '';
            echo '</form>';
            echo '';
            echo '</div>';
            echo '';
            echo '</div>';
            echo '';
            echo '';
            echo '</div>';
            echo '</div>';
            echo '</div>';
      
        }

        else if ($trip == "2")
        {
          
            echo '<div class="site-section">';
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-md-6">';
            echo '<div class="item-entry">';
            echo '<a href="#" class="product-item md-height bg-gray d-block">';
            echo '<img src="images/bus2.png" alt="Image" class="img-fluid">';
            echo '</a>';
            echo '';
            echo '</div>';
            echo '';
            echo '</div>';
            echo '<div class="col-md-6">';
            echo '<h2 class="text-black">Perak to Selangor</h2>';
            echo '<p>A one-way ticket from Kuala Kangsar Bus Terminal to KL Sentral Bus Terminal.</p>';
            echo '<p class="mb-4">Journey Time is 5 - 6 Hours.</p>';
            echo '<p><strong class="text-primary h4">$20.00</strong></p>';
            echo '';
            echo '<div class="mb-5">';
            echo '<form action="cart_input.php" method="post">';
            echo '';
            echo '<input type="hidden" id="custId" name="image" value="images/bus2.png">';
            echo '<input type="hidden" id="custId" name="product" value="Perak to Selangor">';
            echo '<input type="hidden" id="custId" name="price" value="20.00">';
            echo '';
            echo 'Tickets: <select name="ticket">';
            echo '<option value="1">1</option>';
            echo '<option value="2">2</option>';
            echo '<option value="3">3</option>';
            echo '<option value="4">4</option>';
            echo '<option value="5">5</option>';
            echo '</select>';
            echo '<br /><br />';
            echo '';
            echo 'Date Available: <select name="date">';
            echo '<option value="6th July 2020">6th July 2020</option>';
            echo '<option value="13th July 2020">13th July 2020</option>';
            echo '<option value="20th July 2020">20th July 2020</option>';
            echo '<option value="27th July 2020">27th July 2020</option>';
            echo '<option value="3rd August 2020">3rd August 2020</option>';
            echo '<option value="10th August 2020">10th August 2020</option>';
            echo '<option value="17th August 2020">17st August 2020</option>';
            echo '<option value="24th August 2020">24st August 2020</option>';
            echo '<option value="31st August 2020">31st August 2020</option>';
            echo '</select>';
            echo '';
            echo '<br /><br />';
            echo '';
            echo '<input type="submit" name="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="Add to Cart" />';
            echo '';
            echo '</form>';
            echo '';
            echo '</div>';
            echo '';
            echo '';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

        }

        else if ($trip == "3")
        {
  
            echo '<div class="site-section">';
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-md-6">';
            echo '<div class="item-entry">';
            echo '<a href="#" class="product-item md-height bg-gray d-block">';
            echo '<img src="images/bus3.png" alt="Image" class="img-fluid">';
            echo '</a>';
            echo '';
            echo '</div>';
            echo '';
            echo '</div>';
            echo '<div class="col-md-6">';
            echo '<h2 class="text-black">Penang to Selangor</h2>';
            echo '<p>A one-way ticket from Nibung Tebal Bus Terminal to KL Sentral Bus Terminal.</p>';
            echo '<p class="mb-4">Journey Time is 5 - 6 Hours.</p>';
            echo '<p><strong class="text-primary h4">$98.00</strong></p>';
            echo '';
            echo '<div class="mb-5">';
            echo '<form action="cart_input.php" method="post">';
            echo '';
            echo '<input type="hidden" id="custId" name="image" value="images/bus3.png">';
            echo '<input type="hidden" id="custId" name="product" value="Penang to Selangor">';
            echo '<input type="hidden" id="custId" name="price" value="98.00">';
            echo '';
            echo 'Tickets: <select name="ticket">';
            echo '<option value="1">1</option>';
            echo '<option value="2">2</option>';
            echo '<option value="3">3</option>';
            echo '<option value="4">4</option>';
            echo '<option value="5">5</option>';
            echo '</select>';
            echo '<br /><br />';
            echo '';
            echo 'Date Available: <select name="date">';
            echo '<option value="6th July 2020">6th July 2020</option>';
            echo '<option value="13th July 2020">13th July 2020</option>';
            echo '<option value="20th July 2020">20th July 2020</option>';
            echo '<option value="27th July 2020">27th July 2020</option>';
            echo '<option value="3rd August 2020">3rd August 2020</option>';
            echo '<option value="10th August 2020">10th August 2020</option>';
            echo '<option value="17th August 2020">17st August 2020</option>';
            echo '<option value="24th August 2020">24st August 2020</option>';
            echo '<option value="31st August 2020">31st August 2020</option>';
            echo '</select>';
            echo '';
            echo '<br /><br />';
            echo '';
            echo '<input type="submit" name="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="Add to Cart" />';
            echo '';
            echo '</form>';
            echo '';
            echo '</div>';
            echo '';
            echo '';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
      
        }

        else if ($trip == "4")
        {
      
            echo '<div class="site-section">';
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-md-6">';
            echo '<div class="item-entry">';
            echo '<a href="#" class="product-item md-height bg-gray d-block">';
            echo '<img src="images/bus4.png" alt="Image" class="img-fluid">';
            echo '</a>';
            echo '';
            echo '</div>';
            echo '';
            echo '</div>';
            echo '<div class="col-md-6">';
            echo '<h2 class="text-black">Kedah to Perak</h2>';
            echo '<p>A one-way ticket from Sungai Petani Bus Terminal to Kuala Kangsar Bus Terminal.</p>';
            echo '<p class="mb-4">Journey Time is 3 - 4 Hours.</p>';
            echo '<p><strong class="text-primary h4">$28.00</strong></p>';
            echo '';
            echo '<div class="mb-5">';
            echo '<form action="cart_input.php" method="post">';
            echo '';
            echo '<input type="hidden" id="custId" name="image" value="images/bus4.png">';
            echo '<input type="hidden" id="custId" name="product" value="Kedah to Perak">';
            echo '<input type="hidden" id="custId" name="price" value="28.00">';
            echo '';
            echo 'Tickets: <select name="ticket">';
            echo '<option value="1">1</option>';
            echo '<option value="2">2</option>';
            echo '<option value="3">3</option>';
            echo '<option value="4">4</option>';
            echo '<option value="5">5</option>';
            echo '</select>';
            echo '<br /><br />';
            echo '';
            echo 'Date Available: <select name="date">';
            echo '<option value="7th July 2020">7th July 2020</option>';
            echo '<option value="14th July 2020">14th July 2020</option>';
            echo '<option value="21st July 2020">21st July 2020</option>';
            echo '<option value="28th July 2020">28th July 2020</option>';
            echo '<option value="4th August 2020">4th August 2020</option>';
            echo '<option value="11th August 2020">11th August 2020</option>';
            echo '<option value="18th August 2020">18th August 2020</option>';
            echo '<option value="25th August 2020">25th August 2020</option>';
            echo '</select>';
            echo '';
            echo '<br /><br />';
            echo '';
            echo '<input type="submit" name="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="Add to Cart" />';
            echo '';
            echo '</form>';
            echo '';
            echo '</div>';
            echo '';
            echo '';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
      
        }

        else if ($trip == "5")
        {
      
            echo '<div class="site-section">';
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-md-6">';
            echo '<div class="item-entry">';
            echo '<a href="#" class="product-item md-height bg-gray d-block">';
            echo '<img src="images/bus5.png" alt="Image" class="img-fluid">';
            echo '</a>';
            echo '';
            echo '</div>';
            echo '';
            echo '</div>';
            echo '<div class="col-md-6">';
            echo '<h2 class="text-black">Johor to Penang</h2>';
            echo '<p>A one-way ticket from Larkin Sentral Bus Terminal to Nibung Tebal Bus Terminal.</p>';
            echo '<p class="mb-4">Journey Time is 10 - 11 Hours.</p>';
            echo '<p><strong class="text-primary h4">$128.00</strong></p>';
            echo '';
            echo '<div class="mb-5">';
            echo '<form action="cart_input.php" method="post">';
            echo '';
            echo '<input type="hidden" id="custId" name="image" value="images/bus5.png">';
            echo '<input type="hidden" id="custId" name="product" value="Johor to Penang">';
            echo '<input type="hidden" id="custId" name="price" value="128.00">';
            echo '';
            echo 'Tickets: <select name="ticket">';
            echo '<option value="1">1</option>';
            echo '<option value="2">2</option>';
            echo '<option value="3">3</option>';
            echo '<option value="4">4</option>';
            echo '<option value="5">5</option>';
            echo '</select>';
            echo '<br /><br />';
            echo '';
            echo 'Date Available: <select name="date">';
            echo '<option value="1st July 2020">1st July 2020</option>';
            echo '<option value="8th July 2020">8th July 2020</option>';
            echo '<option value="15th July 2020">15th July 2020</option>';
            echo '<option value="22th July 2020">22th July 2020</option>';
            echo '<option value="29th July 2020">29th July 2020</option>';
            echo '<option value="5th August 2020">5th August 2020</option>';
            echo '<option value="12th August 2020">12th August 2020</option>';
            echo '<option value="19th August 2020">19th August 2020</option>';
            echo '<option value="26th August 2020">26th August 2020</option>';
            echo '</select>';
            echo '';
            echo '<br /><br />';
            echo '';
            echo '<input type="submit" name="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="Add to Cart" />';
            echo '';
            echo '</form>';
            echo '';
            echo '</div>';
            echo '';
            echo '';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
      
        }

        else if ($trip == "6")
        {
      
            echo '<div class="site-section">';
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-md-6">';
            echo '<div class="item-entry">';
            echo '<a href="#" class="product-item md-height bg-gray d-block">';
            echo '<img src="images/bus6.png" alt="Image" class="img-fluid">';
            echo '</a>';
            echo '';
            echo '</div>';
            echo '';
            echo '</div>';
            echo '<div class="col-md-6">';
            echo '<h2 class="text-black">Selangor to Johor</h2>';
            echo '<p>A one-way ticket from KL Sentral Bus Terminal to Larkin Sentral Bus Terminal.</p>';
            echo '<p class="mb-4">Journey Time is 6 - 7 Hours.</p>';
            echo '<p><strong class="text-primary h4">$58.00</strong></p>';
            echo '';
            echo '<div class="mb-5">';
            echo '<form action="cart_input.php" method="post">';
            echo '';
            echo '<input type="hidden" id="custId" name="image" value="images/bus6.png">';
            echo '<input type="hidden" id="custId" name="product" value="Selangor to Johor">';
            echo '<input type="hidden" id="custId" name="price" value="58.00">';
            echo '';
            echo 'Tickets: <select name="ticket">';
            echo '<option value="1">1</option>';
            echo '<option value="2">2</option>';
            echo '<option value="3">3</option>';
            echo '<option value="4">4</option>';
            echo '<option value="5">5</option>';
            echo '</select>';
            echo '<br /><br />';
            echo '';
            echo 'Date Available: <select name="date">';
            echo '<option value="4th July 2020">4th July 2020</option>';
            echo '<option value="11th July 2020">11th July 2020</option>';
            echo '<option value="18th July 2020">18th July 2020</option>';
            echo '<option value="25th July 2020">25th July 2020</option>';
            echo '<option value="1st August 2020">1st August 2020</option>';
            echo '<option value="8th August 2020">8th August 2020</option>';
            echo '<option value="15th August 2020">15th August 2020</option>';
            echo '<option value="22rd August 2020">22rd August 2020</option>';
            echo '<option value="29th August 2020">29th August 2020</option>';
            echo '</select>';
            echo '';
            echo '<br /><br />';
            echo '';
            echo '<input type="submit" name="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="Add to Cart" />';
            echo '';
            echo '</form>';
            echo '';
            echo '</div>';
            echo '';
            echo '';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
      
        }

        else if ($trip == "7")
        {
      
            echo '<div class="site-section">';
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-md-6">';
            echo '<div class="item-entry">';
            echo '<a href="#" class="product-item md-height bg-gray d-block">';
            echo '<img src="images/bus7.png" alt="Image" class="img-fluid">';
            echo '</a>';
            echo '';
            echo '</div>';
            echo '';
            echo '</div>';
            echo '<div class="col-md-6">';
            echo '<h2 class="text-black">Kelantan to Penang</h2>';
            echo '<p>A one-way ticket from Kota Bharu Bus Terminal to Nibung Tebal Bus Terminal.</p>';
            echo '<p class="mb-4">Journey Time is 5 - 6 Hours.</p>';
            echo '<p><strong class="text-primary h4">$28.00</strong></p>';
            echo '';
            echo '<div class="mb-5">';
            echo '<form action="cart_input.php" method="post">';
            echo '';
            echo '<input type="hidden" id="custId" name="image" value="images/bus7.png">';
            echo '<input type="hidden" id="custId" name="product" value="Kelantan to Penang">';
            echo '<input type="hidden" id="custId" name="price" value="28.00">';
            echo '';
            echo 'Tickets: <select name="ticket">';
            echo '<option value="1">1</option>';
            echo '<option value="2">2</option>';
            echo '<option value="3">3</option>';
            echo '<option value="4">4</option>';
            echo '<option value="5">5</option>';
            echo '</select>';
            echo '<br /><br />';
            echo '';
            echo 'Date Available: <select name="date">';
            echo '<option value="1st July 2020">1st July 2020</option>';
            echo '<option value="8th July 2020">8th July 2020</option>';
            echo '<option value="15th July 2020">15th July 2020</option>';
            echo '<option value="22th July 2020">22th July 2020</option>';
            echo '<option value="29th July 2020">29th July 2020</option>';
            echo '<option value="5th August 2020">5th August 2020</option>';
            echo '<option value="12th August 2020">12th August 2020</option>';
            echo '<option value="19th August 2020">19th August 2020</option>';
            echo '<option value="26th August 2020">26th August 2020</option>';
            echo '</select>';
            echo '';
            echo '<br /><br />';
            echo '';
            echo '<input type="submit" name="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="Add to Cart" />';
            echo '';
            echo '</form>';
            echo '';
            echo '</div>';
            echo '';
            echo '';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
      
        }

        else if ($trip == "8")
        {
      
            echo '<div class="site-section">';
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-md-6">';
            echo '<div class="item-entry">';
            echo '<a href="#" class="product-item md-height bg-gray d-block">';
            echo '<img src="images/bus8.png" alt="Image" class="img-fluid">';
            echo '</a>';
            echo '';
            echo '</div>';
            echo '';
            echo '</div>';
            echo '<div class="col-md-6">';
            echo '<h2 class="text-black">Perlis to Kedah</h2>';
            echo '<p>A one-way ticket from Kuala Perlis Bus Terminal to Sungai Petani Bus Terminal.</p>';
            echo '<p class="mb-4">Journey Time is 1 - 2 Hours.</p>';
            echo '<p><strong class="text-primary h4">$28.00</strong></p>';
            echo '';
            echo '<div class="mb-5">';
            echo '<form action="cart_input.php" method="post">';
            echo '';
            echo '<input type="hidden" id="custId" name="image" value="images/bus8.png">';
            echo '<input type="hidden" id="custId" name="product" value="Perlis to Kedah">';
            echo '<input type="hidden" id="custId" name="price" value="28.00">';
            echo '';
            echo 'Tickets: <select name="ticket">';
            echo '<option value="1">1</option>';
            echo '<option value="2">2</option>';
            echo '<option value="3">3</option>';
            echo '<option value="4">4</option>';
            echo '<option value="5">5</option>';
            echo '</select>';
            echo '<br /><br />';
            echo '';
            echo 'Date Available: <select name="date">';
            echo '<option value="2nd July 2020">2nd July 2020</option>';
            echo '<option value="9th July 2020">9th July 2020</option>';
            echo '<option value="16th July 2020">16th July 2020</option>';
            echo '<option value="23rd July 2020">23rd July 2020</option>';
            echo '<option value="30th July 2020">30th July 2020</option>';
            echo '<option value="6th August 2020">6th August 2020</option>';
            echo '<option value="13th August 2020">13th August 2020</option>';
            echo '<option value="20th August 2020">20th August 2020</option>';
            echo '<option value="27th August 2020">27th August 2020</option>';
            echo '</select>';
            echo '';
            echo '<br /><br />';
            echo '';
            echo '<input type="submit" name="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="Add to Cart" />';
            echo '';
            echo '</form>';
            echo '';
            echo '</div>';
            echo '';
            echo '';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
      
        }

        else 
        {
       
           
            echo '<h5>Sorry There Are No Buses Available.</h5>';
            
        }


    ?>

    
    </div>

    

    <footer class="site-footer custom-border-top">
        <div class="container">

            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>

                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All Rights Reserved Dorifto Travel Bus Company</a>

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