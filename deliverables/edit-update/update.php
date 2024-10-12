<?php
if(empty($_REQUEST['id'])){
    exit("You have reached this update page in error.");
}

$servername = "webdev.iyaserver.com";
$username = "jhpoon";
$password = "AcadDev_Poon_4435280432";
$dbname = "jhpoon_schedule";


$mysql = new mysqli($servername, $username, $password, $dbname);

if ($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}
//echo $_REQUEST["id"];

$sql = "UPDATE schedule SET " .
    "class_id = '" . $_REQUEST["name"] . "' , " .
    "date = '" . $_REQUEST["date"] . "' , " .
    " starttime = '" . $_REQUEST["start"] . "' , " .
    " endtime = '" . $_REQUEST["end"] . "' , " .
    " type_id = '" . $_REQUEST["type"] . "' , " .
    " location_id = '" . $_REQUEST["room"]  . "'" .

    " WHERE schedule_id = " . $_REQUEST["id"];

//exit("Current SQL " . $sql);

$results = $mysql->query($sql);
if(!$results) {
    echo "<hr>Your SQL:<br> " . $sql . "<br><br>";
    echo "SQL Error: " . $mysql->error . "<hr>";
    exit();
}

$sql = "SELECT * FROM scheduleView WHERE schedule_id = " . $_REQUEST["id"];


$results = $mysql->query($sql);

?>
<html>
<head>
    <title>Update</title>
    <style>
        body {
            margin: 10%;
            font-family: Helvetica;
            color: #312E2B;
            line-height: 30px;
            font-size: 16px;
        }
        b{
            font-size: 25px;
            line-height: 50px;
        }
        em{
            font-weight: 900;
        }
    </style>
</head>
<body>
<h1>Update Results</h1>
<?php
while ($currentrow = $results->fetch_assoc()) {
    echo "<b>" . $currentrow["class"] . "</b><br>";
    echo "<em>Date:</em> " . $currentrow["date"] . "<br>";
    echo "<em>Start Time:</em> " . $currentrow["starttime"] . "<br>";
    echo "<em>End Time:</em> " . $currentrow["endtime"] . "<br>";
    echo "<em>Location:</em> " . $currentrow["location"] . "<br>";
    echo "<em>Type:</em> " . $currentrow["type"] . "<br>";

    echo "<br>";
}


if ($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}

?>
</body>
</html>
