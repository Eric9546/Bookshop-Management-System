.<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='register.php';</script>";

    }

    // Gathering user input //
    $email = $_POST ['email'];
    $password = $_POST ['password'];

    // Validating the input //
    if (empty ($email))
    {

        alert ("Error Please Check Your Email!");

    }

    else if (empty ($password))
    {

        alert ("Error Please Check Your Password!");

    }

    else 
    {

        // Establishing connection to database //
        $connection = mysqli_connect ('localhost', 'root', '');

        mysqli_select_db ($connection, 'userData');

        // Query to authenticate user input for registration //
        $query = "select * from registration where email = '$email'";

        $result = mysqli_query ($connection, $query);

        $number = mysqli_num_rows ($result);

        // Logic to check if the authentication was successful or not //
        if ($number == '1')
        {

            header ("Location: register_unsuccess.php");

        }

        else 
        {

            $register = "insert into Registration (email, password) values ('$email', '$password')";
            mysqli_query ($connection, $register);
            header ("Location: register_success.php");

        }    

        mysqli_close ($connection);

    }
    

?>