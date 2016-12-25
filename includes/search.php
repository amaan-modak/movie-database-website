
<?php
$search_key = mysql_real_escape_string($_GET['movie_name']);
$query = "SELECT * FROM movies WHERE name LIKE '%".$search_key."%'";
if(!$result = mysqli_query($link,$query))
	{
		echo "could not get..";
	}
$query2 = "SELECT * FROM actors WHERE name LIKE '%".$search_key."%'";
if(!$result2 = mysqli_query($link,$query2))
	{
		echo "could not get..";
	}
if(mysqli_num_rows($result))
{

echo "<div class=\"browse\">";
echo "<h2 align=\"center\">Movies</h2>";
while($row = mysqli_fetch_array($result))
{
	echo '<div class="browse_movies">
                    <table cellspacing="10px" align="center">
                    <tr>
                      <td><a href="?id='.$row['id'].'&page=info"><img src="images/posters/'.$row['name'].'.jpg" width="160px" height="210px" /></a></td>
                  </tr>
                  <tr>
                      <td align="center">'.$row['name'].'</td>
                  </tr>
              </table>
          </div><!--END OF BROWSE_MOVIES-->
                  ';
}
echo "</div>";
}
if(mysqli_num_rows($result2))
{

echo "<div class=\"browse\">";
echo "<h2 align=\"center\">Actors</h2>";
while($row = mysqli_fetch_array($result2))
{
	echo '<div class="browse_movies">
                    <table cellspacing="10px" align="center">
                    <tr>
                      <td><a href="?id='.$row['id'].'&page=info&info=actors"><img src="images/Actors/'.$row['name'].'.jpg" width="160px" height="210px" /></a></td>
                  </tr>
                  <tr>
                      <td align="center">'.$row['name'].'</td>
                  </tr>
              </table>
          </div><!--END OF BROWSE_MOVIES-->
                  ';
}
echo "</div>";
}
if(!mysqli_num_rows($result) and !mysqli_num_rows($result2))
{
	echo "<div class=\"browse\">";
	echo "<h2 align=\"center\">No results found.. :'(</h2>";
	echo "</div>";
}
?>
