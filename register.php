<?php
include "config.php";

$username=$_POST['txtUsername'];
$password=$_POST['txtPassword'];
$department=$_POST['radDepartment'];

	$sql = "INSERT INTO tbl_user (user_Id, user_Email, user_Password, user_Department) 
			VALUES (NULL,'".$username."','".$password."','".$department."')";

	$result = mysqli_query($conn, $sql);
		if($result){
			echo "You have Register";
		}
		else{
			echo "Something wrong.";
		}
?>