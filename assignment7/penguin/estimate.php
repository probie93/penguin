<? $page = basename(__FILE__, '.php'); 
include 'includes/header.php';
include 'services_array.php';?>
	<section id = "main_container">
	<img src = "img/ham.png" id = "menuHam" alt = "Description of image"/>
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
						<textarea rows="4" cols="30" id="question" name="question" placeholder = "Enter your question here"></textarea>
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