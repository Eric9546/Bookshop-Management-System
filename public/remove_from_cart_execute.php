<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='checkout.php';</script>";

    }

    // Gathering user input //
    $no = $_POST ['no'];

    // Validating the input //
    if (empty ($no))
    {
        alert ("Error Please Check Your ISBN!");
    }
    else 
    {

         // Establishing connection to database //
        $connection = mysqli_connect ('localhost', 'root', '');

        mysqli_select_db ($connection, 'lastrow_bookstore');

        $sql = "DELETE FROM checkout WHERE no ='$no'";

        if($result = mysqli_query ($connection, $sql))
        {
            header ("Location: checkout.php");
        }
        else 
        {
            alert ("Remove Item Failed!");
        }

        mysqli_close ($connection);

    }

   

?>
