
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

				<!--javascript-->
				<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

				<!-- Optional theme -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

				<!--Google Fonts-->
				<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100|Open+Sans:400,800,300,700' rel='stylesheet' type='text/css'>


				<!--font awesome-->
				<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

				<!--Link to custom CSS files here-->

				<link type="text/css" href="../../lib/css/styles.css" rel="stylesheet">

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

				<title>Simple Karma Template</title>

				<link rel="stylesheet" href="/css/bootply.css">


			</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-login">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-6">
									<a href="#" class="active" id="profile-form-link">Profile</a>
								</div>
								<div class="col-xs-6">
									<a href="#" id="settings-form-link">Settings</a>
								</div>
							</div>
							<hr>
						</div>
								<!-- edit profile column -->
					<form class="form-horizontal" id="profile-form" role="form">
						<div class="panel-body">
							<div class="row">
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-12">
											<div class="col-md-3">
												<div class="text-center">
													<img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
													<h6>Upload a different photo...</h6>
													<input type="file" class="form-control">
												</div>
											</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">First name:</label>
							<div class="col-lg-8">
								<input class="form-control" type="text" value="first-name">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">Last name:</label>
							<div class="col-lg-8">
								<input class="form-control" type="text" value="last-name">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">Email:</label>
							<div class="col-lg-8">
								<input class="form-control" type="text" value="myemail@gmail.com">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Username:</label>
							<div class="col-md-8">
								<input class="form-control" type="text" value="user-namer">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Password:</label>
							<div class="col-md-8">
								<input class="form-control" type="password" value="11111122333">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Confirm password:</label>
							<div class="col-md-8">
								<input class="form-control" type="password" value="11111122333">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label"></label>
							<div class="col-md-8">
								<input type="button" class="btn btn-primary" value="Save Changes">
								<span></span>
								<input type="reset" class="btn btn-default" value="Cancel">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
							<!-----Edit Settings------>

								<form class="form-horizontal" id="settings-form" role="form">
									<div class="form-group">
										<label class="col-lg-3 control-label">handle</label>
										<div class="col-lg-8">
											<input class="form-control" type="text" value="handle">
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">email</label>
										<div class="col-lg-8">
											<input class="form-control" type="text" value="email">
										</div>
									</div>


								<div class="form-group">
									<label class="col-md-3 control-label"></label>
									<div class="col-md-8">
										<input type="button" class="btn btn-primary" value="Save Changes">
										<span></span>
										<input type="reset" class="btn btn-default" value="Cancel">
									</div>

					</form>
				</div>



	</body>
</html>