<?php

include_once 'header.php'; //navbar top
include "includes/databaseconnection.includes.php"; // database connection


	if(isset($_GET['user_id'])){ // get specefic user from table 'users'
	$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
	$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
	$result= mysqli_query($conn, $sql) or die;
	$row = mysqli_fetch_array($result);
	}

?>
<body>
<h1><?php echo $row['user_uid'] ?>'s Profile Page</h1>
<div>
<p> Here you will find all of <?php echo $row['user_first']?> <?php echo $row['user_last'] //users profile name ?>'s work and are free to browse their body of work.  If you wish ti leave some feedback on their work please email them and let them know!</p>
</div>
<div>
<table width="45%" border="0" align="left" cellspacing="83">
  <tr>
    <th scope="col"><h1>Author's Bio</h1><br />
    <?php echo $row['user_bio'] ?> <!-- user bio from table in database-->


    </th>
  </tr>
</table>
</div>
<p>&nbsp;</p>
<div>
<h1> Author's Deatils</h1>
<table width="45%" height="281" border="0" > <!-- table autofilled from users table in database -->
  <tr>
    <th scope="col"> First Name :<?php echo $row['user_first']?></th>
  </tr>
  <tr>
    <th scope="col"> Last Name :<?php echo $row['user_last']?></th>
  </tr>
  <tr>
    <th scope="col"> Username :<?php echo $row['user_uid']?></th>
  </tr>
  <tr>
    <th scope="col"> Email Address :<?php echo $row['user_email']?></th>
  </tr>
</table>
</div>
</body>
<footer>

</footer>
</html>

<!--matthew alston!-->
