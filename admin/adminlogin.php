<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Admin login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

	
</head>

<body style="background-image:url(assets/img/BG1.jpg); background-size: cover;">
	<!-- WRAPPER -->
	
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<!-- <div class="auth-box "> -->
					<!-- <div class="left"> -->
						<div class="content">
							<center>
							<div class="header">
								<!-- <div class="logo text-center"><img src="assets/img/ass.jpg" alt="Klorofil Logo"></div> -->
						<h1 style="font-size: 50px; color:white">Admin Login</h1>
							</div>




							<form class="form-auth-small" action="admincontroller/adminlogin.php" method="POST">

								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Admin Email</label>
									<input style="width:500px" type="email" class="form-control" id="signin-email" placeholder="admin Email" name="email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input style="width:500px" type="password" class="form-control" id="signin-password" placeholder="Password" name="password">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span style="color:white;">Remember me</span>
									</label>
								</div>
								<button style="width:500px" type="submit" class="btn btn-primary btn-lg btn-block" name="login" >ADMIN LOGIN</button>
								
							</form>
						</div>



					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
