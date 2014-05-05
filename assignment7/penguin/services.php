<? $page = basename(__FILE__, '.php'); 
include 'includes/header.php'?>
<?
$services = array(
				1 => array(
							'title'=>'Custom Furniture',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				2 => array(
							'title'=>'Sheds & Outbuildings',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				3 => array(
							'title'=>'Handyman Service',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				4 => array(
							'title'=>'Painting',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				5 => array(
							'title'=>'Cabinets',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				6 => array(
							'title'=>'Bulit-Ins',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),	
				7 => array(
							'title'=>'Countertops',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				8 => array(
							'title'=>'Floors',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
			);
?>
<section id = "main_container">
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