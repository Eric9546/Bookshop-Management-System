<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='products.php';</script>";

    }

    // Gathering user input //
    $isbn = $_POST ['isbn'];
    $custId = $_POST ['custId'];

    // Validating the input //
    if (empty ($isbn))
    {

        alert ("Error Please Check Your ISBN!");

    }
    else 
    {

         // Establishing connection to database //
        $connection = mysqli_connect ('localhost', 'root', '');

        mysqli_select_db ($connection, 'lastrow_bookstore');

        $sql = "INSERT INTO checkout (custId, isbn, quantity, status, postageId)VALUES ('$custId', '$isbn', 1, 'notYetCheckedOut', 'null')";

        if($result = mysqli_query ($connection, $sql))
        {
            header ("Location: products.php");
        }
        else 
        {

            alert ("Add To Cart Failed!");

        }

        mysqli_close ($connection);

    }

   

?>
