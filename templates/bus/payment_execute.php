<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='checkout.php';</script>";

    }

    // Gathering the user input //
    $purchaseno = $_SESSION ['purchaseno'];
    $id = $_SESSION ['id'];  
    $state = $_POST ['state'];
    $first_name = $_POST ['first_name'];
    $last_name = $_POST ['last_name'];
    $company_name = $_POST ['company_name'];
    $address = $_POST ['address'];
    $district = $_POST ['district'];
    $zip = $_POST ['zip'];
    $email = $_POST ['email'];
    $phone = $_POST ['phone'];
    $note = $_POST ['note'];

    // Validating the input //
    if (empty ($state))
    {

        alert ("Error Please Check Your State!");

    }

    else if (empty ($first_name))
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

    else if (empty ($company_name))
    {

        alert ("Error Please Check Your Company Name!");

    }

    else if (empty ($address))
    {

        alert ("Error Please Check Your Address!");

    }

    else if (empty ($district))
    {

        alert ("Error Please Check Your District!");

    }

    else if (empty ($zip))
    {

        alert ("Error Please Check Your Postal/Zip!");

    }

    else if (!is_numeric ($zip))
    {

        alert ("Error Please Check Your Postal/Zip!");

    }

    else if (empty ($email))
    {

        alert ("Error Please Check Your Email!");

    }

    else if (empty ($phone))
    {

        alert ("Error Please Check Your Phone Number!");

    }

    else if (!is_numeric ($phone))
    {

        alert ("Error Please Check Your Phone Number!");

    }

     else if (empty ($note))
    {

        alert ("Error Please Check Your Note!");

    }

    else 
    {

         // Establishing connection to database //
        $connection = mysqli_connect ('localhost', 'root', '');

        mysqli_select_db ($connection, 'userData');

        // Query to insert data into the database table //
        $input_payment = "insert into payment (purchaseno, id, state, first_name, last_name, company_name, address, district, zip, email, phone, note) values ('$purchaseno', '$id', '$state', '$first_name', '$last_name', '$company_name', '$address', '$district', '$zip', '$email', '$phone', '$note')";
        
         // Logic to check if the data was input into the database successfully //
         if (mysqli_query ($connection, $input_payment))
         {

            header ("Location: checkout_execute.php");

         }

         else 
         {

            header ("Location: error.php");

         }

         mysqli_close ($connection);

    }

?>