<? $page = basename(__FILE__, '.php'); 
include 'includes/header.php'?>
<?
$aboutUs = array(
				1 => array(
							'title'=>'Penguin Home Improvement LLC',
							'image'=>'placeholder.jpg',
							'description'=>'After meeting at the University of Vermont, Zach Gavell & Liam Mahabir started Penguin Home Improvement and Repair LLC. Our passion for carpentry and home improvement shows in our hard work and quality craftsmanship. We consistently strive to make the most efficient use of time, space, and materials without compromising the customers vision. Each and every project is a thought provoking challenge and an opportunity to create a product that brings together the aspects of functionality and aesthetic value that each client desires. Modern or rustic, big or small, we do it all. ',
							'id'=>'penguin',
					 ),
				2 => array(
							'title'=>'Liam Mahabir',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
							'id'=>'liam',
					),
				3 => array(
							'title'=>'Zach Gavell',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
							'id'=>'zach',
					 ),
			);
?>
<script>
	$(function() {
		$('.about_image').hide();
		$('.about_description').hide();
		
/* 		$('.about_title').click(function(){
			var id =$(this).attr('id');
			id = id.split("_");
			id = id[0];
			$('#'+id+'_image').show();
			$('#'+id+'_image').width('initial');
			$('#'+id+'_image').height('initial');
			$('#'+id+'_description').show();
			$('#'+id+'_description').width('initial');
			$('#'+id+'_description').height('initial');
		}); */
		$('.about_title').click(function(){
			var id =$(this).attr('id');
			id = id.split("_");
			id = id[0];
			$('#'+id+'_image').toggle();
			$('#'+id+'_description').toggle();
		});
	});
</script>
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
    mapDiv.style.width = isMobile ? '100%' : '58%';
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
<section id = "main_container">
	<h1 id = "main_title" class = "center">About Us</h1>
	<article id = "about_us_holder">
		
	<? $i = 0;
	foreach($aboutUs as $about){?>
		<section class = "about_container" id = "<?print $about[id];?>_container">
			<img src = "img/<?print $about[image];?>" class = "about_image" id = "<?print $about[id];?>_image" alt = "Description of image"/>
			<h3 class = "about_title" id = "<?print $about[id];?>_title">About: <?print $about[title];?></h3>
			<p class = "about_description" id = "<?print $about[id];?>_description"><?print $about[description];?></p>
		</section>
		<? $i++;
		}?>
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
	</article>
	<div class = "clearFix"></div>
</section>
<?include 'includes/footer.php'?>