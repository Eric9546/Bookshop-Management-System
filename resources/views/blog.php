<?php
	include('header.php');
    session_start ();
?>


<div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
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
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Lorem ipsum dolor sit amet</h4>
              <h2>Blog</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6">
                <div class="service-item">
                  <a href="blog-details.html" class="services-item-image"><img src="assets/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</a></h4>

                    <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a href="blog-details.html" class="services-item-image"><img src="assets/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="blog-details.html">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>

                    <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a href="blog-details.html" class="services-item-image"><img src="assets/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="blog-details.html">Aperiam modi voluptatum fuga officiis cumque</a></h4>

                    <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="service-item">
                  <a href="blog-details.html" class="services-item-image"><img src="assets/images/blog-4-370x270.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</a></h4>

                    <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a href="blog-details.html" class="services-item-image"><img src="assets/images/blog-5-370x270.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="blog-details.html">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>

                    <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a href="blog-details.html" class="services-item-image"><img src="assets/images/blog-6-370x270.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="blog-details.html">Aperiam modi voluptatum fuga officiis cumque</a></h4>

                    <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <ul class="pages">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-form">
              <div class="form-group">
                <h5>Blog Search</h5>
              </div>

              <div class="row">
                <div class="col-8">
                  <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                </div>

                <div class="col-4">
                  <button class="filled-button" type="button">Go</button>
                </div>
              </div>
            </div>

            <div class="form-group">
              <h5>Lorem ipsum dolor sit amet</h5>
            </div>

            <p><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></p>
            <p><a href="blog-details.html">Et animi voluptatem, assumenda enim, consectetur quaerat!</a></p>
            <p><a href="blog-details.html">Ducimus magni eveniet sit doloremque molestiae alias mollitia vitae.</a></p>
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
