<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap latest complied and minified CSS -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous"/>

		<!-- Optional Bootstrap theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous"/>

		<!-- Font Awesome http://fontawesome.github.io/Font-Awesome/ -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>

		<!-- Custom CSS @author:rlewis37@cnm.edu -->
		<link type="text/css" href="../../../public_html/lib/css/style.css" rel="stylesheet"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- js-cookie (for capstone) -->
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/js-cookie/2.0.2/js.cookie.min.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<!-- jQuery form validation and additional methods (for capstone) -->
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/additional-methods.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

		<!-- jscroll plugin -->
		<script src="../../lib/plugins/jscroll/jquery.jscroll.min.js" type="text/javascript"></script>

		<!-- Custom JavaScript @author:rlewis37@cnm.edu -->
		<script src="../../lib/js/scripts.js" type="text/javascript"></script>

		<!-- Page Title -->
		<title>Homepage Outline</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<!--include the <head> tag-->

			<header>
				<nav class="navbar navbar-fixed-top">
					<div class="container">

						<!-- logo and mobile toggle button get grouped together for better mobile display -->
						<div class="navbar-header">

							<!-- this is the mobile menu button -->
							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">main menu</span>
								<span class="glyphicon glyphicon-menu-hamburger"></span>
							</button>

							<a class="navbar-brand" href="#">&#2384;&nbsp;Karma</a>
						</div>

						<!-- here are your main nav links, grouped for toggling -->
						<div class="collapse navbar-collapse" id="main-menu">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
							</ul>
						</div>

					</div><!--.container-->
				</nav><!--.navbar-->	</header>

			<div class="container">
				<div class="row">

					<!-- side panel here -->
					<div class="col-md-4 hidden-xs hidden-sm">
						<section class="side-panel panel panel-default">
							<h2>This is the side panel.</h2>
						</section>			</div>

					<!-- main content area -->
					<div class="col-md-8 col-xs-12">
						<main>
							<h2>This is the Main Content Panel</h2>

							<!-- load feed -->
							<div class="feed-wrapper">

								<div id="karma-feed" class="karma-feed">

									<div class="listing clearfix panel panel-default">
										<div class="panel-heading">
											<h4 class="listing-title">
												Listing title here.
											</h4>
										</div>
										<div class="panel-body">
											<img src="http://placehold.it/60x60" alt="thumbnail image" class="img-thumbnail pull-left">
											<p class="listing-text">
												Listing text here.
											</p>
										</div>
									</div>

									<div class="listing clearfix panel panel-default">
										<div class="panel-heading">
											<h4 class="listing-title">
												Listing title here.
											</h4>
										</div>
										<div class="panel-body">
											<img src="http://placehold.it/60x60" alt="thumbnail image" class="img-thumbnail pull-left">
											<p class="listing-text">
												Listing text here.
											</p>
										</div>
									</div>

									<div class="listing clearfix panel panel-default">
										<div class="panel-heading">
											<h4 class="listing-title">
												Listing title here.
											</h4>
										</div>
										<div class="panel-body">
											<img src="http://placehold.it/60x60" alt="thumbnail image" class="img-thumbnail pull-left">
											<p class="listing-text">
												Listing text here.
											</p>
										</div>
									</div>

									<div class="listing clearfix panel panel-default">
										<div class="panel-heading">
											<h4 class="listing-title">
												Listing title here.
											</h4>
										</div>
										<div class="panel-body">
											<img src="http://placehold.it/60x60" alt="thumbnail image" class="img-thumbnail pull-left">
											<p class="listing-text">
												Listing text here.
											</p>
										</div>
									</div>

									<div class="listing clearfix panel panel-default">
										<div class="panel-heading">
											<h4 class="listing-title">
												Listing title here.
											</h4>
										</div>
										<div class="panel-body">
											<img src="http://placehold.it/60x60" alt="thumbnail image" class="img-thumbnail pull-left">
											<p class="listing-text">
												Listing text here.
											</p>
										</div>
									</div>

									<div class="listing clearfix panel panel-default">
										<div class="panel-heading">
											<h4 class="listing-title">
												Listing title here.
											</h4>
										</div>
										<div class="panel-body">
											<img src="http://placehold.it/60x60" alt="thumbnail image" class="img-thumbnail pull-left">
											<p class="listing-text">
												Listing text here.
											</p>
										</div>
									</div>

									<div class="listing clearfix panel panel-default">
										<div class="panel-heading">
											<h4 class="listing-title">
												Listing title here.
											</h4>
										</div>
										<div class="panel-body">
											<img src="http://placehold.it/60x60" alt="thumbnail image" class="img-thumbnail pull-left">
											<p class="listing-text">
												Listing text here.
											</p>
										</div>
									</div>

									<div class="listing clearfix panel panel-default">
										<div class="panel-heading">
											<h4 class="listing-title">
												Listing title here.
											</h4>
										</div>
										<div class="panel-body">
											<img src="http://placehold.it/60x60" alt="thumbnail image" class="img-thumbnail pull-left">
											<p class="listing-text">
												Listing text here.
											</p>
										</div>
									</div>

								</div><!--#karma-feed-->

							</div><!--.feed-wrapper-->				</main>
					</div>

				</div>
			</div>

		</div><!--.sfooter-content-->

		<footer class="footer navbar-fixed-bottom">
			<div class="container">
				Footer Here
			</div></footer>

	</body>
</html>