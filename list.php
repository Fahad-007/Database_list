<?php 
	require_once('db.php');
	$get_query = mysqli_query($connection,"SELECT * FROM members_info");

	$members = [];

	while ($row = mysqli_fetch_assoc($get_query)) {
		$members[] = $row;
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/list.css">
 </head>
 <body>
 	<div class="container-fluid">
 		<div class="panel-body">
 			<h2>Members list</h2>
 			<h4><a href="index.php">Add new member</a></h4>
 		</div>

 		<div class="panel-body">
 			<table class="table table-hover table-inverse">
 				<thead class="thead-inverse">
 					<tr>
						<th>SN</th>
						<th>Frist name</th>
						<th>Last name</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Birth date</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
 				</thead>

 				<tbody>
 					<?php foreach ($members as $value) : ?>
 						<tr>
							<td><?= $value['id']; ?></td>
							<td><?= $value['first_name']; ?></td>
							<td><?= $value['last_name']; ?></td>
							<td><?= $value['email_id']; ?></td>
							<td><?= $value['user_gender']; ?></td>
							<td><?= $value['birth_date']; ?></td>
							<td><a href="edit.php?id=<?= $value['id']; ?>"class="btn btn-sm btn-info">edit</a></td>
							<td><a onclick="return confirm('Are you sure')" href="list.php?idd= <?php echo $value['id']; ?>" class="btn btn-sm btn-danger">Delete</a></td>
						</tr>
						<?php 
							if (isset($_GET['idd'])) {
								$idd = $_GET['idd'];
								$result = $connection->query("DELETE FROM members_info WHERE id='$idd'");
								if ($result) {
									header("location: list.php");
								}else{
									?>
									<script>
										alert("Fail to delete data");
										window.location.herf='list.php';
									</script>
									<?php
								}
							}
						 ?>
					<?php endforeach; ?>
 				</tbody>
 			</table>
 		</div>
 	</div>
 </body>
 </html>