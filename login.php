<?php
include "config.php";


$username = $_GET['txtLogUsername'];
$password = $_GET['txtLogPassword'];
if($username && $password){

	$sql = "SELECT * FROM tbl_user WHERE user_Email = '".$username."' AND user_Password = '".$password."' ";
	$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)){
			echo 'welcome';
		}
		else{
			echo'Wrong username of password';
		}


}


?>