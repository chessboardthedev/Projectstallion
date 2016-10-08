<?php
/*
*****************************************
*					*
*					*
*        Made by @Chessboard 		*
*    https://3letteragenices.net	*
*					*
*					*
*****************************************
[WARNING: Outdated browsers can bypass HTML tag 'required', so this is required] 

If input value is empty, return response 'complete' 
*/
session_start();
require 'inc/connect.php';
if(empty($_POST['username'] && $_POST['password'])) {
	header("Location:login.php?response=incomplete");
}
else {
	/* Assign variables to POST values */
	$username = $_POST['username'];
	$password = $_POST['password'];
	/* Clean User Input */
	$username = stripslashes($username);
	$password = stripslashes($password);

	/* First, check with user exists before retrieving hash and decrypting */
	$username_ghost_check = $db_connect -> prepare("SELECT COUNT(*) FROM `users` where `Username` = :username LIMIT 1");
	$username_ghost_check -> execute(array(':username' => $username));
	$username_ghost_result = $username_ghost_check -> fetchColumn(0);
	/* If result is '1' user exists, retrieve password based on username */
	if ($username_ghost_result == 1) {
		$retrieve_hash = $db_connect -> prepare("SELECT `Hash` FROM `users` where `Username` = :username LIMIT 1");
		$retrieve_hash -> execute(array(':username' => $username));
		$hash_before = $retrieve_hash -> fetchColumn(0);
		/* Attempt to decrypt hash to check user input and database entry  */
		$hash_after = password_verify($password, $hash_before);
		/* If result is '1', hash is correct  */
		if($hash_after == 1) {
			$retrieve_user_info = $db_connect -> prepare("SELECT * FROM `users` where `Username` = :username and `Hash` = :hash");
			$retrieve_user_info -> execute(array(':username' => $username, ':hash' => $hash_before));
			$userInfo = $retrieve_user_info -> fetch(PDO::FETCH_ASSOC);

			$_SESSION['Username'] = $userInfo['Username'];
			$_SESSION['ID'] = $userInfo['ID'];
			header("Location:login.php?response=success");
		}
		else {
			header("Location:login.php?response=failed");
		}
	}
	else {
		header("Location:login.php?response=failed");
	}
}
?>