<?php

    session_start ();

    // Declaring function for alert message //
    function alert ($msg)
    {

        echo "<script type='text/javascript'>alert('$msg'); window.location='career.php';</script>";

    }

    // Gathering the user input //
    $first_name = $_POST ['first_name'];
    $last_name = $_POST ['last_name'];
    $email = $_POST ['email'];
    $subject = $_POST ['subject'];
    $filename = $_FILES['myfile']['name'];

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

    else if (empty ($filename))
    {

        alert ("Error Please Check Your File!");

    }

    else
    {

        // Establishing connection to database //
        $connection = mysqli_connect ('localhost', 'root', '');

        mysqli_select_db ($connection, 'userdata');

        // Destination of the file on the server //
        $destination = 'uploads/' . $filename;

        // Getting the file extension //
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
     
        // The physical file on a temporary uploads directory on the server //
        $file = $_FILES['myfile']['tmp_name'];
        $size = $_FILES['myfile']['size'];

        // Logic to check the extension of the file //
        if (!in_array($extension, ['zip', 'pdf', 'docx', 'txt'])) 
        {

            echo "You file extension must be .zip, .pdf, .docx or .txt";
            header ("Location: career_unsuccess.php");

        } 

        else 
        {
            // Move the file to the correct folder //
            move_uploaded_file($file, $destination);

            // Insert the data into the database table //
            $input_contact = "insert into career (first_name, last_name, email, subject, filename) values ('$first_name', '$last_name', '$email', '$subject', '$filename')";
            mysqli_query ($connection, $input_contact);
            header ("Location: career_success.php");
        
        }

        mysqli_close ($connection);

    }    

?>