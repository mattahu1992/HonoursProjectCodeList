<?php
include "includes/databaseconnection.includes.php";
include 'includes/comments.includes.php';
include_once 'header2.php'; // nav bar top
date_default_timezone_set("Europe/London")
?>
<head>
	<title>Horror1</title>
<body>
<div>
<h1>Horror 1</h1>
<?php
 if (isset($_SESSION['u_id'])){ // must be logged in
		echo "<a href='pdfuploads/5ea0cc373b67c8.46362821.pdf'>View in Browser &nbsp;</a>";	 //view online
		echo "				";
		echo "<a href='pdfuploads/5ea0cc373b67c8.46362821.pdf' download='pdfuploads/5ea0cc373b67c8.46362821.pdf' name='Horror 1'>Download PDF</a>"; //download file
		}else{
			echo "You have to be logged in to download file"; // if not logged in this will show
		}
	?>

</div>
<div style="float:left;">><img src="images/horror1.jpg" alt="" name="BookImage" width="437" height="195" id="BookImage" /> <!-- book image -->
</div>
<div style="float:right;">
	<h2>Book Details </h2>
  <table width="100%" border="0" cellspacing="37" text-align="center" text-size="20">
    <tr>
      <th width="697" scope="col">Author: Jeff Jeffy</th>
    </tr>
    <tr>
      <td>Genre: Horror </td>
    </tr>
    <tr>
      <td>Date:10/04/2020</td>
    </tr>
  </table>
</div>
<div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h1>&nbsp;</h1>
<h1>Blurb</h1>
<textarea readonly>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </textarea> <!-- blurb -->
</div>
<p>&nbsp;</p>
<h2>Please leave your constructive critism below</h2>
<div>
	<?php
	if (isset($_SESSION['u_id'])){
	echo "<form method='POST' acion='".setComments($conn)."'>
		<input type ='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
		<textarea id= 'commentTA' name='message'></textarea>
		<br>
		<button type='submit' name='commentSubmit'>Comment</button>
	</form>";
}else{
	echo "You have to be logged in to comment on this work"; // if not logged in this will show
}

?>
<h2>Reviews</h2>
<?php
getComments($conn);
	?>
</div>
<footer>
</footer>




</html>
<!--matthew alston!-->
