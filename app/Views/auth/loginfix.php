<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/vendor/bootstrap/css/bootstrap.min.css")?>>
    <link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/fonts/font-awesome-4.7.0/css/font-awesome.min.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/fonts/iconic/css/material-design-iconic-font.min.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/vendor/animate/animate.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/vendor/css-hamburgers/hamburgers.min.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/vendor/animsition/css/animsition.min.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/vendor/select2/select2.min.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/vendor/daterangepicker/daterangepicker.css")?>>

	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/css/util.css")?>>
	<link rel="stylesheet" type="text/css" href=<?= base_url("loginfix/css/main.css")?>>
	<style>@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap');</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('loginfix/images/bg_01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form "action="<?= route_to('login') ?>" method="post">
                <?= csrf_field() ?>
					<span class="login100-form-logo">
						<img src=<?= base_url('loginfix/images/logofix.png') ?>  style="width:120px">
						<!-- <i class="zmdi zmdi-landscape"></i> -->
					</span>
				
					<span class="login100-form-title p-b-10 p-t-27" style="font-family: 'Josefin Sans', sans-serif; font-weight:bolder">LOGIN
					</span>
					<h6 class="p-b-33 p-t-10" style="color:white; text-align:center; font-weight:bolder">"Please Login For Your Application"</h6>
                    <?= view('Myth\Auth\Views\_message_block') ?>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" type="text" name="login" placeholder="">
						<span class="focus-input100" data-placeholder="<?= lang('Auth.emailOrUsername') ?>"></span>
                        <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                    </div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" name="password" placeholder="">
						<span class="focus-input100" data-placeholder="<?= lang('Auth.password') ?>"></span>
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                        <?= lang('Auth.loginAction') ?>
						</button>
					</div>

					<div class="text-center p-t-20">
						<a class="txt1" href="<?= route_to('register') ?>">
						Don't Have Account?</a>
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