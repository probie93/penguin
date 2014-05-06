<? $page = basename(__FILE__, '.php'); 
include 'includes/header.php'?>
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
	<img src = "img/ham.png" id = "menuHam" alt = "Description of image"/>
	<h1 id = "main_title" class = "center">Contact Us</h1>
	<?if(isset($_POST[email])){print('<p class = "green large">Your question has been submitted.</p>');}?>
		<section id = "contact_container">
			<h2>Contact:</h2>
			<div id = "social_contact_holder">
				<p id ="social_media">
					<a id = "facebook_link" href = "https://www.facebook.com/PenguinVTLLC" target="_blank"><img src = "img/facebook.png" alt = "facebook"/></a><br>
					<span id = "thumbtack"><a href = "http://www.thumbtack.com/vt/winooski/general-contractors/home-improvement-repair-services" target="_blank"><img src = "img/thumbtack.png" alt = "facebook"/></a></span>
				</p>
				<div id = "email_phone">
					<p id = "email_address"><a href = "mailto:Penguin.ltd.co@gmail.com">Penguin.ltd.co@gmail.com</a></p>
					<p id = "telephone"><a href="tel:+1-802-238-1691">802-238-1691</a></p>
				</div>
			</div>
			<div class = "clearRight"></div>
		</section>
	<section id = "contact_holder">
		<section id = "address_container">
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
		<section id = "contact_form_holder">
			<h2 id = "contact_title">Ask a Question?</h2>
			<form id = "contact_form" action="contact.php" method="post">
				<fieldset>
					<p>
						<label for="name">
						<span>Name: </span>
						<input type="text" id="name" name="name" placeholder = "Enter your name" required />
						<strong><abbr title="required">*</abbr></strong>
						</label>
					</p>
					<p>
						<label for="email">
						<span>E-mail: </span>
						<input type="email" id="email" name="email" placeholder = "Enter your e-mail" required />
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
						<label for="specifications">Specifications:</label><br>
						<textarea rows="4" cols="30" id="specifications" name="specifications" placeholder = "Enter any specific requirements"></textarea>
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