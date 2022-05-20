<?php
	include('header.php');
    session_start ();
?>


<div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.php">About Us</a>
                      <a class="dropdown-item" href="blog.php">Blog</a>
                      <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                      <a class="dropdown-item" href="terms.php">Terms</a>
                    </div>
                </li>
                
                <?php
                      if (!isset ($_SESSION ['id']))
                      {
                
                      }
                      else
                      {
                        if($_SESSION['access'] == "Customer")
                        {
                          echo '<li class="nav-item"><a class="nav-link" href="checkout.php">Checkout</a></li>';
                        }
                        else if($_SESSION['access'] == "Admin")
                        {
                          echo '<li class="nav-item"><a class="nav-link" href="check-stock.php">Check Stock</a></li>';
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
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-3-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Dolore doloribus sint</h4>
              <h2>Testimonials</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="services section-background">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
                <h4>John Doe</h4>
                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
                <h4>Jane Smith</h4>
                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
                <h4>Antony Davis</h4>
                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
                <h4>John Doe</h4>
                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
                <h4>Jane Smith</h4>
                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
                <h4>Antony Davis</h4>
                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
              </div>
            </div>
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
