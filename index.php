<?php include('process.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="assets/styles/main.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.3.1/css/bootstrap.min.css">
</head>
<body class="container">
	<form method="post" action="index.php" id="registration-form" class="needs-validation" novalidate>
		<fieldset <?php if( isset( $disable_form ) ) echo $disable_form; ?> > <!-- Disable form -->
		<!-- Notification -->
		<?php if( !empty( $phone_error ) || !empty( $email_error ) || !empty( $regis_success ) ): ?>

			<?php if( !empty( $phone_error ) || !empty( $email_error ) ) {
				$notif_class = 'error-';
			} else if( !empty( $regis_success ) ) {
				$notif_class = 'success-';
			}
			 ?>

			<div class="<?php echo $notif_class; ?>notification">
				<span><?php if( !empty( $phone_error ) ) echo $phone_error; ?></span>
				<span><?php if( !empty( $email_error ) ) echo $email_error; ?></span>
				<span><?php if( !empty( $regis_success ) ) echo $regis_success; ?></span>
			</div>
		
		<?php endif ?>

			<label class="form-title">Registration</label>
			<!-- Mobile number field-->
			<div class="form-row">
				<div class="input-group col-md-12 mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">+62</span>
					</div>
					<input type="number" class="form-control" name="phone-number" id="phone-number" placeholder="Mobile number" required>				
					<div class="invalid-tooltip">
						Please enter valid Indonesian phone number
					</div>
				</div>
			</div>
			<!-- First name field -->
			<div class="form-row">
				<div class="col-md-12 mb-3">
					<input type="text" class="form-control" name="first-name" id="first-name" placeholder="First name"
					required>
					<div class="invalid-tooltip">
						Please enter your first name
					</div>
				</div>
			</div>
			<!-- Last name field -->
			<div class="form-row">
				<div class="col-md-12 mb-3">
					<input type="text" class="form-control" name="last-name" id="last-name" placeholder="Last name"
					required>
					<div class="invalid-tooltip">
						Please enter your last name
					</div>
				</div>
			</div>
			<!-- Date birth field -->
			<div class="form-row">
				<div class="col-md-12 mb-3">
	    			<input type="text" name="date-birth" class="form-control" placeholder="Date of birth" onfocus="(this.type='date')">
				</div>
			</div>
			<!-- Gender field -->
			<div class="form-row">
				<div class="col-md-12 mb-3">
					<div class="form-check form-check-inline">
	  					<input class="form-check-input" type="radio" name="gender" id="male" value="Male">
	  					<label class="form-check-label" for="male">Male</label>
					</div>
					<div class="form-check form-check-inline">
	  					<input class="form-check-input" type="radio" name="gender" id="female" value="Female">
	  					<label class="form-check-label" for="female">Female</label>
					</div>
				</div>
			</div>
			<!-- Email field -->
			<div class="form-row">
				<div class="col-md-12 mb-3">
					<input type="email" class="form-control" name="email" id="email" placeholder="Email"
					required>
					<div class="invalid-tooltip">
						Please enter your Email
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-12 mb-3">
					<button id="register" name="register" class="btn btn-primary btn-sm" type="submit">Register</button>		
				</div>
			</div>
		</fieldset>
	</form>
	<!-- Login button -->
	<form id="login-btn" action="login.php" class="login-btn" <?php if( isset( $activate_login) ) echo "style='" . $activate_login . "'"; ?> >
		<div class="form-row">
			<div class="col-md-12 mb-3">
				<button id="login" class="btn btn-primary btn-sm" type="submit">Login</button>		
			</div>
		</div>
	</form>

	<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap-4.3.1/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap-4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>