<html>
<head>
    <title>Class Search Results</title>
    <style>
        body{
            margin: 10%;
            font-family: Helvetica;
            color:#312E2B;
        }
        #content{
            color: #312E2B;
            padding: 5%;
            border-radius: 20px;
            margin-top: 20px;
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
        
        #icon{
            width : 10px;
        }
    </style>
</head>
<body>
    <div class="search-container">
        <h1>Class Search Results</h1>
        <?php
        $servername = "webdev.iyaserver.com";
        $username = "jhpoon";
        $password = "AcadDev_Poon_4435280432";
        $dbname = "jhpoon_schedule";








        $mysql = new mysqli($servername, $username, $password, $dbname);
        if($mysql->connect_errno) {
            echo "db connection error : " . $mysql->connect_error;
            exit();
        }

        $class = $_REQUEST["className"];
        $room = $_REQUEST["room"];

        $sql = "
        SELECT * from schedule, classes, locations, types
        WHERE class LIKE '%$class%'
        AND location LIKE '%$room%'
        AND schedule.location_id = locations.location_id
        AND schedule.type_id = types.type_id
        AND schedule.class_id = classes.class_id;
        ";
        
        $results = $mysql -> query($sql);

        ?>
        <div id = "content">
            <div id = "results">
                    <table>
                        <tr>
                            <th class="icon"></th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Room</th>
                            <th>Name</th>
                            <th>Type</th>
                        </tr>
                    <?php
                    while($currentrow = $results->fetch_assoc()) {
                        echo "<tr><td class = 'icon'><img src='icon.png' width = '10px'></td>";
                    	echo "<td class = 'date'>" . $currentrow["date"] . "</td>";
                        echo "<td class = 'time'> " . $currentrow["starttime"] . "</td>";
                        
                         echo "<td class = 'room'> " . $currentrow["location"] . "</td>";
                         echo "<td class = 'name'>" . $currentrow["class"] . "</td>";
                          echo "<td class = 'type'> " . $currentrow["type"] . "</td><tr>";
                        
                    }
                    ?>
                    </table>
                </div>
        </div>
        
        </div>
    </div>
</body>
</html>