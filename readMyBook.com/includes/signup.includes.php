<?php

if(isset($_POST['submit'])){

	include_once 'databaseconnection.includes.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$bio = mysqli_real_escape_string($conn, $_POST['bio']);//stop people adding code to database
	//errors
	//empty fields
	if(empty($first)|| empty($last) || empty($email) || empty($uid) || empty($pwd)|| empty($bio)){
		header("Location:../signup.php?signup=empty");//back to
	exit();// stops script from running
	}else{
		//check if input chars are valid
		if(!preg_match("/^[a-zA-Z]*$/",$first)||!preg_match("/^[a-zA-Z]*$/",$last)){
					header("Location: ../signup.php?signup = invalidcharachters");//back to
	exit();// stops script from running
		}else{
			//check email valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location:../signup.php?signup=emailinvalid");//back to
	exit();// stops script from running
		}else{//for email/username already in use
			$sql ="SELECT * FROM users WHERE user_uid= '$uid'";
			$result = mysqli_query($conn, $sql);
			$results = mysqli_num_rows($result);

			if($results > 0){
				header("Location: ../signup.php?signup=usernameoremailtaken");//back to
	exit();// stops script from running
			}else{
			//hash password
			$hashedPwd =password_hash($pwd, PASSWORD_DEFAULT);
			//insert the user into database
			$sql = "INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd,user_bio)
			VALUES ('$first','$last','$email','$uid','$hashedPwd','$bio')";
			mysqli_query($conn,$sql);
			header("Location: ../signup.php?signup=success");//sucess message
	exit();// stops script from running

			}
		}
	}
}

} else {
	header("Location: ../signup.php");//security
	exit();// stops script from running
}

//matthew alston
