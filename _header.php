<?php
	$page_title = ucwords(strtr($current_page, "-", " "));
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> <?php echo ($current_page == 'index') ? "Home" : $page_title; echo " | Solus"; ?></title>
	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/headjs/0.96/head.min.js"></script>	
	<link rel="stylesheet" href="stylesheets/screen.css" media="screen, projection" />
</head>
<body class="<?php echo $current_page ?>">
	<header>
		<a href="index.php"><h1>Solus</h1></a>
		<nav>
			<ul>
				<li <?php if ($current_page == 'index'){ echo 'class="current"'; } ?>><a href="index.php">Home</a></li>
				<li <?php if ($current_page == 'about'){ echo 'class="current"'; } ?>><a href="about.php">About</a>
					<ul class="sub">
						<li><a href="people.php">People</a></li>
						<li><a href="#">Green Initiative</a></li>
						<li><a href="#">Territory</a></li>
					</ul>
				</li>
				<li <?php if ($current_page == 'line-card'){ echo 'class="current"'; } ?>><a href="line-card.php">Line Card</a></li>
				<li <?php if ($current_page == 'sample-library'){ echo 'class="current"'; } ?>><a href="sample-library.php">Sample Library</a></li>
			</ul>
		</nav>
	</header>
	<!-- Begin Content Div (ends in _footer.php) -->
	<div class="content">