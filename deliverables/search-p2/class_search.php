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
        width: 20%;
        padding: 4px;
        border: 1px solid #312E2B;
        border-radius: 4px;
        margin-bottom: 2px;
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

    select{
        font-size: 15px;
        padding: 2px 5px;
        border-radius: 4px;
        margin: 7px;
    }

    form{
        font-weight: 900;
    }


    .caption{
        font-size: 14px;
        font-weight: 300;
    }
</style>
<body>
<div id="content">
    <h1>Class Search</h1>
    <form action="class_results.php" method="get">
        Class Name: <select name="name">
            <option value="ALL">Select a class</option>
            <option>The Practice of Design: Ideation to Innovation</option>
            <option>Language and Society</option>
            <option>Dev II</option>
            <option>Materials: Denim to Nanotubes</option>
        </select>
        <br>
        Class Type: <select name="type">
            <option value="ALL">Select a class type</option>
            <option>Lecture</option>
            <option>Discussion</option>
        </select>
        <br>
        Classroom: <select name="room">
            <option value="ALL">Select a classroom</option>
            <option>IYH212/213</option>
            <option>GFS106</option>
            <option>IYH210/211</option>
            <option>DMC202</option>
        </select>
        <br>

        Class meetings after: <input type="text" name = "date">
        <div class="caption">Enter in format yyyy-mm-dd</div>
        <br>
        Sort Order: <select name="order">
            <option>Class Name</option>
            <option>Class Type</option>
            <option>Classroom</option>
        </select>
        <br>

        <input type="Submit">
    </form>
</div>
</body>
</html>


