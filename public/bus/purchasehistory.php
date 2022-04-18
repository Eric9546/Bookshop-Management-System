
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
                                <li class="active"><a href="purchasehistory.php">Purchase History</a></li>
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
                    <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Purchase History</strong></div>
                </div>
            </div>
        </div>

         <?php

            $connection = mysqli_connect ('localhost', 'root', '');

            mysqli_select_db ($connection, 'userdata');

            $id = $_SESSION ['id'];

            $query = "select * from purchasehistory where id = '$id'";

            $result = mysqli_query ($connection, $query);

  

         ?>

        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <form class="col-md-12" method="post">
                        <div class="site-blocks-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Bus Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Ticket(s)</th>
                                        <th class="product-total">Total</th>
                                        <th class="product-date">Departure Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                        $purchase_total = 0;

                                        while ($rows = $result->fetch_assoc())
                                        {
        
                                        $total = $rows ['price'] * $rows ['ticket'];

                                        $purchase_total = $purchase_total + $total;

                                    ?>

                                    <tr>
                                        <td class="product-thumbnail">
                                            <img src = "<?php echo $rows ['image']; ?>" alt="Image" class="img-fluid" />
                                        </td>
                                        <td class="product-name">
                                            <h2 class="h5 text-black"><?php echo $rows ['product']; ?></h2>
                                        </td>
                                        <td>$<?php echo $rows ['price']; ?>.00</td>
                                        <td><?php echo $rows ['ticket']; ?></td>
                                        <td>$<?php echo $total; ?>.00</td>
                                        <td><?php echo $rows ['date'];?></td>
                                    </tr>

                                    <?php
           
                                        }

                                    ?> 
                                   
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-5">
                            
                            <div class="col-md-6">
                               
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6 pl-5">
                        <div class="row justify-content-end">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12 text-right border-bottom mb-5">
                                        <h3 class="text-black h4 text-uppercase">Total Spent = $<?php echo $purchase_total; ?>.00</h3>
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