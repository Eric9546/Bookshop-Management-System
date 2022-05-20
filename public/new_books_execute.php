<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='add-new-books.php';</script>";

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

        $pname = $isbn.".jpg";  

        $tname = $_FILES["picture"]["tmp_name"];

        $upload_dir = 'assets/images/bookCovers/';

        move_uploaded_file($tname, $upload_dir.$pname);

        $sql = "INSERT INTO stock (isbn, bookName, author, publishDate, bookDesc, pictureUrl, tradePrice, retailPrice, quantity)VALUES ('$isbn', '$bookName', '$author', '$publishDate', '$bookDesc', '$pname', '$tradePrice', '$retailPrice', '$quantity')";

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
