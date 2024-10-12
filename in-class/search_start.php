<html>
<head>
    <title>Search films</title>
</head>
<body>
<form action="search_results.php">
    Title:<input type="text" name="title"><br>
    Rating: <select name="rating">

    <option>G</option>
    <option selected=''>PG</option>
    <option>PG-13</option>
    <option>R</option>
    </select>
    <br>
    Genre: <select name="genre">
        <option>Sci-fi</option>
        <option>Comedy</option>
        <option>Action/Adventure</option>
    </select>
    <br>
    Sort order: <select name="sortorder">
		<option>title</option>
		<option>genre</option>
		<option>rating</option>
	</select>

    <input type="submit">
</form>

</body>
</html>