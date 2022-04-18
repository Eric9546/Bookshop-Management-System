<?php

    session_start ();

     // Ensure that the user is logged in //
     if (!isset ($_SESSION ['email']))
     {
              
        header ("Location: nologin.php");
                    
     }

     else
     {

        // Establishing connection to database //
        $connection = mysqli_connect ('localhost', 'root', '');

        mysqli_select_db ($connection, 'userdata');

        // Gathering the user input //
        $id = $_SESSION ['id'];
        $image = $_POST ['image'];
        $product = $_POST ['product'];
        $price = $_POST ['price'];
        $ticket = $_POST ['ticket'];
        $date = $_POST ['date'];
        
        // Inserting the data into the database table //
        $input_cart = "insert into cart (id, image, product, price, ticket, date) values ('$id', '$image', '$product', '$price', '$ticket', '$date')";
        mysqli_query ($connection, $input_cart);
        header ("Location: booking_success.php");

        mysqli_close ($connection);

     }

?>