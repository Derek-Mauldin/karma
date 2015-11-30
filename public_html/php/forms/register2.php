<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!--javascript-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

		<!--Font awesome-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!--Link to custom CSS files here-->
		<link rel="stylesheet" href="../../lib/css/styles.css">
		<!--HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
		<!--WARNING: Respond.js doesn't work if you view the page via file://-->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!--js-cookie (for capstone) -->
		<script type="text/javascript" src="//cdnjs.cloudfare.com/ajax/libs/js-cookie/2.0.2/js.cookie.min.js"></script>

		<!--jQuery (necessary for bootstrap's javaScript plugins)-->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<!-- jQuery form validation and additional methods (for capstone) -->
		<script type="text/javascript" src="//cdnjs.cloudfare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudfare/com/ajax/libs/jquery-validate/1.14.0/jquery.valiate.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudfare.com/ajax/libs/jquery-validate/1.14.0.additional-methods.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
		<script type="text/javascript"src="../../lib/js/site-scripts.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-login">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-6">
									<a href="login-form.php" class="active" id="login-form-link">Login</a>
								</div>
								<div class="col-xs-6">
									<a href="#" id="register-form-link">Register</a>
								</div>
							</div>
							<hr>
						</div>

						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">

									<form id="login-form" name="login-form" action="../controllers/login-controller.php" method="post" role="form" style="display: block;">
										<div class="form-group">
											<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
										</div>

										<div class="form-group">
											<input type="email" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
										</div>
										<div class="form-group text-center">
											<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
											<label for="remember"> Remember Me</label>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-12">
													<div class="text-center">
														<a href="recover-form.php" tabindex="5" class="forgot-password">Forgot Password?</a>
													</div>
												</div>
											</div>
										</div>
									</form>


									<form id="register-form" name="register-form" action="../controllers/register-controller.php" method="post" role="form" style="display: none;">
										<div class="form-group">
											<input type="text" name="firstName" id="firstName" tabindex="1" class="form-control" placeholder="First Name" value="">
										</div>
										<div class="form-group">
											<input type="text" name="lastName" id="lastName" tabindex="2" class="form-control" placeholder="Last Name" value="">
										</div>
										<div class="form-group">
											<input type="text" name="userName" id="userName" tabindex="3" class="form-control" placeholder="Please Choose a User Name" value="">
										</div>
										<div class="form-group">
											<input type="email" name="email" id="email" tabindex="4" class="form-control" placeholder="Email Address" value="">
										</div>
										<div class="form-group">
											<input type="password" name="password" id="password" tabindex="5" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="password" name="confirm-password" id="confirm-password" tabindex="6" class="form-control" placeholder="Confirm Password">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="register-submit" id="register-submit" tabindex="7" class="form-control btn btn-register" value="Register Now">
												</div>
											</div>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>