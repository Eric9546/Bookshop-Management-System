<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='featured_books_edit.php';</script>";

    }

    // Gathering user input //
    $isbn = $_POST ['isbn'];
    $bookNo = $_POST ['bookNo'];

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

        $sql = "UPDATE featured_books set isbn = '$isbn' where bookNo = $bookNo";

        if($result = mysqli_query ($connection, $sql))
        {
            header ("Location: featured-books-manage.php");
        }
        else 
        {

            alert ("Update Book Failed!");

        }

        mysqli_close ($connection);

    }

   

?>
