<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database</title>
	<link rel="stylesheet" type="text/css" href="css/i_style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

</head>
<body>
	<div class="container-fluid">
		<div class="main_form">
			<h2>Member registration form</h2>
			<ul>
				<h4><a href="list.php">Member list</a></h4>
			</ul>
			<form action="store.php" method="post">
				<div class="form-group name">
					<label>First Name :</label>
					<input type="text" class="form-control" name="first_name" placeholder="First name">
				</div>

				<div class="form-group name">
					<label>Last Name :</label>
					<input type="text" class="form-control" name="last_name" placeholder="Last name">
				</div>

				<div class="form-group">
					<label>Birth of date :</label>
					<input type="date" class="form-control" name="birth_date" placeholder="dd/mm/yyy">
				</div>

				<div class="form-group">
					<label>Gender :</label>
					<select class="form-control" name="user_gender">
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>

				<div class="form-group">
					<label>Email :</label>
					<input type="text" class="form-control" placeholder="@Email" name="email_id">
				</div>

				<div class="form-group">
					<label>Password :</label>
					<input type="password" class="form-control" name="user_password" placeholder="Create new password">
				</div>
				
				<button class="btn btn-success">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>