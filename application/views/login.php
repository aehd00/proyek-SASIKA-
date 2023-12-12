<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php $this->load->view('admin/_partials/login') ?>
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url() . 'assets/login/images/pexels-naomi-shi-1001914.jpg' ?>');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="<?php echo site_url('Adminpanel/login') ?>" method="post">
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="User name">
					</div>

					<div class="wrap-input100 validate-input">
						<input class=" input100" type="password" name="password" placeholder="Password">
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>



</body>

</html>