<?php
include "includes/databaseconnection.includes.php"; // database connection
include_once 'header2.php'; // nav bar stuck at top
	?>

<h1>Upload Your Book</h1>

<p> When uploading your work please load it as a pdf and have your name or pseudoname, title, blurb image and email address icluded in the pdf.  This will make it easier for us to upload and allow others to view. Thanks!</p>
<?php
 if (isset($_SESSION['u_id'])){ // only make upload of pdfs available to members of readmyBook.com
		echo '<form action="pdfuploads.php" method ="POST" enctype="multipart/form-data">
		<input type="file" name="file" >
    	<button type="submit" name="submit12">UPLOAD PDF</button>
		</form>';
		}else{
			echo "You have to be logged in to upload a file!";
		}
	?>

</body>
<footer>


</footer>
</html>

<!--matthew alston!-->
