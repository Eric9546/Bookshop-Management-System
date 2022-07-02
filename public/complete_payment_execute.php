<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='checkout.php';</script>";

    }

    // Gathering user input //
    $receiverName = $_POST ['receiverName'];
    $phoneNumber = $_POST ['phoneNumber'];
    $addressOne = $_POST ['addressOne'];
    $addressTwo = $_POST ['addressTwo'];
    $city = $_POST ['city'];
    $state = $_POST ['state'];
    $postcode = $_POST ['postcode'];
    $paymentMethod = $_POST ['paymentMethod'];
    $custId = $_SESSION ['id'];
    $date = date('Y-m-d');

    // Validating the input //
    if (empty ($custId))
    {

        alert ("Error Please Check Your ISBN!");

    }
    else 
    {
         // Establishing connection to database //
        $connection = mysqli_connect ('localhost', 'root', '');

        mysqli_select_db ($connection, 'lastrow_bookstore');

        $sql = "INSERT INTO payment (receiverName, phoneNumber, addressOne, addressTwo, city, state, postcode, paymentMethod, date, custId)VALUES ('$receiverName', '$phoneNumber', '$addressOne', '$addressTwo', '$city', '$state', '$postcode', '$paymentMethod', '$date', '$custId')";

        if($result = mysqli_query ($connection, $sql))
        {
            $query2 = "UPDATE checkout SET status='paymentMade', paymentId = LAST_INSERT_ID() WHERE custId ='$custId' AND status = 'notYetCheckedOut'";

            if($result2 = mysqli_query ($connection, $query2))
            {
                header ("Location: checkout.php");
            }
            else 
            {
                alert ("Payment Failed!");
            }
        }
        else 
        {

            alert ("Payment Failed!");

        }

        mysqli_close ($connection);

    }

   

?>
