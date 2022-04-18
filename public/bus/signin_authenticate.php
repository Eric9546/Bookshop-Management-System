<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='signin.php';</script>";

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

        // Making the query to authenticate the user login // 
        $query = "select * from registration where email = '$email' && password = '$password'";

        $result = mysqli_query ($connection, $query);

        $number = mysqli_num_rows ($result);

        // Logic to check if the authentication is successful or not //
        if ($number == '1')
        {
            $row = $result->fetch_row();
            $value = $row[0];
            $_SESSION ['id'] = $value;
            $_SESSION ['email'] = $email;
            header ("Location: index.php");
        
        } 

        else 
        {

            header ("Location: signin_unsuccess.php");

        }

        mysqli_close ($connection);

    }

   

?>