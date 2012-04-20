<?php

$current_page = 'sample-library';
include "_header.php"

?>

		<aside class="sidebar">
			<p>Fill out the form to reserve your sample:</p>
			<form method="post">
				<label for="contactName">Name</label><input type="text" id="contactName" name="contactName" autofocus required />
				<label for="contactCompany">Company</label><input id="contactCompany" name="contactCompany" type="text" />
				<label for="contactPhone">Phone</label><input type="tel" id="contactPhone" name="contactPhone" required />
				<label for="contactEmail">Email</label><input type="email" id="contactEmail" name="contactEmail" />
				<label for="sampleNumber">Sample Number</label><input type="text" id="sampleNumber" name="sampleNumber" />
				<label for="projectName">Project Name</label><input type="text" id="projectName" name="projectName" />
				<button type="submit">Submit</button>
			</form>
		</aside>
		
		<div class="copy">
			<h2>Sample Library</h2>
			<p>The following is an inventory of the lighting samples that Solus has available to designers.  Take a moment to browse our Sample Library, and use the sidebar to reserve a product, which Solus will deliver to your office.  Don’t see what you are looking for?  Contact Solus to discuss custom sample orders for your project.</p>
			<div class="columns 3">
				<ul class="clients">
					<li><a href="#">Ametrix</a></li>
					<li><a href="#">Bartco</a></li>
					<li><a href="#">Beachside</a></li>
					<li><a href="#">Blauet</a></li>
					<li><a href="#">Color Kinetics</a></li>
					<li><a href="#">Concealite</a></li>
					<li><a href="#">Corelite</a></li>
					<li><a href="#">Estluz</a></li>
					<li><a href="#">everbrite</a></li>
					<li><a href="#">EYE</a></li>
					<li><a href="#">Fail-Safe</a></li>
					<li><a href="#">Focal Point</a></li>
					<li><a href="#">Halo</a></li>
					<li><a href="#">Invue</a></li>
					<li><a href="#">IO LED</a></li>
					<li><a href="#">Iris</a></li>
					<li><a href="#">Lightwild</a></li>
					<li><a href="#">Linear Lighting</a></li>
					<li><a href="#">Litelab</a></li>
					<li><a href="#">Lumark</a></li>
					<li><a href="#">Lumiere</a></li>
					<li><a href="#">Mcgraw-Edison</a></li>
					<li><a href="#">Metalux</a></li>
					<li><a href="#">Neo-Ray</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Prudential Lighting</a></li>
					<li><a href="#">RSA</a></li>
					<li><a href="#">Se&#39;lux</a></li>
					<li><a href="#">Sentry Light</a></li>
					<li><a href="#">Shaper</a></li>
					<li><a href="#">SPI Lighting</a></li>
					<li><a href="#">Sure-Lites</a></li>
					<li><a href="#">Vode</a></li>
					<li><a href="#">Waldmann</a></li>
				</ul>
			</div>
		</div>
		<div class="shadow"></div>
	
<?php include '_footer.php'; ?>