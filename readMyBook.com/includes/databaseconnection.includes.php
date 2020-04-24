<?php

	$dbServername = "localhost"; //servername for log in
	$dbUsername = "root";	//username for server
	$dbPassword = "";	//password for server
	$dbName = "loginsystem";	//database naem

	$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName); //start connection

	if(!$conn){
		die("Connection failed: ".mysqli_connect_error());
	}

//matthew alston
