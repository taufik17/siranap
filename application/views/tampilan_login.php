<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login SIRANAP</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="<?php echo base_url();?>http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />
		<style type="text/css">
		body {
	background-image: url(<?php echo base_url();?>images/bg-login.jpg);
}
        </style>

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



</head>

<script type="text/javascript">
	function cekform()
	{
		if (!$("#username").val())
		{
			alert('maaf pengguna tidak boleh kosong');
			$("#username").focus();
			return false;
		}
		if (!$("#password").val())
		{
			alert('maaf sandi tidak boleh kosong');
			$("#password").focus();
			return false;
		}
	}
	</script>

	<body class="login-layout">
		<div class="main-container container-fluid">
			<div class="main-content">
				<div class="row-fluid">
					<div class="span12">
						<div class="login-container">
							<div class="row-fluid">
								<div class="center">
									<h1>
										<i class="icon-hospital green"></i>
									<span class="red">Aplikasi</span>
									<span class="white" id="id-text2">Siranap</span>
								</h1>
								<h4 class="blue" id="id-company-text"> Sistem Informasi Rawat Inap</h4>
								</div>
							</div>

							<div class="space-6"></div>

							<div class="row-fluid">
								<div class="position-relative">
									<div id="login-box" class="login-box visible widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header blue lighter bigger">
													<i class="icon-coffee green"></i>
													Masuk Sebagai Administrator
												</h4>

												<div class="space-6"></div>

												<form method="POST" action="<?php echo base_url();?>index.php/login/getlogin" onsubmit="return cekform();">
													<fieldset>
														<label>
															<span class="block input-icon input-icon-right">
																<input type="text" name="username" id="username" class="span12" placeholder="Pengguna" />
																<i class="icon-user"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="password" name="password" id="password" class="span12" placeholder="Sandi" />

																<?php
																$info = $this->session->flashdata('info');
																if(!empty($info))
																{
																	echo $info;
																}
																?>

																<i class="icon-lock"></i>
															</span>
														</label>

														<div class="space"></div>

														<div class="clearfix">

															<button type="submit" class="width-35 pull-right btn btn-small btn-primary">
																<i class="icon-key"></i>
																Masuk
															</button>
														</div>

														<div class="space-4"></div>
													</fieldset>
												</form>
										</div><!--/widget-body-->
									</div><!--/signup-box-->
									<div class="center">
								<h4 class="white" id="id-company-text" >&nbsp;&copy; Kelompok Kura - kura</h4>
							</div>
							<div class="center">
								<h6 class="green" >
							<marquee class="center" direction="up" height="50" onmouseout="this.start()" onmouseover="this.stop()" scrollamount="1.5">
							1. Taufik San<br />
							2. Brian Adam Sembiring<br />
							3. Muhammad Wahyudi<br />
							4. Laurentia Simanjuntak<br />
							</marquee></h6>
							</div>
								</div><!--/position-relative-->
							</div>
						</div>
					</div><!--/.span-->
				</div><!--/.row-fluid-->
			</div>
		</div><!--/.main-container-->

		<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
			function show_box(id) {
			 $('.widget-box.visible').removeClass('visible');
			 $('#'+id).addClass('visible');
			}
		</script>
	</body>
</html>
