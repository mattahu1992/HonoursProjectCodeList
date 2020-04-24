<?php
include "includes/databaseconnection.includes.php"; // database connection
include_once 'header2.php'; //nav bar at top
	?><head>
		<title>SignUp</title>
</head>


<link rel="stylesheet" href="logInStyle.css">
<body>


    <div>
    <div class="container centre">
    <h1>Register to readmyBook.com</h1>   <!-- form for signing up displayed with a register button -->
	<form action="includes/signup.includes.php" method="POST">
	<input type="text" name="first" placeholder="First Name"/><br />
    <input type="text" name="last" placeholder="Last Name"/><br />
    <input type="text" name="email" placeholder="E-mail Address"/><br />
    <input type="text" name="uid" placeholder="Username"/><br />
    <input type="password" name="pwd" placeholder="Password"/><br />
    <textarea name="bio" rows="10" placeholder="About You"></textarea>
    <br />
    <button type ="submit" name ="submit">Register Now</button>
    </form>
</div>
</div>
</body>
<footer>
<div>

</div>
</footer>
</html>
<!--matthew alston!-->
