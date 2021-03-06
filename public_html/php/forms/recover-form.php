<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Welcome to Karma";

/*load head-utils.php*/
require_once("../../php/template/head-utils.php");
?>

<div class="sfooter-content">

		<!-------------------------------------- Fixed navbar ------------------------------------------------->

		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

	<!-------------------------------------- Navbar collapse ------------------------------------------------------>

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="landing"><a href="landing.php">Karmify</a></li>
						<li class="contact" ><a href="contact-us-form.php">Contact</a></li>

					</ul><!--/navbar-nav-->

					<ul class="nav navbar-nav navbar-right shifted">
						<li class="register"><a href="register-form.php">Register</a></li>
						<li class="login"><a href="register-form.php">Log In</a></li>
					</ul><!--/navbar-nav-->
				</div><!--/.nav-collapse -->
			</div><!--/container-fluid-->
		</div><!-- /.Fixed navbar -->

		<div class="clearfix"</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
					<div class="alert-placeholder"></div>
						<div class="panel panel-success">
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<div class="text-center"><h2><b>Recover Account</b></h2></div>
											<form id="register-form" action="#" method="post" role="form" autocomplete="off">
												<div class="form-group">
													<label for="email">Email Address</label>
														<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" autocomplete="off" required/>
												</div><!--/form-group-->

										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
													<input type="submit" name="recover-submit" id="recover-submit" tabindex="2" class="form-control btn btn-success" value="Recover Account" />
												</div>
											</div>
										</div>
										<input type="hidden" class="hide" name="token" id="token" value="b49912e5e03ef179a45cded02fdc1ecc">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- /container -->
		<div class="container-fluid">
			<br>
			<div class="row">

				<div class="col-lg-3"></div>
				<div class="col-lg-3"></div>
				<div class="col-lg-3"></div>
			</div>
		</div>
<?php require_once("../../php/template/contact-us-modal.php"); ?>

		<script src="http://cdn.phpoll.com/js/main.min.js"></script>


