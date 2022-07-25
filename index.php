<?php
// require_once "fdomain.php";
require_once "functions.php";
include_once("db_connection.php");
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>PHISHDETECT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- ** CSS Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
	<!--Favicon-->
	<link rel="icon" href="img/pdlogo_fav.png" type="image/x-icon">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<!-- Main Stylesheet -->
	<link href="assets/style.css" rel="stylesheet" media="screen" />
</head>

<body>
	<!-- header -->
	<header class="banner overlay bg-cover" data-background="img/bg5.jpg">
		<nav class="navbar navbar-expand-md navbar-dark">
			<div class="container">
				<a class="navbar-brand px-2" href="index.php"><img src="img/pdlogo.png"></a>
				<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
					aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse text-center" id="navigation">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link text-dark" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="contact.php">contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- banner -->
		<div class="container section">
			<div class="row">
				<div class="col-lg-8 text-left mx-auto">
					<h1 class="text-white mb-3">URL CHECKER</h1>
					<p class="text-white mb-4">Check and detect if your url is legitimate, SSL enabled or blacklisted etc...</p>
					<div class="position-relative">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
						<input id="search" class="form-control" name="url" placeholder="type url example.com"><i
							class="ti-search search-icon" name="search"></i>
						</form>
					</div>
				</div>
				<div class="col-lg-4 text-left mx-auto">

					<table id="tables">
						<tr>
							<td><strong>Tested URLs</strong></td>
							<td align="right" ><code><strong>30</strong></code></td>
						</tr>
						<tr>
							<td><strong>Blacklisted</strong></td>
							<td align="right"><code><strong>2</strong></code></td>
						</tr>
						<tr>
							<td><strong>Has SSL</strong></td>
							<td align="right"><code><strong>28</strong></code></td>
						</tr>
						<tr>
							<td><strong>WHOIS Passed</strong></td>
							<td align="right"><code><strong>30</strong></code></td>
						</tr>
					</table>
					
					
				</div>
			</div>
		</div>
		<!-- /banner -->
	</header>
	<!-- /header -->

	<!-- topics -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2 class="section-title">Result</h2>

				</div>
				<div class="col-12">
					<div class="section px-3 bg-white shadow text-center">
						
						<?php

						if(isset($_POST['url'])){
							
							$url = $_POST['url'];
								if(empty($url)){

						    			echo "Please insert a url";
								}else{

									
									echo "<h2 class='mb-4'><b>Details for ".$url."</b> </h2>";
									echo'<table>';
									isValidUrl($url, $mysqli);
									echo'</table>';

								}


						}
						


						 ?>
				
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /topics -->



	<!-- footer -->
	<footer class="section pb-4">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 text-md-left text-center">
					<p class="mb-md-0 mb-4">Copyright © 2022 Designed and Developed by <a
							href="https://zeenextech.com/">Zeenex Technology</a></p>
				</div>
				<div class="col-md-4 text-md-right text-center">
					<ul class="list-inline">
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-facebook"></i></a></li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-twitter-alt"></i></a></li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i class="ti-github"></i></a>
						</li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- /footer -->

	<!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="assets/script.js"></script>
</body>

</html>