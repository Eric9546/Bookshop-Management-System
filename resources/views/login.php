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

                <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                
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
    <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Log In To Start Purchasing!</h4>
              <h2>Log in</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Enter Your Details</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="login_execute.php" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="id" type="text" class="form-control" id="id" placeholder="Customer ID" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                    </fieldset>
                  </div>                 
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Login</button>
                    </fieldset>
                  </div>                
                </div>
              </form>
             <form id="contact" action="login_admin_execute.php" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <br />
                      <input name="id" type="text" class="form-control" id="id" placeholder="Admin ID" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                    </fieldset>
                  </div>          
                  <div class="col-lg-12">
                    <fieldset>                        
                      <button type="submit" id="form-submit" class="filled-button">Login As Admin</button>
                    </fieldset>
                  </div>
                   <div class="col-lg-12">
                    <fieldset>
                        <br /><br />
                      <h6>Not A Member Yet? Click <a href="register.php">Here</a> To Register</h6>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <img src="assets/images/login.jpg" class="img-fluid" alt="">

            <h5 class="text-center" style="margin-top: 15px;">Login</h5>
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


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
