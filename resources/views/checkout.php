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
              <h2>Checkout</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
                    
    <div class="products call-to-action">
      <div class="container">
      <div class="row">
          <h4><strong>Shopping Cart</strong></h4>
          <br>
          <br>
      <table padding='15' width='100%' border ='1'>
            <tr>
                <th style='width:11%'><h4><strong>ISBN</strong></h4></th>
                <th style='width:28%'><h4><strong>Book Name</strong></h4></th>
                <th style='width:11%'><h4><strong>Retail Price</strong></h4></th>
                <th style='width:8%'><h4><strong></strong></h4></th>
                <th style='width:12%'><h4><strong>Quantity</strong></h4></th>
                <th style='width:8%'><h4><strong></strong></h4></th>
                <th style='width:12%'><h4><strong>Total</strong></h4></th>
                <th style='width:10%'><h4><strong></strong></h4></th>
            </tr>

        <?php

          $subTotal = 0;

          // Establishing connection to database //
          $connection = mysqli_connect ('localhost', 'root', '');
		
          mysqli_select_db ($connection, 'lastrow_bookstore');

          $custId = $_SESSION ['id'];

          $query = "SELECT * FROM checkout WHERE custId ='$custId' AND status = 'notYetCheckedOut'";

          $result = mysqli_query ($connection, $query);

          while ($rows = $result->fetch_assoc())
          {
               echo "        <tr> ";
               echo "            <th style='width:11%'><h7>";
               echo              $rows['isbn'];
               echo "            </h7></th>";

               $tempIsbn = $rows['isbn'];
               $retailPrice = 0;
               $query2 = "SELECT * FROM stock WHERE isbn ='$tempIsbn'";
               $result2 = mysqli_query ($connection, $query2);
               while ($rows2 = $result2->fetch_assoc())
               {
                    $retailPrice = $rows2['retailPrice'];
                    echo "            <td style='width:28%'><h7><b>        ";
                    echo              $rows2['bookName'];
                    echo "            </b></h7></td>";
                    echo "            <th style='width:11%'><h7>RM ";
                    echo              $rows2['retailPrice'];
                    echo "            </h7></th>";
               }

               echo "            <th style='width:8%' style='text-align:center;'>";
               echo "             <form action='minus_quantity_cart_execute.php' method='POST'>";
               echo "              <input type ='hidden' name ='no' value ='";
               echo                     $rows['no'];
               echo "                   '/>";
               echo "              <input type ='hidden' name ='quantity' value ='";
               echo                     $rows['quantity'];
               echo "                   '/>";
               echo "              <input type ='submit' value ='-' class='btn btn-primary border-width-2 d-none d-lg-inline-block'/>";
               echo "              </form>";       
               echo "            </th>";

               echo "            <th style='width:12%' style='text-align:center;'><h7>";
               echo              $rows['quantity'];
               echo "            </h7></th>";
   
               echo "            <th style='width:8%' style='text-align:right;'>";
               echo "             <form action='add_quantity_cart_execute.php' method='POST'>";
               echo "              <input type ='hidden' name ='no' value ='";
               echo                     $rows['no'];
               echo "                   '/>";
               echo "              <input type ='hidden' name ='quantity' value ='";
               echo                     $rows['quantity'];
               echo "                   '/>";
               echo "              <input type ='submit' value ='+' class='btn btn-primary border-width-2 d-none d-lg-inline-block'/>";
               echo "              </form>";       
               echo "            </th>";

               $total = $retailPrice * $rows['quantity'];

               echo "            <th style='width:12%'><h7>RM ";
               echo              $total;
               echo "            </h7></th>";

               echo "            <th style='width:10%' style='text-align:right;'>";
               echo "             <form action='remove_from_cart_execute.php' method='POST'>";
               echo "              <input type ='hidden' name ='no' value ='";
               echo                     $rows['no'];
               echo "                   '/>";
               echo "              <input type ='submit' value ='REMOVE' class='btn btn-primary border-width-2 d-none d-lg-inline-block'/>";
               echo "              </form>";       
               echo "            </th>";
   
               echo "        </tr>";
               $subTotal = $subTotal + $total;
          }

          
            

          echo "</table>";
          echo "</div>      ";      

          echo "<ul class='list-group list-group-flush'>";
          echo "<li class='list-group-item'>";
          echo " <div class='row'>";
          echo "        <div class='col-6'>";
          echo "            <em>Sub-total</em>";
                       echo "        </div>";
                  
                       echo "       <div class='col-6 text-right'>";
                       echo "            <strong>RM ";
                       echo $subTotal;
                       echo "            </strong>";
                       echo "       </div>";
                       echo "   </div>";
                       echo "</li>";
          
          
                       echo "<li class='list-group-item'>";
                       echo "     <div class='row'>";
                       echo "          <div class='col-6'>";
                       echo "               <em>Shipping Fee</em>";
                       echo "          </div>";

                       echo "           <div class='col-6 text-right'>";
                       echo "               <strong>RM 10.00</strong>";
                       echo "          </div>";
                       echo "     </div>";
                       echo "</li>";

                       echo "<li class='list-group-item'>";
                       echo "     <div class='row'>";
                       echo "          <div class='col-6'>";
                       echo "               <em>Grand-Total</em>";
                       echo "          </div>";

                       $grandTotal = $subTotal + 10;

                       echo "          <div class='col-6 text-right'>";
                       echo "            <strong>RM ";
                       echo $grandTotal;
                       echo "            </strong>";
                       echo "          </div>";
                       echo "     </div>";
                       echo "</li>";
          ?>
        </ul>

        <br>
        
        <div class="inner-content">
          <div class="contact-form">
          <h4><strong>Check Out</strong></h4>
               <form action="complete_payment_execute.php" method="post">
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Receiver Name:</label>
                                  <input type="text" class="form-control" name="receiverName" id="receiverName">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Phone:</label>
                                  <input type="text" class="form-control" name="phoneNumber" id="phoneNumber">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Address 1:</label>
                                  <input type="text" class="form-control" name="addressOne" id="addressOne">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Address 2:</label>
                                  <input type="text" class="form-control" name="addressTwo" id="addressTwo">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">City:</label>
                                  <input type="text" class="form-control" name="city" id="city">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">State:</label>
                                  <input type="text" class="form-control" name="state" id="state">
                             </div>
                        </div>
                   </div>

                   <div class="row">
                         <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Postcode:</label>
                                  <input type="text" class="form-control" name="postcode" id="postcode">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Payment method</label>
                                  <select class="form-control" name="paymentMethod" id="paymentMethod">
                                       <option value="">-- Choose --</option>
                                       <option value="bank">Bank account</option>
                                       <option value="cash">Cash</option>
                                       <option value="paypal">PayPal</option>
                                  </select>
                             </div>
                        </div>
                   </div>

                   <div class="clearfix">                        
                        <button type="submit" class="filled-button pull-right">Proceed</button>
                   </div>
              </form>
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
