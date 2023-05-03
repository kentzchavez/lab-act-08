<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
<h1>Register a User</h1>

<script>
function validateForm() {
    var password = document.getElementsByName("password")[0].value;
    var confirmPassword = document.getElementsByName("confirm_password")[0].value;
    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
	if (password.length < 8) {
		alert("Password must be at least 8 characters.");
		return false;
	} 
}
</script>

<form action="save-registration.php" method="POST" onsubmit="return validateForm()">
	<div>
		<label>First Name</label>
		<input type="text" name="first_name" placeholder="First Name" required/>	
	</div>
	<div>
		<label>Middle Name</label>
		<input type="text" name="middle_name" placeholder="Middle Name" />	
	</div>
	<div>
		<label>Last Name</label>
		<input type="text" name="last_name" placeholder="Last Name" required />	
	</div>
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" required/>	
	</div>
	<div>
		<label>Password</label>
		<input type="password" name="password" placeholder="Password" required/>	
	</div>
	<div>
		<label>Confirm Password</label>
		<input type="password" name="confirm_password" placeholder="Confirm Password" required/>	
	</div>
	<div>
		<label>Birthdate</label>
		<input type="date" name="birthdate" required />	
	</div>
	<div>
		<label>Gender</label>
		<br />

		<label>
			<input type="radio" name="gender" value="Male" />
			Male
		</label>	

		<label>
			<input type="radio" name="gender" value="Female" />
			Female
		</label>	
	</div>
	<div>
		<label>Address</label>
		<input type="text" name="address" placeholder="Address"/>	
	</div>
	<div>
		<label>Contact Number</label>
		<input type="text" name="contact_number" placeholder="Contact Number"/>	
	</div>
	<div>
		<button type="submit">
			Register User
		</button>	
	</div>
</form>

</body>
</html>
