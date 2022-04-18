<?php
    
    session_start ();
    if (!isset ($_SESSION ['email']))
    {
              
        header ("Location: nologin.php");
              
    }

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
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        
        <div class="row">

            <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Billing Details</h2>
            <div class="p-3 p-lg-5 border">

                <form action="payment_execute.php" method="post">

                    <div class="form-group">
                    <label for="c_country" class="text-black">State <span class="text-danger">*</span></label>
                    <select id="c_country" class="form-control" name="state">
                        <option value="Perlis">Perlis</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Terengganu">Terengganu</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Penang">Penang</option>
                        <option value="Perak">Perak</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Wilayah Persekutuan">Wilayah Persekutuan</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Melaka">Melaka</option>
                        <option value="Johor">Johor</option>
                    </select>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                      <input type="text" pattern="[A-Za-z]{1,32}" class="form-control" id="c_fname" name="first_name" required>
                    </div>
                    <div class="col-md-6">
                      <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                      <input type="text" pattern="[A-Za-z]{1,32}" class="form-control" id="c_lname" name="last_name" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_companyname" class="text-black">Company Name </label>
                      <input type="text" class="form-control" id="c_companyname" name="company_name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_address" name="address" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_state_country" class="text-black">District <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_state_country" name="district" required>
                    </div>
                    <div class="col-md-6">
                      <label for="c_postal_zip" class="text-black">Postal / Zip <span class="text-danger">*</span></label>
                      <input type="text" pattern="[0-9]{5}" class="form-control" id="c_postal_zip" name="zip" placeholder="eg: 11600" required>
                    </div>
                  </div>

                  <div class="form-group row mb-5">
                    <div class="col-md-6">
                      <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="c_email" name="email" placeholder="Bob@example.com" required>
                    </div>
                    <div class="col-md-6">
                      <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                      <input type="text" pattern="[0-9]{10}" class="form-control" id="c_phone" name="phone" placeholder="eg: 0123456789" required>
                    </div>
                  </div>

        
                  <div class="form-group">
                    <label for="c_order_notes" class="text-black">Booking Notes</label>
                    <textarea name="note" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
                  </div>

                     <input type="submit" name="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="Make Booking" />

                </form>

              

            </div>
          </div>
          <div class="col-md-6">

              <?php

                $connection = mysqli_connect ('localhost', 'root', '');

                mysqli_select_db ($connection, 'userdata');

                $id = $_SESSION ['id'];

                $query = "select * from cart where id = '$id'";

                $result = mysqli_query ($connection, $query);


              ?>

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Booking</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Trip</th>
                      <th>Total</th>
                    </thead>
                    <tbody>

                        <?php

                            $cart_total = 0;

                            while ($rows = $result->fetch_assoc())
                            {
        
                            $total = $rows ['price'] * $rows ['ticket'];

                            $cart_total = $cart_total + $total;

                         ?>

                      <tr>
                        <td><?php echo $rows ['product']; ?><strong class="mx-2">x</strong><?php echo $rows ['ticket']; ?></td>
                        <td>$<?php echo $total; ?>.00</td>
                      </tr>
                      
                        <?php
           
                            }   

                        ?> 

                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black">$<?php echo $cart_total; ?>.00</td>
                      </tr>

                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3><b>Payment Options</b></h3>

                   </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your booking won't be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your booking won't be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your booking won't be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                </div>
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