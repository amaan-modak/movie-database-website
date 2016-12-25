<h1 align="center">Add movies to the database from here..</h1><br><br>
<form action="movies.php" method="post" enctype="multipart/form-data">
<table cellspacing="20px" align="center" cellpadding="5px">
	<tr>
    	<td>Name</td>
        <td><input type="text" name="name" /></td>
    </tr>
    <tr>
    	<td>Release Date</td>
        <td><input type="text" name="date" /></td>
    </tr>
    <tr>
    	<td>Rating</td>
        <td><input type="text" name="rating" size="2" />/10</td>
    </tr>
    <tr>
    	<td>Genre</td>
        <td>
        <select name="genre">
        	<option value="Action">Action</option>
            <option value="Adventure">Adventure</option>
            <option value="Animation">Animation</option>
            <option value="Children">Children</option>
            <option value="Comedy">Comedy</option>
            <option value="Crime">Crime</option>
            <option value="Drama">Drama</option>
            <option value="Family">Family</option>
            <option value="Horror">Horror</option>
            <option value="Romantic">Romantic</option>
            <option value="Sci-Fi">Sci-Fi</option>
            <option value="Suspense">Suspense</option>
            <option value="Thriller">Thriller</option>
            <option value="Superhero">Superhero</option>
        </select>
        </td>
    </tr>
    <tr>
    	<td>Director</td>
        <td><input type="text" name="director" /></td>
    </tr>
    <tr>
    	<td>Plot</td>
        <td><textarea name="plot"></textarea></td>
    </tr>
    <tr>
    	<td colspan="2"><input type="submit" name="submit" /></td>
    </tr>
</table>
</form>

<?php
$host = "localhost";
$db = "movies";
$user = "root";


if(!$link = mysqli_connect($host,$user,"",$db))
	{
		echo "Could not connect.. :(";
		}
if(isset($_POST['submit']))
	{
		
		$name = mysql_real_escape_string($_POST['name']);
		$date = mysql_real_escape_string($_POST['date']);
		$rating = mysql_real_escape_string($_POST['rating']);
		$genre = mysql_real_escape_string($_POST['genre']);
		$director = mysql_real_escape_string($_POST['director']);
		$plot = mysql_real_escape_string($_POST['plot']);	
		$query = "INSERT INTO movies (name,date,rating,genre,director,plot) VALUES('$name','$date','$rating','$genre','$director','$plot')";
		if(!$result = mysqli_query($link,$query))
			{
				echo "Unable to update database.. :'(";
				}
		else
			{ 
				
				echo "<p align=\"center\">Movie Added successfully.. :D</p>";
			}
		}
?>








