<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/vendor/bootstrap/css/bootstrap.min.css")?>>
    <link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/fonts/font-awesome-4.7.0/css/font-awesome.min.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/fonts/iconic/css/material-design-iconic-font.min.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/vendor/animate/animate.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/vendor/css-hamburgers/hamburgers.min.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/vendor/animsition/css/animsition.min.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/vendor/select2/select2.min.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/vendor/daterangepicker/daterangepicker.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/css/util.css")?>>
	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/css/register.css")?>>

</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('loginfix/images/bg_01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form "action="<?= route_to('register') ?>" method="post">
                	<span class="login100-form-logo">
						<img src="loginfix/images/logofix.png" style="width:140px">
						<!-- <i class="zmdi zmdi-landscape"></i> -->
					</span>
				
					<span class="login100-form-title p-b-15 p-t-35">
                    <?= lang('Auth.register') ?>
					</span>
					<h6 class="p-b-33 p-t-10" style="color:white; text-align:center;">"Register Your Account Now"</h6>
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <?=csrf_field()?>
					<div class="wrap-input100 validate-input" data-validate = "Enter Fullname">
						<input class="input100 <?php if (session('errors.name')) : ?>is-invalid<?php endif ?>" type="text" name="name" placeholder="">
						<span class="focus-input100" data-placeholder="Full Name"></span>
                    </div>
					<div class="wrap-input100 validate-input" data-validate = "Enter Username">
						<input class="input100 <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" type="text" name="username" placeholder="">
						<span class="focus-input100" data-placeholder="Username"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100 <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" type="text" name="email" placeholder="">
						<span class="focus-input100" data-placeholder="Email"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter Password">
						<input class="input100 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" name="password" placeholder="">
						<span class="focus-input100" data-placeholder="Password"></span>
                    </div>
					<div class="wrap-input100 validate-input" data-validate = "Enter Password">
						<input class="input100 <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" type="password" name="pass_confirm" placeholder="">
						<span class="focus-input100" data-placeholder="Password"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter Phone Number">
						<input class="input100 <?php if (session('errors.phone_number')) : ?>is-invalid<?php endif ?>" type="text" name="phone_number" placeholder="">
						<span class="focus-input100" data-placeholder="Phone Number"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter Addres">
						<input class="input100 <?php if (session('errors.address')) : ?>is-invalid<?php endif ?>" type="text" name="address" placeholder="">
						<span class="focus-input100" data-placeholder="Address"></span>
                    </div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                        <?= lang('Auth.register') ?>
						</button>
					</div>
					<div class="text-center p-t-20">
						<a class="txt1" href="<?= route_to('login') ?>">
						Have Account?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src=<?= base_url("loginfix/vendor/jquery/jquery-3.2.1.min.js")?>></script>
<!--===============================================================================================-->
	<script src=<?= base_url("loginfix/vendor/animsition/js/animsition.min.js")?>></script>
<!--===============================================================================================-->
	<script src=<?= base_url("loginfix/vendor/bootstrap/js/popper.js")?>></script>
	<script src=<?= base_url("loginfix/vendor/bootstrap/js/bootstrap.min.js")?>></script>
<!--===============================================================================================-->
	<script src=<?= base_url("loginfix/vendor/select2/select2.min.js")?>></script>
<!--===============================================================================================-->
	<script src=<?= base_url("loginfix/vendor/daterangepicker/moment.min.js")?>></script>
	<script src=<?= base_url("loginfix/vendor/daterangepicker/daterangepicker.js")?>></script>
<!--===============================================================================================-->
	<script src=<?= base_url("loginfix/vendor/countdowntime/countdowntime.js")?>></script>
<!--===============================================================================================-->
	<script src=<?= base_url("loginfix/js/main.js")?>></script>

</body>
</html>