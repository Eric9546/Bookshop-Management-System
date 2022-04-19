<?php
    
    session_start ();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <?php include('header.php'); ?>

</head>
<body>

    <div class="site-wrap">

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="title-section text-center mb-5 col-12">
                        <h2 class="h3 mb-3 text-black">Canorus Learning Management System</h2>
                    </div>

                    <div class="col-md-7">

                        <form action="login_authenticate.php" method="post">

                            <div class="p-3 p-lg-5 border">

                                <div class="form-group row">
                                    <div class="col-md-12">
                                       <h2 class="h4 mb-3 text-black">Login</h2>
                                       <label for="text" class="text-black">User ID <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="id" name="id" placeholder="User ID" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="text" class="text-black">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="pass" name="password" placeholder="Password" required>
                                    </div>
                                </div>


                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Log In">
                                </div>
                            </div>
                        </form>

                    </div>
                    
                    <div class="col-md-5 ml-auto">

                        <div class="p-4 border mb-3">
                      
                         <p><img src="images/login.jpg" width="400" height="300"/></p>

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

                        <?php include('footer.php'); ?>

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