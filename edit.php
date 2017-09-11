<?php 
	require_once("db.php");
	$id = $_GET['id'];
	$serch_query = mysqli_query($connection,"SELECT * FROM members_info where id = {$id}");
	$row = mysqli_fetch_assoc($serch_query);
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/i_style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
 </head>
 <body>
 	<div class="container-fluid">
 		<div class="main_form">
 			<h2>Edit user info</h2>
 			<h4><a href="index.php">Add new member</a></h4>

		 	<form action="update.php" method="post">
				<div class="form-group">
					<label>First name :</label>
					<input type="text" class="form-control" value="<?= $row['first_name'] ?>" name="first_name">
				</div>

				<div class="form-group">
					<label>Last name :</label>
					<input type="text" class="form-control" value="<?= $row['last_name'] ?>" name="last_name">
				</div>

				<div class="form-group">
					<label>Email :</label>
					<input type="text" class="form-control" name="email_id" value="<?= $row['email_id'] ?>">
				</div>

				<div class="form-group">
					<label>Gender :</label>
					<select class="form-control" value="<?= $row['user_gender'] ?>" name="user_gender">
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>

				<div class="form-group">
					<label>Birth date :</label>
					<input type="text" class="form-control" name="birth_date" value="<?= $row['birth_date'] ?>">
				</div>

				<div class="form-group">
					<label>Password :</label>
					<input type="text" class="form-control" name="user_password" value="<?= $row['user_password'] ?>">
				</div>

				<input type="hidden" name="id" value="<?= $row['id'] ?>">
				
				<button class="btn btn-primary">Update</button>
			</form>
 		</div>
 	</div>
 </body>
 </html>