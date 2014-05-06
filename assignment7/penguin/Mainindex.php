<? $page = basename(__FILE__, '.php'); 
include 'includes/header.php'?>
<script>
	 $(document).ready(function() {
   var maxHeight = -1;

   $('.show_off_container').each(function() {
     maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
   });

   $('.show_off_container').each(function() {
     $(this).height(maxHeight);
   });
 });
</script>
<section id = "main_container">
	<h2 id = "logo_penguin">Penguin Home Improvement</h2>
	<img src = "img/LogCrossSectionMedium.png" id = "main_image" alt = "Description of image"/>
	<p class = "main_description">Committed to providing clients with a service that they cannot buy in a store, Penguin encourages client involvement in the design, build process. We provide high quality workmanship that will make your home improvement goals a reality. A locally owned, fully insured Vermont based business offering honest discussion and FREE estimates. </p>	
	<article id = "show_off_holder">
		<section class = "show_off_container">
			<h3 class = "show_off_title">Home Remodelling</h3>
			<img src = "img/photo6.JPG" class = "show_off_image" alt = "Description of image"/>
			<p class = "show_off_description">Have a kitchen that you absolutly hate? How about a stair well that you would really rather have on the other side of the room. We will work with you to make your dream house a reality. We will help you to make your house feel brand new by remodelling any part of your house. Feel like you own a brand new home again, Get an estimate today.</p>
		</section>
		<section class = "show_off_container">
			<h3 class = "show_off_title">Moldings & Frames</h3>
			<img src = "img/DSCN1287.JPG" class = "show_off_image" alt = "Description of image"/>
			<p class = "show_off_description">We can frame anything. We will work with you to help you find the perfect frame for your favorite picture. Or to help bring out the true beauty in your favorite room. All molding can be custom made or store bought, they also come with a 100% satisfaction guarantee. </p>
		</section>
		<section class = "show_off_container">
			<h3 class = "show_off_title">Custom Woodwork</h3>
			<img src = "img/DSCN1295.JPG" class = "show_off_image" alt = "Description of image"/>
			<p class = "show_off_description">Custom designed woodwork that we will make. You can design it or we can work with you to find the perfect piece that will compliment your room. No matter what the size is we will make the new center piece to your house or just a new piece to ascent your living room, get an estimate today.</p>
		</section>
		<section class = "show_off_container">
			<h3 class = "show_off_title">Sheds & Outbuildings</h3>
			<img src = "img/GardenShed.jpg" class = "show_off_image" alt = "Description of image"/>
			<p class = "show_off_description">All outdoor sheds and building, we will build them from the ground up. Garden sheds for storing all your tool. A shed by the pool for all those cleaning products. Wooden Sheds, chicken coops, there is no shed to big or small</p>
		</section>
		<p id ="show_more_services"><a href = "services.php">Show more services</a></p>
		<div class = "clearFix"></div>
	</article>
	<div class = "clearFix"></div>
</section>
<?include 'includes/footer.php'?>