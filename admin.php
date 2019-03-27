<?php
include 'koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
		
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="#">ADMIN <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="page/admin/user-login.php">User login</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="countainer">
			<!-- contents -->
		</div>
	</body>
	<script src="resources/js/jquery-3.3.1.min.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="resources/js/popper.min.js"></script>
	<script src="resources/js/jquery.dataTables.min.js"></script>
</html>