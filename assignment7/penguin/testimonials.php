<? $page = basename(__FILE__, '.php'); 
include 'includes/header.php'?>
<?
$testimonials = array(
				1 => array(
							'title'=>'Suzie from Williston',
							'image'=>'placeholder.jpg',
							'description'=>'I hired Penguin to build a shed for my garden tools. The quality was great, the price was lower than expected, and best of all, it was custom-made for me. –Suzie from Williston',
					 ),
				2 => array(
							'title'=>'Bill from Burlington',
							'image'=>'placeholder.jpg',
							'description'=>'I commissioned them to make me some kitchen cabinets and I love them. The quality of the materials is matched only by the quality of the craftsmanship. -Bill from Burlington',
					 ),
				3 => array(
							'title'=>'Jim from Burlington',
							'image'=>'placeholder.jpg',
							'description'=>'-My custom made shelving unit is great. They did it quickly and it’s very solid. Well done! -Jim from Burlington',
					 ),
				4 => array(
							'title'=>'Ellen from Essex',
							'image'=>'placeholder.jpg',
							'description'=>'They came by my place to consider making a deck. The estimate was free and a reasonable price.  A month later, my new deck is my favorite place to sit. –Ellen from Essex',
					 ),
				5 => array(
							'title'=>'Bob from Essex',
							'image'=>'placeholder.jpg',
							'description'=>'They are very knowledgeable and professional. The work is sold. –Bob from Essex',
					 ),
				6 => array(
							'title'=>'Jill from Charlotte',
							'image'=>'placeholder.jpg',
							'description'=>'I love my custom-made table. I will definitely hire them for my next home improvement project. –Jill from Charlotte',
					 ),
			);
?>
<section id = "main_container">
	<img src = "img/ham.png" id = "menuHam" alt = "Description of image"/>
	<h1 id = "main_title" class = "center">Testimonials</h1>
	<article id = "testimonials_holder">
		
	<?$i = 0;
	foreach($testimonials as $testimonial){?>
		<section class = "testimonial_container">
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