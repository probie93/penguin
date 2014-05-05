<? $page = basename(__FILE__, '.php'); 
include 'includes/header.php'?>
<?
$testimonials = array(
				1 => array(
							'title'=>'Testimonial',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				2 => array(
							'title'=>'Testimonial',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				3 => array(
							'title'=>'Testimonial',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				4 => array(
							'title'=>'Testimonial',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				5 => array(
							'title'=>'Testimonial',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
				6 => array(
							'title'=>'Testimonial',
							'image'=>'placeholder.jpg',
							'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat massa sed dolor consectetur, eu dapibus eros interdum. Sed vel magna tempor, pharetra est sed, tincidunt urna. Cras et velit imperdiet magna lobortis',
					 ),
			);
?>
<section id = "main_container">
	<h1 id = "main_title" class = "center">Testimonials</h1>
	<article id = "testimonials_holder">
		
	<?$i = 0;
	foreach($testimonials as $testimonial){?>
		<section class = "testimonial_container">
			<img src = "img/<?print $testimonial[image];?>" class = "testimonial_image <?if($i%2 == 0){print('float_right');}else{print('float_left');}?>" alt = "Description of image"/>
			<h3 class = "testimonial_title"><?print $testimonial[title];?></h3>
			<p class = "testimonial_description"><?print $testimonial[description];?></p>
			<div class = "clearFix"></div>
		</section>
		<?$i++;
		}?>
		<div class = "clearFix"></div>
	</article>
	<div class = "clearFix"></div>
</section>
<?include 'includes/footer.php'?>