<!DOCTYPE html>
<html>
<?php
if (empty($_REQUEST['id'])) {
    Header('Location:results.php');
}
$servername = "webdev.iyaserver.com";
$username = "dent_guest";
$password = "Acad276_Dev2Ex@m";
$dbname = "dent_exam";


$mysql = new mysqli($servername, $username, $password, $dbname);
if ($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}


$sql = "SELECT name, price, img_url, manufacturer, system, type, device_id
        FROM devices, manufacturers, systems, types 
        WHERE devices.manufacturer_id = manufacturers.manufacturer_id
        AND devices.system_id = systems.system_id
        AND devices.type_id = types.type_id
        AND device_id =" . $_REQUEST['id'];

$results = $mysql->query($sql);
if (!$results) {
    echo "SQL ERROR" . $mysql->error;
}
?>
<head lang="en">
    <meta charset="UTF-8">
    <title>Acad276 Practical Exam: Details</title>
    <style>
        .container {
            width: 800px;
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

        .details {
            border: 1px solid #990000;
            width: 600px;
            margin: auto;
            margin-top: 20px;
            padding: 20px;
        }

        table {
            height: 300px;
            width: 100%;
        }

        table img {
            height: 300px;

        }

        img {
            width: 300px;

        }

        .label {
            text-align: right;
            width: 20%;
            padding: 3px 10px 3px;
        }

        .data {
            width: 40%;
        }

        .input > input, .input > select {
            width: 100%;
        }

        .nav-link {
            margin: 10px 0px;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Mobile Device Database: Details Page</h1>

    <div class="nav-link">
        <a href="search.php"><< Back to Search Page</a>
    </div>

    <div class="details">
        <table>
            <?php
            while ($currentrow = $results->fetch_assoc()) {
                if($currentrow['img_url'] != null){
                    echo "<tr>
                
                <td rowspan='5' class='img'>
                    <img src='" . $currentrow['img_url'] .
                        "'>
                </td>
                <td class='label'>Name:</td>
                <td class='data'><strong><em>" . $currentrow['name'] .
                        "</em></strong></td>
            </tr>";
                }else{
                    echo "<tr>
                
                <td rowspan='5' class='img'>
                    <img src='https://image.shutterstock.com/image-vector/vector-sketch-illustration-human-hand-260nw-605728496.jpg'>
                </td>
                <td class='label'>Name:</td>
                <td class='data'><strong><em>" . $currentrow['name'] .
                        "</em></strong></td>
            </tr>";
                }

                echo "<tr>
                <td class='label'>Price:</td>
                <td><strong>" . $currentrow['price'] . "</strong></td>
            </tr>";
                echo "<tr>
                <td class='label'>Manufacturer:</td>
                <td>" . $currentrow['manufacturer'] . "</td>
            </tr>";
                echo "<tr>
                <td class='label'>System:</td>
                <td>" . $currentrow['system'] . "</td>
            </tr>";
                echo "<tr>
                <td class='label'>Type:</td>
                <td>" . $currentrow['type'] . "</td>
            </tr>";
            }
            ?>


        </table>
    </div>

</div>
</body>
</html>