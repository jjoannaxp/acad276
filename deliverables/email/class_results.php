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

        $class = $_REQUEST["name"];
        $type = $_REQUEST["type"];
        $room = $_REQUEST["room"];
        $date = $_REQUEST["date"];
        $sort = $_REQUEST["order"];

        $sql = "
        SELECT * from schedule_normal WHERE 1=1";

        if($_REQUEST['name'] != "ALL" ) {
            $sql .=		" AND class = '" . $_REQUEST["name"] . "'";
        }

        if($_REQUEST['type'] != "ALL") {
            $sql .=		" AND type = '" . $_REQUEST["type"] . "'";
        }
        if($_REQUEST['room'] != "ALL") {
            $sql .=		" AND location = '" . $_REQUEST["room"] . "'";
        }

        if($_REQUEST["date"] != ""){
            $sql.= " AND date > '" . $date . "'";
        }

        $sql.= " ORDER BY '" . $sort . "'";

//        echo "<hr>" . $sql . "<hr>";
        $results = $mysql -> query($sql);
        echo "Your search returned " . $results->num_rows . " results.<br>";


        ?>
        <div id="search_criteria">
            <?php
            echo "<br><b>Class Name:</b> " . $class . "<br><b>Class Type:</b> " . $type . "<br><b>Classroom:</b> " . $room . "<br><b>After:</b> ". $date . "<br><b>Sort By:</b> " . $sort
            ?>
        </div>
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
                    if (!empty($_REQUEST["email"])) {
                        $message = "Class Search Results\r";
                        $message .="--------------------------------\r";

                        while($currentrow = $results->fetch_assoc()) {
                            $message .= "Class " . $currentrow["class"] .
                                " (Date " .
                                $currentrow["date"] .
                                "),  " .
                                " (Start Time " .
                                $currentrow["starttime"] .
                                "),  " .
                                " (Location " .
                                $currentrow["location"] .
                                "),  " ." (Type " .
                                $currentrow["type"] .
                                ")  " .
                                "\r";
                        }
                        mail($_REQUEST["email"], "Your Class Results", $message);
                        echo "<hr><em>(results emailed to " . $_REQUEST["email"] . ")</em><hr><br>";
                        $results->data_seek(0);
                    }

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
</body>
</html>