<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='register.php';</script>";

    }

    // Gathering user input //
    $id = $_POST ['id'];
    $password = $_POST ['password'];
    $name = $_POST ['name'];
    $address = $_POST ['address'];
    $phone = $_POST ['phone'];
    $email = $_POST ['email'];

    // Validating the input //
    if (empty ($id))
    {

        alert ("Error Please Check Your ID!");

    }

    else if (empty ($password))
    {

        alert ("Error Please Check Your Password!");

    }

    else if (empty ($name))
    {

        alert ("Error Please Check Your Name!");

    }

    else if (empty ($address))
    {

        alert ("Error Please Check Your Address!");

    }

    else if (empty ($phone))
    {

        alert ("Error Please Check Your Phone!");

    }

    else if (empty ($email))
    {

        alert ("Error Please Check Your Email!");

    }

    else 
    {

        // Establishing connection to database //
        $connection = mysqli_connect ('localhost', 'root', '');

        mysqli_select_db ($connection, 'lastrow_bookstore');

        // Query to authenticate user input for registration //
        $query = "select * from registration where id = '$id'";

        $result = mysqli_query ($connection, $query);

        $number = mysqli_num_rows ($result);

        // Logic to check if the authentication was successful or not //
        if ($number == '1')
        {

            alert ("ID Already Taken!");

        }

        else 
        {

            $register = "insert into registration (id, password, name, address, phone, email) values ('$id', '$password', '$name', '$address', '$phone', '$email')";
            mysqli_query ($connection, $register);
            header ("Location: login.php");

        }    

        mysqli_close ($connection);

    }
    

?>
