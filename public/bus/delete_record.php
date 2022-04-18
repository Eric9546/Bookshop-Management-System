<?php

    session_start ();

    // Establishing connection to database //
    $connection = mysqli_connect ('localhost', 'root', '');

    mysqli_select_db ($connection, 'userdata');

    // Gathering the input from user //
    $record_to_delete = $_POST ['record_to_delete'];

    // Query to delele the record from the database table //
    $query_delete = "delete from cart where bookingno = '$record_to_delete'";

    $result = mysqli_query ($connection, $query_delete);

    // Logic to check if the record was deleted successfully //
    if ($result == '1')
    {

        header ("Location: cart.php");
    
    }

    else
    {

        header ("Location: error.php");

    }

?>