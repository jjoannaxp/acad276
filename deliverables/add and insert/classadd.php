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
        <h1>Add a New Class</h1>
        <form action="insertclass.php">
            Class Name: <input type="text" name="addedClass" required>
            <input type="Submit">

        </form>

        <h1>Add a New Class Meeting</h1>

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
        $num=1;

        ?>
        <form action="insertmeeting.php">
            Class Name: <select name="name" required>
                <option value="ALL" disabled >Select a class</option>
                <option disabled >–––</option>
                <?php
                    while($currentrow = $classresults->fetch_assoc()){
                        echo "<option value = '$num'>" . $currentrow["class"] . "</option>";
                        $num++;
                    }
                    $num=1;
                ?>
            </select>
            <br>

            Date: <input type="date" name = "date" required>
            <br>

            Start Time: <input type="time" name = "start" required><br>

            End Time: <input type="time" name = "end" required><br>

            Class Type: <select name="type" required>
                <option value="ALL" disabled >Select a class type</option>
                <option disabled >–––</option>
                <?php
                while($currentrow = $typeresults->fetch_assoc()){
                    echo "<option value = '$num'>" . $currentrow["type"] . "</option>";
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
                    echo "<option value = '$num'>" . $currentrow["location"] . "</option>";
                    $num++;
                }
                $num=1;
                ?>
            </select>
            <br>
            <br>

            <input type="Submit">
        </form>
    </div>
</body>
</html>