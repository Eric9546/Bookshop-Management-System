<?php

    $day = $_POST ['day'];
    $month = $_POST ['month'];

    switch ($month)
    {

        case "July":

            if ($day == "6" || $day == "13" || $day == "20" || $day == "27" )
            {

                header ("Location: destination_available_monday.php");

            }

            else if ($day == "7" || $day == "14" || $day == "21" || $day == "28")
            {

                header ("Location: destination_available_tuesday.php");

            }

            else if ($day == "1" || $day == "8" || $day == "15" || $day == "22" || $day == "29")
            {

                header ("Location: destination_available_wednesday.php");

            }

            else if ($day == "2" || $day == "9" || $day == "16" || $day == "23" || $day == "30")
            {

                header ("Location: destination_available_thursday.php");

            }

             else if ($day == "3" || $day == "10" || $day == "17" || $day == "24" || $day == "31")
            {

                header ("Location: destination_available_friday.php");

            }

            else if ($day == "4" || $day == "11" || $day == "18" || $day == "25")
            {

                header ("Location: destination_available_saturday.php");

            }

            else 
            {

                header ("Location: destination_available_null.php");

            }    

            break;

        case "August":

            if ($day == "3" || $day == "10" || $day == "17" || $day == "24" || $day == "31" )
            {

                header ("Location: destination_available_monday.php");

            }

            else if ($day == "4" || $day == "11" || $day == "18" || $day == "25")
            {

                header ("Location: destination_available_tuesday.php");

            }

            else if ($day == "5" || $day == "12" || $day == "19" || $day == "26")
            {

                header ("Location: destination_available_wednesday.php");

            }

            else if ($day == "6" || $day == "13" || $day == "20" || $day == "27")
            {

                header ("Location: destination_available_thursday.php");

            }

             else if ($day == "7" || $day == "14" || $day == "21" || $day == "28")
            {

                header ("Location: destination_available_friday.php");

            }

            else if ($day == "1" || $day == "8" || $day == "15" || $day == "22" || $day == "29")
            {

                header ("Location: destination_available_saturday.php");

            }

            else 
            {

                header ("Location: destination_available_null.php");

            }    

            break;

        default:

             header ("Location: destination_available_null.php");

    }

    

?>