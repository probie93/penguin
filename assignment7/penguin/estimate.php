<? $page = basename(__FILE__, '.php'); 
include 'includes/header.php';
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
			);?>
	<section id = "main_container">	
		<h1 id = "main_title" class = "center">Get an estimate</h1>
		<section id = "estimate_form_holder">
			<form id = "estimate_form" action="estimate.php" method="post">
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
						<label for="service">
						<span>What you would like to do: </span>
						<select name="service" id = "service">
						<?foreach($services as $service){?>
							<option value="<?print($service['title']);?>"><?print($service['title']);?></option>
						<?}?>
						</select>
						</label>
					</p>
					<p>
						<label for="question">Comments:</label><br>
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
		<div class = "clearFix"></div>
	</section>
<?include 'includes/footer.php'?>