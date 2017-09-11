<?php
require_once("db.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_id = $_POST['email_id'];
$user_gender = $_POST['user_gender'];
$birth_date = $_POST['birth_date'];
$user_password = $_POST['user_password'];
$id = $_POST['id'];


$query = "UPDATE members_info SET first_name = '{$first_name}', last_name = '{$last_name}',email_id = '{$email_id}',user_gender = '{$user_gender}',birth_date = '{$birth_date}',user_password = '{$user_password}' where id = {$id}";

$update = mysqli_query($connection,$query);

if($update){
	?>
		<script>
			alert("Successfully data updated");
			window.location.href='list.php';
		</script>
	<?php

}else{
	echo mysqli_error($connection);
}