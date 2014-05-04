<? $page = basename(__FILE__, '.php'); 
include 'includes/header.php'?>
<?
$services = array(
				1 => array(
							'title'=>'Service',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				2 => array(
							'title'=>'Service',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				3 => array(
							'title'=>'Service',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				4 => array(
							'title'=>'Service',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				5 => array(
							'title'=>'Service',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				6 => array(
							'title'=>'Service',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
			);
?>
<section id = "main_container">
	<h1 id = "main_title" class = "center">Services</h2>
	<article id = "services_holder">
		
	<?foreach($services as $service){?>
		<section class = "service_container">
			<img src = "img/<?print $service[image];?>" class = "service_image" alt = "Description of image"/>
			<h3 class = "service_title"><?print $service[title];?></h3>
			<p class = "service_description"><?print $service[description];?></p>
			<div class = "clearFix"></div>
		</section>
		<?}?>
		<div class = "clearFix"></div>
	</article>
	<div class = "clearFix"></div>
</section>
<?include 'includes/footer.php'?>