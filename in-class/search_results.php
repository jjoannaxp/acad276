<?php
$host = "webdev.iyaserver.com";
$userid = "jhpoon";
    $userpw = "AcadDev_Poon_4435280432";
        $db = "jhpoon_dvd";

            // include '../pdloginvariables.php'; // you can ignore/skip this line

            $mysql = new mysqli(
            $host,
            $userid,
            $userpw,
            $db
            );

            if($mysql->connect_errno) {
            echo "db connection error : " . $mysql->connect_error;
            exit();
            }

            $sql = "

                SELECT * FROM movieView WHERE title like '" .
                $_REQUEST["title"] .
                "%' 
                AND 
                genre = '". $_REQUEST["genre"] . "'";

            echo "<hr>" . $sql . "<hr>";
            $results = $mysql->query($sql);

            if(!$results) {
            echo "SQL error: ". $mysql->error;
            exit();
            }

            echo "Your search returned " . $results->num_rows . " results.<br>";

            while($currentrow =  $results->fetch_assoc()) {
                echo "title: " . $currentrow["title"]; // replace field1 with the name of a column from your SELECT
            }

            ?>