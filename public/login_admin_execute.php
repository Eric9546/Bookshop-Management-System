<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='login.php';</script>";

    }

    // Gathering user input //
    $id = $_POST ['id'];
    $password = $_POST ['password'];

    // Validating the input //
    if (empty ($id))
    {

        alert ("Error Please Check Your ID!");

    }

    else if (empty ($password))
    {

        alert ("Error Please Check Your Password!");

    }

    else
    {

         // Establishing connection to database //
        $connection = mysqli_connect ('localhost', 'root', '');

        mysqli_select_db ($connection, 'lastrow_bookstore');

        // Making the query to authenticate the user login //
        $query = "select * from admin where id = '$id' && password = '$password'";

        $result = mysqli_query ($connection, $query);

        $number = mysqli_num_rows ($result);

        // Logic to check if the authentication is successful or not //
        if ($number == '1')
        {
            $row = $result->fetch_row();
            $value = $row[0];
            $_SESSION ['id'] = $value;
            $_SESSION ['access'] = "Admin";
            header ("Location: index.php");

        }

        else
        {

            alert ("Error Account Details Does Not Exist!");

        }

        mysqli_close ($connection);

    }



?>
