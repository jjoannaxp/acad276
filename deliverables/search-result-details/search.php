<html>
<head>
    <title>Class Add</title>
    <style>
        body{
            margin: 10%;
            font-family: Helvetica;
            color:#312E2B;
        }
        select, input{
            margin: 5px;
        }
    </style>
</head>
<body>
<div id="container">
    <h1>Search Classes</h1>

    <?php
    $servername = "webdev.iyaserver.com";
    $username = "jhpoon";
    $password = "AcadDev_Poon_4435280432";
    $dbname = "jhpoon_schedule";

    $mysql = new mysqli($servername, $username, $password, $dbname);

    $classsql = "SELECT * from classes";
    $classresults = $mysql -> query($classsql);

    $typesql = "SELECT * from types";
    $typeresults = $mysql -> query($typesql);

    $roomsql = "SELECT * from locations";
    $roomresults = $mysql -> query($roomsql);

    ?>
    <form action="result.php">
        Class Name: <select name="name" required>
            <option value="ALL" selected >Select a class</option>
            <option disabled >–––</option>
            <?php
            while($currentrow = $classresults->fetch_assoc()){
                echo "<option>" . $currentrow["class"] . "</option>";

            }

            ?>
        </select>
        <br>

        Date: <input type="date" name = "date">
        <br>

        Class Type: <select name="type" required>
            <option value="ALL" selected >Select a class type</option>
            <option disabled >–––</option>
            <?php
            while($currentrow = $typeresults->fetch_assoc()){
                echo "<option >" . $currentrow["type"] . "</option>";

            }

            ?>
        </select>
        <br>

        Classroom: <select name="room" required>
            <option value="ALL" selected >Select a class type</option>
            <option disabled >–––</option>
            <?php
            while($currentrow = $roomresults->fetch_assoc()){
                echo "<option>" . $currentrow["location"] . "</option>";

            }
            ?>
        </select>
        <br>
        <br>

        <input type="Submit">
    </form>
</div>
</body>
</html>