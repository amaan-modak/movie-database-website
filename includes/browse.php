<div class="browse">
<?php


if(empty($_GET['pagenum']))
	{
		$pagenum = 0;
		}
else
{
	$pagenum = $_GET['pagenum']-1;
	
}
if(empty($_GET['browse']))
	{
		$browse = "movies";
		$folder = "posters";
		if($_GET['type']=="All")
			{
				 $query = "SELECT * FROM movies";
			}
		else
			{
				$query = "SELECT * FROM movies WHERE genre = \"".$_GET['type']."\"";
			}
	}
else
	{
		$browse = "actors";
		$folder = "Actors";
		$query = "SELECT * FROM actors";
		}


$result = mysqli_query($link,$query);
if(!$result)
	{
		echo "Could not load ".$browse.".. :(";
		}
for($cur_page=1;$cur_page<=mysqli_num_rows($result);$cur_page++)
	{		
		if($cur_page < ($pagenum*15)+1 or $cur_page > ($pagenum*15)+15)
			{
				$row = mysqli_fetch_assoc($result);	
				continue;
				}	
		$row = mysqli_fetch_assoc($result);
		if(empty($row))
			{
				continue;
			}	
		echo '<div class="browse_movies" align="center">
                    <table cellspacing="10px" align="center">
                    <tr>
                      <td><a href="?id='.$row['id'].'&page=info&info='.$browse.'"><img src="images/'.$folder.'/'.$row['name'].'.jpg" width="160px" height="210px" /></a></td>
                  </tr>
                  <tr>
                      <td align="center">'.$row['name'].'</td>
                  </tr>
              </table>
          </div><!--END OF BROWSE_MOVIES-->
                  ';
	}
	

?> 
<ul class="pagenum">
<?php
$result2 = mysqli_query($link,$query);
$num_rows =  mysqli_num_rows($result2);
if($browse=="actors")
	{
		$link_text = "page=Browse&browse=actors";
		}
if($browse=="movies")
	{
		$link_text = "page=Browse&type=".$_GET['type'];
		}
$number_of_pages = ceil($num_rows/15);
if($number_of_pages>1)
for($page_link =1 ; $page_link <= $number_of_pages ; $page_link++)
	{
		echo '<li><a href="?'.$link_text.'&pagenum='.$page_link.'">'.$page_link.'</a></li>';
		}
?> 
</ul>
</div>
