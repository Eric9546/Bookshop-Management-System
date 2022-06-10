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

                          echo '<li class="nav-item"><a class="nav-link" href="checkout.php">Checkout</a></li>';
                        }
                        else if($_SESSION['access'] == "Admin")
                        {
                          echo "<li class='nav-item dropdown'>";
                          echo "<a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>Manage</a>";
                          
                          echo "<div class='dropdown-menu'>";
                          echo "  <a class='dropdown-item' href='check-stock.php'>Check Stock</a>";
                          echo "  <a class='dropdown-item' href='featured-books-manage.php'>Manage Featured Books</a>";
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
              <h2>Edit Books</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products call-to-action">
      <div class="container">
        <div class="inner-content">
          <div class="contact-form">
              <form action="edit_book_execute.php" method="post" enctype="multipart/form-data">

              <?php
                  $isbn = $_GET ['isbn'];

                  $connection = mysqli_connect ('localhost', 'root', '');
		
                  mysqli_select_db ($connection, 'lastrow_bookstore');

                  $query = "SELECT * FROM stock WHERE isbn ='$isbn'";

                  $result = mysqli_query ($connection, $query);

                  while ($rows = $result->fetch_assoc())
                  {
                    $isbn = $rows['isbn'];
                    $bookName = $rows['bookName'];
                    $author = $rows['author'];
                    $publishDate = $rows['publishDate'];
                    $bookDesc = $rows['bookDesc'];
                    $tradePrice = $rows['tradePrice'];
                    $retailPrice = $rows['retailPrice'];
                    $quantity = $rows['quantity'];

                    echo "<div class='row'>";
                    echo "<div class='col-sm-6 col-xs-12'>";
                    echo "          <div class='form-group'>";
                    echo "               <label class='control-label'>ISBN:</label>";
                    echo "               <input type='text' name='isbn' id='isbn' class='form-control' value='$isbn' required>";
                    echo "          </div>";
                    echo "     </div>";
                    echo "     <div class='col-sm-6 col-xs-12'>";
                    echo "          <div class='form-group'>";
                    echo "               <label class='control-label'>Book Name:</label>";
                    echo "               <input type='text' name='bookName' id='bookName' class='form-control' value='$bookName' required>";
                    echo "          </div>";
                    echo "     </div>";
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "     <div class='col-sm-6 col-xs-12'>";
                    echo "          <div class='form-group'>";
                    echo "               <label class='control-label'>Author:</label>";
                    echo "               <input type='text' name='author' id='author' class='form-control' value='$author' required>";
                    echo "          </div>";
                    echo "     </div>";
                    echo "     <div class='col-sm-6 col-xs-12'>";
                    echo "         <div class='form-group'>";
                    echo "               <label class='control-label'>Publish Date:</label>";
                    echo "               <input type='text' name='publishDate' id='publishDate' class='form-control' value='$publishDate' required>";
                    echo "          </div>";
                    echo "     </div>";
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "     <div class='col-sm-6 col-xs-12'>";
                    echo "          <div class='form-group'>";
                    echo "               <label class='control-label'>Book Description:</label>";
                    echo "               <input type='text' name='bookDesc' id='bookDesc' class='form-control' value='$bookDesc' required>";
                    echo "          </div>";
                    echo "     </div>";
                    echo "     <div class='col-sm-6 col-xs-12'>";
                    echo "          <div class='form-group'>";
                    echo "               <label class='control-label'>Trade Price:</label>";
                    echo "               <input type='text' name='tradePrice' id='tradePrice' class='form-control' value='$tradePrice' required>";
                    echo "          </div>";
                    echo "     </div>";
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "     <div class='col-sm-6 col-xs-12'>";
                    echo "          <div class='form-group'>";
                    echo "              <label class='control-label'>Retail Price:</label>";
                    echo "               <input type='text' name='retailPrice' id='retailPrice' class='form-control' value='$retailPrice' required>";
                    echo "          </div>";
                    echo "     </div>";
                    echo "     <div class='col-sm-6 col-xs-12'>";
                    echo "          <div class='form-group'>";
                    echo "               <label class='control-label'>Quantity:</label>";
                    echo "               <input type='text' name='quantity' id='quantity' class='form-control' value='$quantity' required>";
                    echo "          </div>";
                    echo "     </div>";
                    echo "</div>";
                  }
                  ?>

                   <div class="clearfix">
                        <button type="submit" class="filled-button pull-right">UPDATE</button>
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
