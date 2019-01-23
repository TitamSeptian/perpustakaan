<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="resources/css/index.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/all.css"> 
	<!-- Font Awesome JS -->
    
</head>
<body style="background-color: #1e1e1e;">
	<form method="post" action="login_process.php">
		<div class="content" align="center">
		    <div class="login-box">
		    	<h3 class="txt"><b>Welcome</b></h3>
		    	<div class="textbox">
		    		<i class="fas fa-user"></i>
		    		<input type="text" name="username" placeholder="Username" required>
		    	</div>

		    	<div class="textbox">
		    		<i class="fas fa-lock"></i>
		    		<input type="password" name="password" placeholder="Password" required>
		    	</div>
		    	<input type="submit" name="login" value="Login" class="btn btn-dark">	
		    </div>
		</div>
	
  <footer class="center pad-2 font-size-1" style="background: rgba(255,255,255,0.5); text-align: center; margin-top: 192px;">Copyright &copy; 2018 e-Perpustakaan.</footer>
</form>
</body>
	<script defer src="resources/js/solid.js"></script>
    <script defer src="resources/js/fontawesome.js"></script>
</html>