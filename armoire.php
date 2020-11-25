<!DOCTYPE html>
<html>

<head>
  <title>Escape</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/style-armoire.css">
  </head>

<body>

<!-- Modal Casier A -->
<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="locker1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Locker A</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-body auth">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">
                <?php
                if (isset($_GET["error"])) {

                  echo "<p id=\"demo\"></p>";
                }


                ?>
              </label>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <!-- Si tu vois ce code, il est pas sécurisé nous nique pas stp. Allez tapper Arthur mais jouez le jeu :) -->
        <button type="button" class="btn btn-secondary"
        <?php if (isset($_GET["error"])) {echo "disabled";}?> 
                data-dismiss="modal" href="#scrapModal" target="_self"data-toggle="modal" data-target="#locker-content">Four</button>
        <button type="button" class="btn btn-secondary"
        <?php if (isset($_GET["error"])) {echo "disabled";}?> 
                data-dismiss="modal" href="#scrapModal" target="_self"data-toggle="modal" data-target="#locker-content">Tres</button>
        <button type="button" class="btn btn-secondary"
        <?php if (isset($_GET["error"])) {echo "disabled";}?> 
                data-dismiss="modal" href="#scrapModal" target="_self"data-toggle="modal" data-target="#locker-content">Two</button>
        <button type="button" class="btn btn-secondary"
        <?php if (isset($_GET["error"])) {echo "disabled";}?> 
                data-dismiss="modal" href="#scrapModal" target="_self"data-toggle="modal" data-target="#locker-content">Uno</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="locker2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Locker B</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ceci est le corps du locker B
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="locker3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Locker C</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ceci est le corps du locker C
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="largelocker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Locker</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ceci est le corps du locker large
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>






	<div class="fullHeight text-center page">
		<img class="fullHeight" src="images/armoire.png" usemap="#map1605965744173">
		
			<map id="map1605965744173" name="map1605965744173">
				<area shape="rect" coords="1160.9999752128906,494.99146080859373,1305.0113392128906,666.0028248085937" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#locker1">
				<area shape="rect" coords="1161.0000057304687,668.997137078125,1305.0113697304687,847.0085010781249" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#locker2">
				<area shape="rect" coords="1156.97917,846.9792005175782,1306.3125100000002,1197.3125405175783" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#locker3">
				<area shape="rect" coords="1063.0000440234376,820.9999829882813,1125.3333840234375,871.3333229882813" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#largelocker">
			</map>
	</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.rwdImageMaps.js"></script>
<script type="text/javascript" src="js/jquery.rwdImageMaps.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
    	$('img[usemap]').rwdImageMaps();
	});
</script>


  <script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 2, 2020 <?php if (isset($_POST["countdown"])) {echo "15:37:25";}?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
