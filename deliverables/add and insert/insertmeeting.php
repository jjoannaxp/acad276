
<html>
<head>
    <title>Insert Meeting</title>
</head>
<style>
    body{
        margin: 10%;
        font-family: Helvetica;
        color:#312E2B;
    }
    table{
        color: #312E2B;
        width:100%;

    }
    th{
        font-size: 16px;
    }
    td, th {
        border: 1px solid #776C60;
        text-align: left;
        padding: 8px;
    }
</style>
<body>
<?php

if (empty($_REQUEST['name'])) {
    echo "Error. You must go to the <a href='classadd.php'>insert form page<a>. You cannot load this page directly. ";
    exit();
}


$servername = "webdev.iyaserver.com";
$username = "jhpoon";
$password = "AcadDev_Poon_4435280432";
$dbname = "jhpoon_schedule";

$mysql = new mysqli($servername, $username, $password, $dbname);

$class = $_REQUEST["name"];
$date = $_REQUEST["date"];
$start = $_REQUEST["start"];
$end = $_REQUEST["end"];
$type = $_REQUEST["type"];
$room = $_REQUEST["room"];



$sql = "INSERT INTO schedule (class_id, date, starttime, endtime, type_id, location_id) VALUES 
    ('$class', '$date', '$start', '$end', '$type', '$room')";
$results = $mysql->query($sql);

//if ($mysql->connect_errno) {
//    echo "<hr>db connection error : " . $mysql->connect_error;
//    exit("STOPPING PAGE.");
//}
//
//if(!$results) {
//    echo "ERROR! FORM info " . print_r($_REQUEST) . "<hr>";
//    echo "SQL: " . $sql . "<hr>";
//    echo "db error: " . $mysql->error;
//    exit();
//}else{
//    echo "true";
//}

echo "<b>You have added the following class meeting into the database: </b><br> <br>";

$classSQL = "SELECT class FROM classes WHERE class_id = '$class'";
$classResult = $mysql->query($classSQL);

while($currentrow = $classResult->fetch_assoc()){
        echo "Class Name: " . $currentrow['class'] . "<br>";
}
echo "Date: " . $date . "<br>";
echo "Start Time: " . $start . "<br>";
echo "End Time: " . $end . "<br>";

$typeSQL = "SELECT type FROM types WHERE type_id = '$type'";
$typeResults = $mysql->query($typeSQL);

while($currentrow = $typeResults->fetch_assoc()){
    echo "Class Type: " . $currentrow['type'] . "<br>";
}

$roomSQL = "SELECT location FROM locations WHERE location_id = '$room'";
$roomResults = $mysql->query($roomSQL);

while($currentrow = $roomResults->fetch_assoc()){
    echo "Classroom: " . $currentrow['location'] . "<br>";
}

$sql = "
        SELECT * from schedule_normal";


$results = $mysql->query($sql);
echo "<h3>Current Database <h3><br>";
echo"<table>
                        <tr>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>

                            <th>Room</th>
                            <th>Name</th>
                            <th>Type</th>
                        </tr>";

                    while($currentrow = $results->fetch_assoc()) {
                    	echo "<td class = 'date'>" . $currentrow["date"] . "</td>";
                        echo "<td class = 'time'> " . $currentrow["starttime"] . "</td>";
                        echo "<td class = 'time'> " . $currentrow["endtime"] . "</td>";
                         echo "<td class = 'room'> " . $currentrow["location"] . "</td>";
                         echo "<td class = 'name'>" . $currentrow["class"] . "</td>";
                          echo "<td class = 'type'> " . $currentrow["type"] . "</td><tr>";

                    }

                    echo"</table>"; ?>
</body>

</html>