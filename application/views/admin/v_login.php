<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Koperasi</title>
	<link rel="short icon" href="<?php echo base_url().'assets2/images/logo.png'?>" type="image/png" />
	<link type="text/css" href="<?php echo base_url().'assets2/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url().'assets2/bootstrap/css/bootstrap-responsive.min.css'?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url().'assets2/css/theme.css'?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url().'assets2/images/icons/css/font-awesome.css'?>" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>
			  	<a class="brand" href="#">
			  		Koperasi
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<img style="margin-left:auto;margin-right:auto;display:block;width:150px;" src="<?php echo base_url().'assets2/images/logo.png'?>" alt="gambar"/>
				<div class="module module-login span4 offset4" style="margin-top: 40px">
					<form class="form-vertical" action="<?php echo base_url().'administrator/cekuser'?>" method="post">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
								<div class="control-group">
									<div class="controls row-fluid">
										<input class="span12" type="text" name="username" placeholder="Username" required>
									</div>
								</div>
								<div class="control-group">
									<div class="controls row-fluid">
										<input class="span12" type="password" name="password" placeholder="Password" style="margin-bottom:1px;" required>
									</div>
								</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
									
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2021 </b> All rights reserved.
		</div>
	</div>
	<script src="<?php echo base_url().'assets2/scripts/jquery-1.9.1.min.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets2/scripts/jquery-ui-1.10.1.custom.min.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets2/bootstrap/js/bootstrap.min.js'?>" type="text/javascript"></script>
</body>