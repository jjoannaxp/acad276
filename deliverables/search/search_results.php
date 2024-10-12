
<html>
<head>
    <title>search results</title>
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
    </style>
</head>
<body>
<div id="content">
<?php
echo "Thank you " . $_REQUEST["fname"] . " " . $_REQUEST["lname"] . " (" . $_REQUEST["email"] . ") " . "for contacting us. Your message below has been sent to customer service.";
?>
<?php echo $_REQUEST["comment"];?>
</div>
</body>
</html>
<br>
