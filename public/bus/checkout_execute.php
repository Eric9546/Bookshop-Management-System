<?php

    session_start ();

     // Ensure that the user is logged in //
     if (!isset ($_SESSION ['email']))
     {
              
        header ("Location: nologin.php");
                    
     }

     else
     {
        
        // Establishing connection to database //
        $connection = mysqli_connect ('localhost', 'root', '');

        mysqli_select_db ($connection, 'userdata');   

        // Gathering the user input //
        $id = $_SESSION ['id'];

        // Query to select the record based on the id //
        $query = "select * from cart where id = '$id'";

        $result = mysqli_query ($connection, $query);

        $total_spent = 0;

        // While loop used to retrieve all the records from the database table //
        while ($rows = $result->fetch_assoc())
        {
      
            // Storing all the records into variables //
            $bookingno = $rows ['bookingno'];
            $image = $rows ['image'];
            $product = $rows ['product'];
            $price = $rows ['price'];
            $ticket = $rows ['ticket'];
            $date = $rows ['date'];
        
            // Inserting data into the database table //
            $input_purchase_history = "insert into purchasehistory (bookingno, id, image, product, price, ticket, date) values ('$bookingno', '$id', '$image', '$product', '$price', '$ticket','$date')";
        
            mysqli_query ($connection, $input_purchase_history);

            // Recording the purchaseno //
            $query2 = "select * from purchasehistory where bookingno = '$bookingno'";

            $result2 = mysqli_query ($connection, $query2);

            $row = $result2->fetch_row();
            $purchaseno = $row[0];
            $_SESSION ['purchaseno'] = $purchaseno;
        
            // Deleting the record after the records have been transferred into another database table //
            $query_delete = "delete from cart where id = '$id'";

            mysqli_query ($connection, $query_delete);

            header ("Location: thankyou.php");

        }

        mysqli_close ($connection);

     }

?>