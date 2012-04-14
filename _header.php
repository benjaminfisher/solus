<?php 
	$current_page = strstr(basename($_SERVER['PHP_SELF']), '.', TRUE);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Solus - Home</title>
	
	<link rel="stylesheet" href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" />
	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/headjs/0.96/head.min.js"></script>
</head>
<body class="<?php echo $current_page ?>">
	<header>
		<a href="index.php"><h1>Solus</h1></a>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a>
					<ul class="sub">
						<li><a href="people.php">People</a></li>
						<li><a href="#">Green Initiative</a></li>
						<li><a href="#">Territory</a></li>
					</ul>
				</li>
				<li><a href="line-card.php">Line Card</a></li>
				<li><a href="sample-library.php">Sample Library</a></li>
			</ul>
		</nav>
	</header>
	<!-- Begin Content Div (ends in _footer.php) -->
	<div class="content">