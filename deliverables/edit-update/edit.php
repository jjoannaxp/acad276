<?php
$servername = "webdev.iyaserver.com";
$username = "jhpoon";
$password = "AcadDev_Poon_4435280432";
$dbname = "jhpoon_schedule";


$mysql = new mysqli($servername, $username, $password, $dbname);

if ($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}
echo $_REQUEST["id"];

$sql = "SELECT * FROM scheduleView WHERE schedule_id = " . $_REQUEST["id"];

$results = $mysql->query($sql);

$classsql = "SELECT * from classes";
$classresults = $mysql -> query($classsql);

$typesql = "SELECT * from types";
$typeresults = $mysql -> query($typesql);

$roomsql = "SELECT * from locations";
$roomresults = $mysql -> query($roomsql);

$data = $results->fetch_assoc();


echo "<hr>";

if($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
} else {
    echo "db connection success!

";
}

if(!$results) {
    echo "<hr>Your SQL:<br> " . $sql . "<br><br>";
    echo "SQL Error: " . $mysql->error . "<hr>";
    exit();
}
$num = 1;
?>

<html>
<head>
    <title>Edit</title>
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
<form action="update.php">
    Class Name: <select name="name" required>
        <option value="ALL" disabled >Select a class</option>
        <option disabled >–––</option>
        <?php
        while($currentrow = $classresults->fetch_assoc()){
            if($data['class'] == $currentrow['class']){
                echo "<option value = '$num' selected>" . $currentrow["class"] . "</option>";
            }else{
                echo "<option value = '$num'>" . $currentrow["class"] . "</option>";
            }

            $num++;
        }
        $num=1;
        ?>
    </select>
    <br>
    <?php
        echo "Date: <input type='date' name = 'date' value = ". $data['date'] . " required>";
    ?>
    <br>

    <?php
    echo "Start Time: <input type='time' name = 'start' value = ". $data['starttime'] . " required>";
    ?>
    <br>

    <?php
    echo "End Time: <input type='time' name = 'end' value = ". $data['endtime'] . " required>";
    ?>
    <br>


    Class Type: <select name="type" required>
        <option value="ALL" disabled >Select a class type</option>
        <option disabled >–––</option>
        <?php
        while($currentrow = $typeresults->fetch_assoc()){
            if($data['type'] == $currentrow['type']){
                echo "<option value = '$num' selected>" . $currentrow["type"] . "</option>";
            }else{
                echo "<option value = '$num'>" . $currentrow["type"] . "</option>";
            }
            $num++;
        }
        $num=1;
        ?>
    </select>
    <br>

    Classroom: <select name="room" required>
        <option value="ALL" disabled >Select a class type</option>
        <option disabled >–––</option>
        <?php
        while($currentrow = $roomresults->fetch_assoc()){
            if($data['location'] == $currentrow['location']){
                echo "<option value = '$num' selected>" . $currentrow["location"] . "</option>";
            }else{
                echo "<option value = '$num'>" . $currentrow["location"] . "</option>";
            }
            $num++;
        }
        $num=1;
        ?>
    </select>
    <br>
    <br>
    <input type="hidden" name="id" value="<?php echo($data["schedule_id"]); ?>">

    <input type="Submit">
</form>
</body>
</html>

