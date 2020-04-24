<?php
include "includes/databaseconnection.includes.php"; // database connection
include_once 'header.php';
	?><head>
	<title>Drama</title>
</head>

<h1>Drama</h1>
    <?php

	$result = mysqli_query($conn,"SELECT * FROM books WHERE book_genre ='Drama'");

echo "<table border='0' table width='90%' padding = 5% text-align:center cellpadding:3px>
<tr>
<th><h2>Title</h2></th>
<th><h2>Author</h2></th>
<th><h2>Date</h2></th>
<th><h2>Genre</h2></th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td> <a href='book.php?book_id={$row['book_id']}'>" . $row['book_title'] . "</a></td>";
echo "<td>" . $row['book_author'] ."</td>";
echo "<td>" . $row['book_date'] . "</td>";
echo "<td>" . $row['book_genre'] . "</td>";
echo "</tr>";
}
echo "</table>";;


?>


</section>
</body>

<footer>

</footer>
</html>


<!--matthew alston!-->
