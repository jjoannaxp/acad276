<!DOCTYPE html>

<html>

<head lang="en">

    <meta charset="UTF-8">

    <title>Acad276 Practical Exam: Search</title>

    <style>

        h1 {

            margin: auto;

            text-align: center;

            background-color:   #900;

            color:  #FC0;

        //            height: 60px;

            line-height: 60px;

        }

        h2 {

            margin: auto;

            text-align: center;

            padding:  30px;

        }

        .container {

            width:  400px;

            margin: auto;

            border: 1px solid red;

        }

        .left-col, .right-col {

            float:  left;

            width:  100%;

            height: 280px;

            border: 1px solid #990000;

        }

        .label, .input {

            float:  left;

            width:  130px;

            margin: 3px;

        }

        .label {

            margin-left: 40px;

        }

        .input>input, .input>select {

            width:  100%;

        }

        .search-submit {

            margin-top: 20px;

            margin-left: 170px;

            width:  80px;

        }

    </style>

</head>

<body>

<div class="container">

    <h1>Mobile Devices Database</h1>

    <?php
    $servername = "webdev.iyaserver.com";
    $username = "dent_guest";
    $password = "Acad276_Dev2Ex@m";
    $dbname = "dent_exam";
    $mysql = new mysqli($servername, $username, $password, $dbname);

    if ($mysql->connect_errno) {
        echo "db connection error : " . $mysql->connect_error;
        exit();
    }


    $mansql = "SELECT * from manufacturers";
    $manresults = $mysql -> query($mansql);

    if (!$manresults) {
        echo "SQL ERROR" . $mysql->error;
    }

    $systemsql = "SELECT * from systems";
    $systemresults = $mysql -> query($systemsql);

    if (!$systemresults) {
        echo "SQL ERROR" . $mysql->error;
    }

    $typesql = "SELECT * from types";
    $typeresults = $mysql -> query($typesql);

    if (!$typesql) {
        echo "SQL ERROR" . $mysql->error;
    }
    ?>

    <div class="left-col">

        <h2>Search the Database</h2>

        <form method="get" action="results.php">

            <div class="label">Device Name:</div>

            <div class="input">

                <input type="text" name="device_name"/>

            </div>

            <br clear="all"/>



            <div class="label">Manufacturer :</div>

            <div class="input">

                <select name="manufacturer_id">

                    <option value='all'>All</option>

                    <?php
                    while($currentrow = $manresults->fetch_assoc()){
                        echo "<option>" . $currentrow["manufacturer"] . "</option>";

                    }

                    ?>
                </select>
            </div>

            <br clear="all"/>



            <div class="label">Operating System:</div>

            <div class="input">

                <select name="system_id">

                    <option value='all'>All</option>

                    <?php
                    while($currentrow = $systemresults->fetch_assoc()){
                        echo "<option>" . $currentrow["system"] . "</option>";

                    }

                    ?>
                </select>
            </div>

            <br clear="all"/>



            <div class="label">Type:</div>

            <div class="input">

                <select name="type_id">

                    <option value='all'>All</option>

                    <?php
                    while($currentrow = $typeresults->fetch_assoc()){
                        echo "<option>" . $currentrow["type"] . "</option>";

                    }

                    ?>
                </select>

            </div>

            <br clear="all"/>



            <input class="search-submit" type="submit" value="Search"/>

        </form>

    </div>

    <br clear="all"/>

</div>

</body>

</html>