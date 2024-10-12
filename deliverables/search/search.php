<html>
<head>
    <title>search</title>
    <style>
        body{
            margin: 10%;
            font-family: Helvetica;
        }
        #content{
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
</head>

<body>
<div id="content">
<h1>
    Customer Service:
</h1>
<form action="search_results.php"
      method="get">

    <label for="fname">First Name: </label> <input type ='text' id = "fname" name = "fname"> <br>
    <label for="lname">Last Name: </label> <input type ='text' id="lname" name = "lname"> <br>
    <label for="email">Email: </label> <input type="text" id="email" name="email"><br>
    <label for="comment">Comments: </label> <input type ="text" id="comment" name="comment"><br>
    <input type="Submit">
</form>
</div>
</body>
</html>