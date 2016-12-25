<div class="featured_movies">
<link rel="stylesheet" href="styles/feature-carousel.css" charset="utf-8" />
    <script src="js/jquery-1.7.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.featureCarousel.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        var carousel = $("#carousel").featureCarousel({
          // include options like this:
          // (use quotes only for string values, and no trailing comma after last option)
          // option: value,
          // option: value
        });

        $("#but_prev").click(function () {
          carousel.prev();
        });
        $("#but_pause").click(function () {
          carousel.pause();
        });
        $("#but_start").click(function () {
          carousel.start();
        });
        $("#but_next").click(function () {
          carousel.next();
        });
      });
    </script>
  </head>
  <body>
  
   
  
    <div class="carousel-container">
    
      <div id="carousel">
        <div class="carousel-feature">
          <a href="?id=39&page=info"><img class="carousel-image" alt="Image Caption" src="images/featured/The Pursuit Of Happyness.jpg" width="450px" height="300"></a>
          <div class="carousel-caption">
            <p>
              The Pursuit Of Happyness
            </p>
          </div>
        </div>
        <div class="carousel-feature">
          <a href="?id=2&page=info"><img class="carousel-image" alt="Image Caption" src="images/featured/300.jpg" width="450px" height="300"></a>
          <div class="carousel-caption">
            <p>
               300
            </p>
          </div>
        </div>
        <div class="carousel-feature">
		  <a href="?id=15&page=info"><img class="carousel-image" alt="Image Caption" src="images/featured/Finding Nemo.jpg" width="450px" height="300"></a>	
          <div class="carousel-caption">
            <p>
              Finding Nemo
            </p>
          </div>
        </div>
        <div class="carousel-feature">
		  <a href="?id=60&page=info"><img class="carousel-image" alt="Image Caption" src="images/featured/Zombieland.jpg" width="450px" height="300"></a>	
          <div class="carousel-caption">
            <p>
              Zombieland
            </p>
          </div>
        </div>
        <div class="carousel-feature">
		 <a href="?id=14&page=info"><img class="carousel-image" alt="Image Caption" src="images/featured/Fight Club.jpg" width="450px" height="300"></a>	
          <div class="carousel-caption">
            <p>
              Fight Club
            </p>
          </div>
        </div>
        <div class="carousel-feature">
		<a href="?id=9&page=info"><img class="carousel-image" alt="Image Caption" src="images/featured/The Dark Knight.jpg" width="450px" height="300"></a>          
            <div class="carousel-caption">
            <p>
             The Dark Knight
            </p>
          </div>
        </div>
      </div>
    
      <div id="carousel-left"><img src="images/arrow-left.png" /></div>
      <div id="carousel-right"><img src="images/arrow-right.png" /></div>
    </div>
</div><!--End of featured movies-->







<div class="recent_movies">
<p align="center"><u>Recently Added</u></p>
	<table cellpadding="5px" cellspacing="20px">
    	<tr>
        	<td><a href="?id=47&page=info"><img src="images/recent/This Is The End.jpg" width="175px" height="250px" /></a></td>
            <td><a href="?id=8&page=info"><img src="images/recent/The Conjuring.jpg"  width="175px" height="250px" /></a></td>
            <td><a href="?id=33&page=info"><img src="images/recent/Now You See Me.jpg"  width="175px" height="250px" /></a></td>
            <td><a href="?id=11&page=info"><img src="images/recent/Django Unchained.jpg"  width="175px" height="250px" /></a></td>
            <td><a href="?id=29&page=info"><img src="images/recent/Life of Pi.jpg"  width="175px" height="250px" /></a></td>
        </tr>
        <tr align="center">
        	<td>This Is The End</td>
            <td>The Conjuring</td>
            <td>Now You See Me</td>
            <td>Django Unchained</td>
            <td>Life Of Pi</td>
        </tr>
    </table>
</div><!--End of recent movies-->
