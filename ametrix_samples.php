<?php

$current_page = 'sample-library';
$product = "ametrix";
$productCount = 1;
include "_header.php";
include "_sample_form.php";

?>
	
	<div class="copy">
		<h2><span class="upper"><?php echo $product; ?></span> Samples:</h2>
		<a href="sample-library.php" class="return">(return to samples)</a>
		
		<ul class="samples">
			<li>
				<a href="http://www.ametrixlighting.com/common/brands.cfm?pg=Detail&brandName=Ametrix&category=Base:%20Arrowlinear&id=17130">
					<img src=<?php print '"assets/products/'.$product.'_'.$productCount.'.jpg"'; ?> alt="image of sample <?php echo $productCount; ?>" />
					<h3 class="upper"><?php echo $product.'-'.$productCount; ?></h3>
				</a>
				<p class="upper">ARROWLINEAR SAMPLE KIT - A03-SO-A-1-LF-039-120-S-IL35</p>
				<?php $productCount++ ?>
			</li>
			<li>
				<a href="http://www.ametrixlighting.com/">
					<img src=<?php print '"assets/products/'.$product.'_'.$productCount.'.jpg"'; ?> alt="image of sample <?php echo $productCount; ?>" />
					<h3 class="upper"><?php echo $product.'-'.$productCount; ?></h3>
				</a>
				<p class="upper">AMETRIX SALES KIT:  SN-SO-P-1-T-100-120-S-YR; VS-SO-P-1-T-100-120-S-YR</p>
				<?php $productCount++ ?>
			</li>
			<li>
				<a href="http://www.ametrixlighting.com/common/brands.cfm?pg=Products&brandName=Ametrix&group=&category=Ceiling%20-%20Surface:%20C-Scroll">
					<img src=<?php print '"assets/products/'.$product.'_'.$productCount.'.jpg"'; ?> alt="image of sample <?php echo $productCount; ?>" />
					<h3 class="upper"><?php echo $product.'-'.$productCount; ?></h3>
				</a>
				<p class="upper">C-SCROLL LINEAR:  SN-SI-P-1-LF-054-120-W-YI-L45</p>
				<?php $productCount++ ?>
			</li>
			<li>
				<a href="http://www.ametrixlighting.com/common/brands.cfm?pg=Products&brandName=Ametrix&group=&category=Ceiling%20-%20Surface:%20C-Scroll">
					<img src=<?php print '"assets/products/'.$product.'_'.$productCount.'.jpg"'; ?> alt="image of sample <?php echo $productCount; ?>" />
					<h3 class="upper"><?php echo $product.'-'.$productCount; ?></h3>
				</a>
				<p class="upper">C-SCROLL LINEAR:  SN-SI-P-1-LF-054-120-W-YI-L45</p>
				<?php $productCount++ ?>
			</li>
			<li>
				<a href="http://www.ametrixlighting.com/common/brands.cfm?pg=Products&brandName=Ametrix&group=&category=Ceiling%20-%20Surface:%20Vault">
					<img src=<?php print '"assets/products/'.$product.'_'.$productCount.'.jpg"'; ?> alt="image of sample <?php echo $productCount; ?>" />
					<h3 class="upper"><?php echo $product.'-'.$productCount; ?></h3>
				</a>
				<p class="upper">VAULT LINEAR:  VN-SI-P-1-LF-054-120-W-YI-L45</p>
				<?php $productCount++ ?>
			</li>
		</ul>
		
		
	</div> <!-- End Copy Div -->
	<div class="shadow"></div>
	
<?php include '_footer.php'; ?>