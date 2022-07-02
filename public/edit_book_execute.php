<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='edit-book.php';</script>";

    }

    // Gathering user input //
    $isbn = $_POST ['isbn'];
    $bookName = $_POST ['bookName'];
    $author = $_POST ['author'];
    $publishDate = $_POST ['publishDate'];
    $bookDesc = $_POST ['bookDesc'];
    $tradePrice = $_POST ['tradePrice'];
    $retailPrice = $_POST ['retailPrice'];
    $quantity = $_POST ['quantity'];

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

        $sql = "UPDATE stock SET isbn='$isbn', bookName='$bookName', author='$author', publishDate='$publishDate', bookDesc='$bookDesc', tradePrice='$tradePrice', retailPrice='$retailPrice', quantity='$quantity' WHERE isbn='$isbn'";

        if($result = mysqli_query ($connection, $sql))
        {
            header ("Location: check-stock.php");
        }
        else 
        {

            alert ("Add Book Failed!");

        }

        mysqli_close ($connection);

    }

   

?>
