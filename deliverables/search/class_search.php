<html>
<head>
    <title>Class Search</title>
</head>
<style>
    body{
        background-color:white;
        margin: 10%;
        font-family: Helvetica;
    }
    #content{
        background-color: white;
        color: #312E2B;
        padding: 5%;
        border-radius: 20px;
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
    <h1>Class Search</h1>
    <form action="class_results.php" method="get">
        <label for="class_name">Class Name: </label>
        <input type="text" id="class_name" name="className">

        <label for="room">Room:</label>
        <input type="text" id = "room" name="room">

        <input type="Submit">
    </form>
</div>
</body>
</html>


