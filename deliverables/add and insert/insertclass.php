<html>
<head>
    <title>Insert Class</title>
    <style>
        body{
            margin: 10%;
            font-family: Helvetica;
            color:#312E2B;
        }
    </style>
</head>
</html>
<body>
<?php

if (empty($_REQUEST['addedClass'])) {
    echo "Error. You must go to the <a href='classadd.php'>insert form page<a>. You cannot load this page directly. ";
    exit();
}

if (empty(trim($_REQUEST['addedClass']))) {
    echo "Error. You must enter a class name.";
    exit();
}


$servername = "webdev.iyaserver.com";
$username = "jhpoon";
$password = "AcadDev_Poon_4435280432";
$dbname = "jhpoon_schedule";

$mysql = new mysqli($servername, $username, $password, $dbname);



$class = $_REQUEST["addedClass"];
$sql = "INSERT INTO classes (class) VALUES  ('$class')";
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

echo "You have added the following class into the database: " . $class;

echo "<h3> Current Classes: </h3> <br>";
$classsql = "SELECT * from classes";
$classresults = $mysql -> query($classsql);

while($currentrow = $classresults->fetch_assoc()){
    echo $currentrow["class_id"] .". " .$currentrow["class"] . "<br>";
} ?>
</body>
