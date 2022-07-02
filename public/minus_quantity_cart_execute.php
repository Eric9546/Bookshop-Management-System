<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='checkout.php';</script>";

    }

    // Gathering user input //
    $no = $_POST ['no'];
    $quantity = $_POST ['quantity'];

    // Validating the input //
    if ($quantity == 1)
    {
        alert ("Unable to decrease quantity as quantity is 1 only, Remove book if you dont want it anymore!");
    }
    else 
    {

         // Establishing connection to database //
        $connection = mysqli_connect ('localhost', 'root', '');

        mysqli_select_db ($connection, 'lastrow_bookstore');

        $quantity = $quantity - 1;

        $sql = "UPDATE checkout SET quantity='$quantity' WHERE no='$no'";


        if($result = mysqli_query ($connection, $sql))
        {
            header ("Location: checkout.php");
        }
        else 
        {
            alert ("Minus Quantity Failed!");
        }

        mysqli_close ($connection);

    }

   

?>
