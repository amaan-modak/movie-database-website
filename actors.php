<?php
$host = "localhost";
$db = "movies";
$user = "root";


if(!$link = mysqli_connect($host,$user,"",$db))
	{
		echo "Could not connect.. :(";
		}
$query = "SELECT * FROM movies";
$result2 = mysqli_query($link,$query);

?>
<h1 align="center">Add Actors to the database from here..</h1><br><br>
<form action="actors.php" method="post" enctype="multipart/form-data">
<table cellspacing="20px" align="center" cellpadding="5px">
	<tr>
    	<td>Name</td>
        <td><input type="text" name="name" /></td>
    </tr>
    <tr>
    	<td>Age</td>
        <td><input type="text" name="age" size="2"/></td>
    </tr>
    <tr>
    	<td>Movies</td>
        <td>
         <div style="overflow: auto; width: 250px; height: 200px; border: 1px solid black; padding-left: 5px">
<?php
     while($row = mysqli_fetch_assoc($result2))
		{
			echo "<input class='catCheck' type='checkbox' name='movies[]' value = '".$row['id']."'/> ".$row['name']."<br>";
			
		}
?>
		</div>
        </td>
    </tr>
    <tr>
    	<td colspan="2"><input type="submit" name="submit" /></td>
    </tr>
</table>
</form>

<?php

if(isset($_POST['submit']))
	if(!empty($_POST['name']) and !empty($_POST['age']) and !empty($_POST['movies']))
	{
		$name = mysql_real_escape_string($_POST['name']);
		$age = $_POST['age']; 
		$movies = $_POST['movies'];
		$movies_string = "";
		foreach($movies as $movie)
		{
			$movies_string .= $movie.","; 
		}
		$movies_string = substr($movies_string,0,-1);
		$query2 = "INSERT INTO actors (name,age,movies) VALUES('$name','$age','$movies_string')";
		if(!$result = mysqli_query($link,$query2))
			{
				echo "Unable to update database.. :'(";
				}
		else
			{ 
				
				echo "<p align=\"center\">Actor Added successfully.. :D</p>";
				echo '<table cellspacing="10px" align="center">
                    <tr>
                      <td><img src="../images/Actors/'.$name.'.jpg" width="175px" height="225px" /></a></td>
                  </tr>
                  <tr>
                      <td align="center">'.$name.'</td>
                  </tr>
				  <tr>
                      <td align="center">Age: '.$age.'</td>
                  </tr>
              </table>';
			}
	
		
		}
?>








