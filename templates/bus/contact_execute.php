<?php

    session_start ();

     // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='contact.php';</script>";

    }

    // Gathering the user input //
    $first_name = $_POST ['first_name'];
    $last_name = $_POST ['last_name'];
    $email = $_POST ['email'];
    $subject = $_POST ['subject'];
    $message = $_POST ['message'];

    // Validating the input //
    if (empty ($first_name))
    {

        alert ("Error Please Check Your First Name!");

    }

    else if (is_numeric ($first_name))
    {

        alert ("Error Please Check Your First Name!");

    }

    else if (empty ($last_name))
    {

        alert ("Error Please Check Your Last Name!");

    }

    else if (is_numeric ($last_name))
    {

        alert ("Error Please Check Your Last Name!");

    }

    else if (empty ($email))
    {

        alert ("Error Please Check Your Email!");

    }

     else if (empty ($subject))
    {

        alert ("Error Please Check Your Subject!");

    }

    else if (empty ($message))
    {

        alert ("Error Please Check Your Message!");

    }

    else
    {

        // Establishing connection to database //
        $connection = mysqli_connect ('localhost', 'root', '');

        mysqli_select_db ($connection, 'userdata');
    
        // Query to insert data into the database table //
        $input_contact = "insert into contact (first_name, last_name, email, subject, message) values ('$first_name', '$last_name', '$email', '$subject', '$message')";
    
        // Logic to check if the data was input into the database successfully // 
        if (mysqli_query ($connection, $input_contact))
        {

            header ("Location: contact_success.php");

        }
    
        else
        {

            header ("Location: error.php");

        }

        mysqli_close ($connection);

    }

    

?>