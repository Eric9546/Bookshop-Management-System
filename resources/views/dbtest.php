<?php

    // Establishing connection to database //
    $connection = mysqli_connect ('localhost', 'root', '');

    mysqli_select_db ($connection, 'lastrow_bookstore');

    // Inserting the data into the database table //
    $input_data = "insert into test (first) values ('boo')";
    mysqli_query ($connection, $input_data);
    
    mysqli_close ($connection);

?>
