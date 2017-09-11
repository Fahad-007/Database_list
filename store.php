<?php
require_once("db.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_id = $_POST['email_id'];
$user_gender = $_POST['user_gender'];
$birth_date = $_POST['birth_date'];
$user_password = $_POST['user_password'];

$query = "INSERT INTO members_info(first_name,last_name,email_id,user_gender,birth_date,user_password) values('{$first_name}','{$last_name}','{$email_id}','{$user_gender}','{$birth_date}','{$user_password}')";

$insert = mysqli_query($connection,"INSERT INTO members_info(first_name,last_name,email_id,user_gender,birth_date,user_password) values('{$first_name}','{$last_name}','{$email_id}','{$user_gender}','{$birth_date}','{$user_password}')");

if($insert){
	?>
		<script>
			alert("Successfully data inserted");
			window.location.href='list.php';
		</script>
	<?php
}else{
	echo "Sorry try again";
}
