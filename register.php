<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<label>Registration No.</label>
			<input type="number_format" name="registration" value="<?php echo $registration; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
			<label>CNIC</label>
			<input type="number_format" name="cnic" value="<?php echo $cnic; ?>">
		</div>
		<div class="input-group">
			<label>Mobile 1</label>
			<input type="number_format" name="mobile1" value="<?php echo $mobile1; ?>">
		</div>
		<div class="input-group">
			<label>Mobile 2</label>
			<input type="number_format" name="mobile2" value="<?php echo $mobile2; ?>">
		</div>
		<div class="input-group">
			<label>Gender</label>
			<input type="number_format" name="gender" value="<?php echo $gender; ?>">
		</div>
		<div class="input-group">
			<label>Caste</label>
			<input type="number_format" name="caste" value="<?php echo $caste; ?>">
		</div>
		<div class="input-group">
			<label>City</label>
			<input type="text" name="city" value="<?php echo $city; ?>">
		</div>
		<div class="input-group">
			<label>Date Of Birth</label>
			<input type="date_create" name="dob" value="<?php echo $dob; ?>">
		</div>
		<div class="input-group">
			<label>Joining Date</label>
			<input type="date_create" name="jd" value="<?php echo $jd; ?>">
		</div>
		<div class="input-group">
			<label>Blood Group</label>
			<input type="number_format" name="bg" value="<?php echo $bg; ?>">
		</div>
		<div class="input-group">
			<label>Picture Upload</label>
			<input type="file" name="pic" accept="image/*">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>