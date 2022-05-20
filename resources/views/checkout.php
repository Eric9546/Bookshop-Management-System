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

                <li class="nav-item dropdown">
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
                          echo '<li class="nav-item active"><a class="nav-link" href="checkout.php">Checkout</a></li>';
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
              <h2>Checkout</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products call-to-action">
      <div class="container">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="row">
                  <div class="col-6">
                       <em>Sub-total</em>
                  </div>
                  
                  <div class="col-6 text-right">
                       <strong>$ 128.00</strong>
                  </div>
             </div>
          </li>
          
          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>Extra</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong>$ 0.00</strong>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>Tax</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong>$ 10.00</strong>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>Total</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong>$ 138.00</strong>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>Deposit payment required</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong>$ 20.00</strong>
                    </div>
               </div>
          </li>
        </ul>

        <br>
        
        <div class="inner-content">
          <div class="contact-form">
              <form action="#">
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Title:</label>
                                  <select class="form-control" data-msg-required="This field is required.">
                                       <option value="">-- Choose --</option>
                                       <option value="dr">Dr.</option>
                                       <option value="miss">Miss</option>
                                       <option value="mr">Mr.</option>
                                       <option value="mrs">Mrs.</option>
                                       <option value="ms">Ms.</option>
                                       <option value="other">Other</option>
                                       <option value="prof">Prof.</option>
                                       <option value="rev">Rev.</option>
                                  </select>
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Name:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Email:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Phone:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Address 1:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Address 2:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">City:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">State:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Zip:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Country:</label>
                                  <select class="form-control">
                                       <option value="">-- Choose --</option>
                                       <option value="">-- Choose --</option>
                                       <option value="">-- Choose --</option>
                                       <option value="">-- Choose --</option>
                                  </select>
                             </div>
                        </div>
                   </div>

                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Payment method</label>

                                  <select class="form-control">
                                       <option value="">-- Choose --</option>
                                       <option value="bank">Bank account</option>
                                       <option value="cash">Cash</option>
                                       <option value="paypal">PayPal</option>
                                  </select>
                             </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Captcha</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                   </div>

                   <div class="form-group">
                        <label class="control-label">
                             <input type="checkbox">

                             I agree with the <a href="terms.html" target="_blank">Terms &amp; Conditions</a>
                        </label>
                   </div>

                   <div class="clearfix">
                        <button type="button" class="filled-button pull-left">Back</button>
                        
                        <button type="submit" class="filled-button pull-right">Finish</button>
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
