<?php
	include "includes/databaseconnection.includes.php"; // database connection
	include_once 'header.php'; // nav bar stuck at top
?>
<head>
	<title>Authors</title>
 </head>
 <body>
  <h1>Authors</h1>


    <?php

	$result = mysqli_query($conn,"SELECT * FROM users"); // takes all the users from the table 'users' in the databse and displays them in a table

echo "<table border='0' table width='90%' padding = 5% text-align:center cellpadding:3px table-align : centre>

<tr>
<th><h2>Author</h2></th>
<th>  </th>
<th><h2>Username</h2></th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['user_first'] ."</td>";
echo "<td>" . $row['user_last'] ."</td>";
echo "<td> <a href='profile.php?user_id={$row['user_id']}'>" . $row['user_uid'] . "</a></td>";


echo "</tr>";
}
echo "</table>";

?>



</section>
</body>
<footer>
</footer>
</html>
<!--matthew alston!-->
