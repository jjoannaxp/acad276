<?php

$host = "webdev.iyaserver.com";
$user = "jhpoon";
$pw = "AcadDev_Poon_4435280432";
$db = "jhpoon_dvd";















$mysql = new mysqli(
    $host,
    $user,
    $pw,
    $db
);

$sql = "
SELECT * from dvd_titles WHERE title = 'Die Hard 2'
";

$results = $mysql -> query($sql);
if(!$results){
    echo "SQL ERROR".$mysql -> error;
}else{
    echo "true";
}
?><br>



