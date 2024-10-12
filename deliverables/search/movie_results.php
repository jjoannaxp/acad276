<html>
<head>
    <title>Movie Search Results</title>
    <style>
        body{
            margin: 10%;
            font-family: Helvetica;
            background-image: url("bg_movie.png");
            background-repeat: repeat;
            background-size: auto;
            color:black;
            background-color:white;
        }
        .search-container{
            background-color:white;
            padding: 20px;
            border-radius:4px;
            border: 1px solid #776C60;
        }
        #content{
            color: #312E2B;
            border-radius: 2px;
            margin-top: 20px;
        }
        
        #results{
            display:flex;
            flex-direction: column;
            gap: 10px;
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
        
        
    </style>
</head>
<body>
    <div class="search-container">
        <h1>Movie Search Results</h1>
        <?php
        $servername = "webdev.iyaserver.com";
        $username = "jhpoon";
        $password = "AcadDev_Poon_4435280432";
        $dbname = "jhpoon_dvd";








        $mysql = new mysqli($servername, $username, $password, $dbname);

        $title = $_GET["title"];
        $rating = $_GET["rating"];

        $sql = "
        SELECT * from dvd_titles, ratings, genres, sounds, labels
        WHERE title LIKE '%$title%'
        AND rating = '$rating'
        AND dvd_titles.rating_id = ratings.rating_id
        AND dvd_titles.genre_id = genres.genre_id
        AND dvd_titles.sound_id = sounds.sound_id
        AND dvd_titles.label_id = labels.label_id;
        ";
        
        $results = $mysql -> query($sql);
        $numrows = $results->num_rows;
//        if($mysql->connect_errno) {
//    echo "db connection error : " . $mysql->connect_error;
//    exit();
//} else {
//    echo "db connection success!

//";
//}

//        if(!$results){
//            echo "SQL ERROR".$mysql -> error;
//        }else{
//            echo "true";
//        }
//        ?>
         <?php echo "You searched for movies with " . $title . " with a rating of " . $rating . ".";?><br>
                <?php echo "There are " . $numrows . " results.";?>

        <div id="content">
                
                <div id = "results">
                    <table>
                        <tr>
                            <th id="titleheader">Title</th>
                            <th>Genre</th>
                            <th>Studio</th>
                            <th>Rating</th>
                            <th>Sound</th>
                        </tr>
                    <?php
                    while($currentrow = $results->fetch_assoc()) {
                    	echo "<tr><td class = 'title'>" . $currentrow["title"] . "</td>";
                        echo "<td class = 'genre'> " . $currentrow["genre"] . "</td>";
                        
                         echo "<td class = 'studio'> " . $currentrow["label"] . "</td>";
                         echo "<td class = 'rating'>" . $currentrow["rating"] . "</td>";
                          echo "<td class = 'sound'> " . $currentrow["sound"] . "</td>";
                        
                    }
                    ?>
                    </table>
                </div>
        </div>
    </div>
</body>
</html>