<? $page = basename(__FILE__, '.php'); 
include 'includes/header.php'?>
<script type="text/javascript">
  function initialize() {
    google.maps.visualRefresh = true;
    var isMobile = (navigator.userAgent.toLowerCase().indexOf('android') > -1) ||
      (navigator.userAgent.match(/(iPod|iPhone|iPad|BlackBerry|Windows Phone|iemobile)/));
    if (isMobile) {
      var viewport = document.querySelector("meta[name=viewport]");
      viewport.setAttribute('content', 'initial-scale=1.0, user-scalable=no');
    }
    var mapDiv = document.getElementById('googft-mapCanvas');
    mapDiv.style.width = isMobile ? '100%' : '40%';
    mapDiv.style.height = isMobile ? '100%' : '300px';
    var map = new google.maps.Map(mapDiv, {
      center: new google.maps.LatLng(44.42760638104056, -72.92808394531255),
      zoom: 9,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    layer = new google.maps.FusionTablesLayer({
      map: map,
      heatmap: { enabled: false },
      query: {
        select: "col4",
        from: "17_UR8lEvVeKWy1RQuRQcP-j_V-2j4gJP2w9f4TU",
        where: "col0 \x3d \x27VT-Chittenden\x27"
      },
      options: {
        styleId: 1,
        templateId: 1
      }
    });

    if (isMobile) {
      var legend = document.getElementById('googft-legend');
      var legendOpenButton = document.getElementById('googft-legend-open');
      var legendCloseButton = document.getElementById('googft-legend-close');
      legend.style.display = 'none';
      legendOpenButton.style.display = 'block';
      legendCloseButton.style.display = 'block';
      legendOpenButton.onclick = function() {
        legend.style.display = 'block';
        legendOpenButton.style.display = 'none';
      }
      legendCloseButton.onclick = function() {
        legend.style.display = 'none';
        legendOpenButton.style.display = 'block';
      }
    }
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(44.491041,-73.186381),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
		var iconBase = 'http://maps.google.com/mapfiles/kml/paddle/blu-blank.png';
		myLatLng = new google.maps.LatLng(44.491041,-73.186381);
		var marker = new google.maps.Marker({
		  position: myLatLng,
		  map: map,
		  icon: iconBase
		});
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<section id = "main_container">
	<h1 id = "main_title" class = "center">Contact Us</h2>
	<section id ="service_area">
		<h2>Area's we service</h2>
		<div id="googft-mapCanvas"></div>
		<h3 id = "area_include">Areas Include:</h3>
		<ul id = "area_covered">
			<li>Burlington</li>
			<li>Winooski</li>
			<li>Williston</li>
			<li>Colchester</li>
			<li>Essex</li>
			<li>Shelburne</li>
			<li>Charlotte</li>
			<li>Richmond</li>
			<li>Milton</li>
			<li>And surrounding areas</li>
		</ul>
		<div class = "clearRight"></div>
	</section>
	<section id = "contact_holder">
		<section id = "address">
			<h2>We are located at:</h2>
			<div id = "address_holder">
				<span id = "street">PO Box 585</span><br>
				<span id = "town">Winooski,</span>
				<span id = "state">Vermont</span><br>
				<span id = "country">USA</span>
				<span id = "zip">05404</span>
			</div>
			<div id="map_canvas"></div>
			<div class = "clearRight"></div>
		</section>
		<section>
			<h2>Contact:</h2>
			<div id = "contact_holder">
				<p id ="social_media">
					<a id = "facebook_link" href = "https://www.facebook.com/PenguinVTLLC" target="_blank"><img src = "img/facebook.png" alt = "facebook"/></a><br>
					<span id = "thumbtack"><a href = "http://www.thumbtack.com/vt/winooski/general-contractors/home-improvement-repair-services" target="_blank"><img src = "img/thumbtack.png" alt = "facebook"/></a></span>
				</p>
				<div id = "email_phone">
					<p id = "email"><a href = "mailto:Penguin.ltd.co@gmail.com">Penguin.ltd.co@gmail.com</a></p>
					<p id = "telephone"><a href="tel:+1-802-238-1691">802-238-1691</a></p>
				</div>
			</div>
			<div class = "clearRight"></div>
		</section>
		<section id = "contact_form">
			<h2 id = "contact_title">Ask a Question?</h2>
			<form id = "contact" action="contact.php" method="post">
				<fieldset>
					<p>
						<label for="name">
						<span>Name: </span>
						<input type="text" id="name" name="name" placeholder = "Enter your name here" required />
						<strong><abbr title="required">*</abbr></strong>
						</label>
					</p>
					<p>
						<label for="email">
						<span>E-mail: </span>
						<input type="email" id="email" name="email" placeholder = "Enter your e-mail address here" required />
						<strong><abbr title="required">*</abbr></strong>
						</label>
					</p>
					<p>
						<label for="subject">
						<span>Subject: </span>
						<input type="text" id="subject" name="subject" placeholder = "Enter a subject" />
						</label>
					</p>
					<p>
						<label for="question">Question/Comments:</label><br>
						<textarea rows="4" cols="50" id="question" name="question" placeholder = "Enter your question here"></textarea>
					</p>
				</fieldset>
				<fieldset>
					<section>
						<p>
						<input type="submit" value="Send" />
						</p>
					</section>
				</fieldset>
			</form>
		</section>
		<section id = "map">
		</section>
	</section>
	<div class = "clearFix"></div>
</section>
<?include 'includes/footer.php'?>