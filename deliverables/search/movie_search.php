<html>
<head>
    <title>Movie Search</title>
</head>
<style>
    body{
        background-color: white;
        margin: 10%;
        font-family: Helvetica;
        background-image: url('bg_movie.png');
        background-repeat: repeat;
        background-size: auto;
    }
    #content{
        background-color: white;
        color: #312E2B;
        padding: 5%;
        border-radius: 2px;
                    border: 1px solid #776C60;

    }
    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #312E2B;
        border-radius: 5px;
        margin-bottom: 10px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="submit"] {
        background-color: #FFFFFF;
        color: #312E2B;
        padding: 5px 10px;
        border-radius: 10px;
    }
</style>
<body>
<div id="content">
    <h1>Movie Search</h1>
    <form action="movie_results.php" method="get">
        <label for="movie-title">Movie Title:</label>
        <input type="text" id = "movie-title" name="title">

        <label for="rating">Rating:</label>
        <input type="text" id = "rating"  name="rating">

        <input type="Submit">
    </form>
</div>
</body>
</html>



