<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='check-stock.php';</script>";

    }

    // Gathering user input //
    $isbn = $_POST ['isbn'];
    $pictureUrl = $_POST ['pictureUrl'];

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

        $sql = "DELETE FROM stock WHERE isbn ='$isbn'";

        if($result = mysqli_query ($connection, $sql))
        {
            header ("Location: check-stock.php");
        }
        else 
        {
            alert ("Delete Book Failed!");
        }

        mysqli_close ($connection);

    }

   

?>
