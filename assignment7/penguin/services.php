<? $page = basename(__FILE__, '.php'); 
include 'includes/header.php'?>
<?include 'services_array.php';
?>
<section id = "main_container">
	<img src = "img/ham.png" id = "menuHam" alt = "Description of image"/>
	<h1 id = "main_title" class = "center">Services</h1>
	<article id = "services_holder">
		
	<? $i = 0;
	foreach($services as $service){?>
		<section class = "service_container">
			<img src = "img/<?print $service[image];?>" class = "service_image <?if($i%2 == 0){print('float_right');}else{print('float_left');}?>" alt = "Description of image"/>
			<h3 class = "service_title"><?print $service[title];?></h3>
			<p class = "service_description"><?print $service[description];?></p>
			<div class = "clearFix"></div>
		</section>
		<? $i++;
		}?>
		<div class = "clearFix"></div>
	</article>
	<div class = "clearFix"></div>
</section>
<?include 'includes/footer.php'?>