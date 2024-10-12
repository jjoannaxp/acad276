<?php
if (empty($_REQUEST['manufacturer_id'])) {
    echo "Error: no manufacturer input. Please try again: <a href = 'search.php'>Search Page</a>";
    exit();
}
if (empty($_REQUEST['system_id'])) {
    echo "Error: no operating system input. Please try again: <a href = 'search.php'>Search Page</a>";
    exit();
}
if (empty($_REQUEST['type_id'])) {
    echo "Error: no type input. Please try again: <a href = 'search.php'>Search Page</a>";
    exit();
}
?>

<!DOCTYPE html>

<html>

<head lang="en">

    <meta charset="UTF-8">

    <title>Acad276 Practical Exam: Results</title>

    <style>

        .container {

            width: 600px;

            margin: auto;

        }

        h1 {

            margin: auto;

            text-align: center;

            background-color: #900;

            color: #FC0;

            height: 60px;

            line-height: 60px;

        }

        .num-results {

            margin: 20px 10px;

        }

        table {

            margin: auto;

            margin-bottom: 20px;

            width: 80%;

            border-collapse: collapse;

        }

        th, td {

            border: 1px solid #900;

            border-collapse: collapse;

            padding: 10px;

            text-align: center;
            width: 100%;

        }

        img {

            width: 100px;

        }

        .nav-link {

            margin: 10px 0px;

            font-size: 14px;

        }

    </style>

</head>

<body>

<div class="container">

    <h1>Mobile Device Database: Search Results</h1>

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

    $manufacturer = $_REQUEST["manufacturer_id"];
    $system = $_REQUEST["system_id"];
    $type = $_REQUEST["type_id"];

    $sql = "SELECT name, price, manufacturer, system, type, device_id
        FROM devices, manufacturers, systems, types 
        WHERE devices.manufacturer_id = manufacturers.manufacturer_id
        AND devices.system_id = systems.system_id
        AND devices.type_id = types.type_id";

    if ($_REQUEST['manufacturer_id'] != "all") {
        $sql .= " AND manufacturer = '" . $_REQUEST["manufacturer_id"] . "'";
    }

    if ($_REQUEST['system_id'] != "all") {
        $sql .= " AND system = '" . $_REQUEST["system_id"] . "'";

    }
    if ($_REQUEST['type_id'] != "all") {
        $sql .= " AND type = '" . $_REQUEST["type_id"] . "'";

    }


    $results = $mysql->query($sql);
    if (!$results) {
        echo "SQL ERROR" . $mysql->error;
    }

    echo "Your search returned " . $results->num_rows . " results.<br>";


    ?>


    <div class="nav-link">

        <a href="search.php"><< Back to Search Page</a>

    </div>


    <table>

        <tr>

            <th>Name</th>

            <th>Price</th>

            <th>Manufacturer</th>

            <th>System</th>

            <th>Type</th>

        </tr>


        <!--

        ****** SAMPLE OUTPUT ROW ******

        -->
        <?php
        while ($currentrow = $results->fetch_assoc()) {
            echo "<td><div class='title'>" .
                "<a href='details.php?id=" . $currentrow["device_id"] . "'>" .
                $currentrow['name'] .
                "</td>";
            echo "<td> " . $currentrow["price"] . "</td>";
            echo "<td> " . $currentrow["manufacturer"] . "</td>";
            echo "<td> " . $currentrow["system"] . "</td>";
            echo "<td> " . $currentrow["type"] . "</td><tr>";

        }


        ?>

    </table>

</div>

</body>

</html>