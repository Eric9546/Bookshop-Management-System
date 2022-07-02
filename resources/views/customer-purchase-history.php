<?php
	include('header.php');
    if(!isset($_SESSION))
    { 
        session_start(); 
    } 
?>


<div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="products.php">Books</a></li>
                
                <?php
                      if (!isset ($_SESSION ['id']))
                      {
                        echo "<li class='nav-item dropdown'>";
                        echo "<a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>More</a>";
                        
                        echo "<div class='dropdown-menu'>";
                        echo "  <a class='dropdown-item' href='about-us.php'>About Us</a>";
                        echo "  <a class='dropdown-item' href='blog.php'>Blog</a>";
                        echo "  <a class='dropdown-item' href='testimonials.php'>Testimonials</a>";
                        echo "  <a class='dropdown-item' href='terms.php'>Terms</a>";
                        echo "</div>";
                        echo "</li>";
                      }
                      else
                      {
                        if($_SESSION['access'] == "Customer")
                        {
                          echo "<li class='nav-item dropdown'>";
                          echo "<a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>More</a>";
                          
                          echo "<div class='dropdown-menu'>";
                          echo "  <a class='dropdown-item' href='about-us.php'>About Us</a>";
                          echo "  <a class='dropdown-item' href='blog.php'>Blog</a>";
                          echo "  <a class='dropdown-item' href='testimonials.php'>Testimonials</a>";
                          echo "  <a class='dropdown-item' href='terms.php'>Terms</a>";
                          echo "</div>";
                          echo "</li>";

                          echo "<li class='nav-item dropdown'>";
                          echo "<a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>Payments</a>";
                          
                          echo "<div class='dropdown-menu'>";
                          echo "  <a class='dropdown-item' href='checkout.php'>Checkout</a>";
                          echo "  <a class='dropdown-item' href='customer-purchase-history.php'>Purchase History</a>";
                          echo "</div>";
                          echo "</li>";
                        }
                        else if($_SESSION['access'] == "Admin")
                        {
                          echo "<li class='nav-item dropdown'>";
                          echo "<a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>Manage</a>";
                          
                          echo "<div class='dropdown-menu'>";
                          echo "  <a class='dropdown-item' href='check-stock.php'>Check Stock</a>";
                          echo "  <a class='dropdown-item' href='featured-books-manage.php'>Manage Featured Books</a>";
                          echo "  <a class='dropdown-item' href='admin-purchase-history.php'>View Customer Purchase History</a>";
                          echo "</div>";
                          echo "</li>";
                        }
                      }
                ?>

                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                <?php

                    if (!isset ($_SESSION ['id']))
                    {
              
                        echo '<li class="nav-item"><a href="login.php" class="filled-button">Log In</a></li>';
              
                    }

                    else 
                    {
                   
                        echo '<li class="nav-item"><a href="logout.php" class="filled-button">Logout</a></li>';
                
                    }
                  ?>
             
            </ul>
          </div>
        </div>
      </nav>
    </header>

</body>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>Purchase History</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products call-to-action">
      <div class="container">
      <div class="inner-content">
          <div class="contact-form">

    <!--Table-->
    <?php
      // Establishing connection to database //
      $connection = mysqli_connect ('localhost', 'root', '');
		
      mysqli_select_db ($connection, 'lastrow_bookstore');

      $custId = $_SESSION ['id'];

      $query = "SELECT * FROM payment WHERE custId ='$custId'";

      $result = mysqli_query ($connection, $query);

      while ($rows = $result->fetch_assoc())
      {

        $subTotal = 0;

        echo "<h4> Date: ";
        echo $rows['date'];
        echo "</h4>";
        echo "<div class='row'>";
        echo "<table padding='15' width='100%' border ='1'>";
        echo "   <tr>";
        echo "   <th style='width:20%'><h4><strong>ISBN</strong></h3></th>";
        echo "   <th style='width:35%'><h4><strong>Book Name</strong></h3></th>";
        echo "  <th style='width:15%'><h4><strong>Retail Price</strong></h3></th>";
        echo "  <th style='width:15%'><h4><strong>Quantity</strong></h3></th>";
        echo "  <th style='width:15%'><h4><strong>Total</strong></h3></th>";
        echo "  </tr>";

          $tempPaymentId = $rows['paymentId'];

          $query2 = "SELECT * FROM checkout WHERE custId ='$custId' AND status = 'paymentMade' AND paymentId='$tempPaymentId'";

          $result2 = mysqli_query ($connection, $query2);

          while ($rows2 = $result2->fetch_assoc())
          {
            echo "        <tr> ";
            echo "            <th style='width:20%'><h7>";
            echo              $rows2['isbn'];
            echo "            </h7></th>";

            $tempIsbn = $rows2['isbn'];
            $retailPrice = 0;
            $query3 = "SELECT * FROM stock WHERE isbn ='$tempIsbn'";
            $result3 = mysqli_query ($connection, $query3);
            while ($rows3 = $result3->fetch_assoc())
            {
                 $retailPrice = $rows3['retailPrice'];
                 echo "            <td style='width:35%'><h7><b>        ";
                 echo              $rows3['bookName'];
                 echo "            </b></h7></td>";
                 echo "            <th style='width:15%'><h7>RM ";
                 echo              $rows3['retailPrice'];
                 echo "            </h7></th>";
            }

            echo "            <th style='width:15%' style='text-align:center;'><h7>";
            echo              $rows2['quantity'];
            echo "            </h7></th>";

            $total = $retailPrice * $rows2['quantity'];

            echo "            <th style='width:15%'><h7>RM ";
            echo              $total;
            echo "            </h7></th>";

            echo "        </tr>";
            $subTotal = $subTotal + $total;
          }
           
          echo "</table>";
          echo "<h4> Grand-Total: RM ";
          echo $subTotal;
          echo "</h4>";
          echo "</div>";
      }
            ?>

          <!--Table End-->              
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
