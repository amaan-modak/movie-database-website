<div class="movie_info">
<div class="profile">

<?php
if(empty($_GET['pagenum']))
	{
		$pagenum = 0;
		}
else
{
	$pagenum = $_GET['pagenum']-1;
	
}
$id = $_GET['id'];
if(empty($_GET['info'])or $_GET['info']=="movies")
	{
		$info = "movies";
		$folder = "posters";
		$title = "Title";
		}
else
{
	$info = $_GET['info'];
	$folder = "Actors";
	$title = "Name";
	
}

$query = "SELECT * FROM ".$info." WHERE id = ".$id;

$result = mysqli_query($link,$query);
if(!$result)
	{
		echo "Could not load movies.. :(";
		}
$row = mysqli_fetch_assoc($result);
if($info=="actors")
	{
		$movies = $row['movies'];
		$movie = explode(",",$movies);
		}
	echo '
			<div class="movie_pic"><img src="images/'.$folder.'/'.$row['name'].'.jpg" width="225px" height="275px" /></div>
			<div class="info">
			<table cellpadding="10px">
			<tr >
				<td>'.$title.':</td>
				<td><p style="width:95%">'.$row['name'].'</p></td>
			</tr>
		
			';
		if($info=="actors")
			{
				echo '
				<tr>
				
				<td>Age: </td>
				<td>'.$row['age'].'</td>
			</tr>';
		
			}
		if($info=="movies")
			{
				echo '
				<tr>
				
				<td>Release Date: </td>
				<td>'.$row['date'].'</td>
			</tr>
			<tr>
				
				<td>Rating:</td>
				<td>';
				for($star = 0 ; $star < $row['rating'] ; $star++)
					{
						echo '<img src="images/star_full.png" width="15px" height="15px" />';
						}
				for($star = 0 ; $star < 10-$row['rating'] ; $star++)
					{
						echo '<img src="images/star_empty.png" width="15px" height="15px" />';
						}
				echo '</td>
			</tr>
			<tr>
				
				<td>Genre:</td>
				<td>'.$row['genre'].'</td>
			</tr>';
		
			}
		echo '</table>
			</div>';
?>

</div><!--END of PROFILE-->
</div><!--END of movie info-->
<div class="cdp">
<div class="browse">
<?php
if($info=="actors")

{
	echo "<h2 id=\"cast\" align=\"center\">Movies Acted In</h2>";
	$query_movies = "SELECT * FROM movies";
$result_movies = mysqli_query($link,$query_movies);

if(!$result_movies)
	{
		echo "Could not load movies.. :(";
		}
while($row3 = mysqli_fetch_assoc($result_movies))
{
	foreach($movie as $acted_in)
		{
			if($acted_in==$row3['id'])
				{
					echo '<div class="browse_movies">
                    <table cellspacing="10px" align="center">
                    <tr>
                      <td><a href="?id='.$row3['id'].'&page=info"><img src="images/Posters/'.$row3['name'].'.jpg" width="160px" height="210px" /></a></td>
                  </tr>
                  <tr>
                      <td align="center">'.$row3['name'].'</td>
                  </tr>
              </table>
          </div><!--END OF BROWSE_MOVIES-->
                  ';
				  
					}
		}
		
}
die();
}
echo "<h2 id=\"cast\" align=\"center\">Cast</h2>";
$query_actors = "SELECT * FROM actors";
$result_actors = mysqli_query($link,$query_actors);

if(!$result_actors)
	{
		echo "Could not load cast.. :(";
		}
while($row2 = mysqli_fetch_assoc($result_actors))
{

	$movies = $row2['movies'];
	$movie = explode(",",$movies);
	if(in_array($row['id'],$movie))
		{
			echo '<div class="browse_movies">
                    <table cellspacing="10px" align="center">
                    <tr>
                      <td><a href="?id='.$row2['id'].'&info=actors&page=info"><img src="images/Actors/'.$row2['name'].'.jpg" width="150px" height="200px" /></a></td>
                  </tr>
                  <tr>
                      <td align="center">'.$row2['name'].'</td>
                  </tr>
              </table>
          </div><!--END OF BROWSE_MOVIES-->
                  ';
		}
	}



?>
</div><!--END of BROWSE(To inherit same properties as browse movies in cast list)-->
<h2 id="director" align="center">Director</h2><?php echo $row['director']; ?>

<div class="plot">
<h2 id="plot" align="center">Plot</h2>
<?php echo $row['plot']; ?>
</div><!--END of plot-->
</div><!--END of cdp-->
