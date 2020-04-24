<?php
if(isset($_POST['submit12'])){

	$file = $_FILES['file'];

	$fileName= $_FILES['file']['name']; // original filename
	$fileTmpName= $_FILES['file']['tmp_name'];   //temporary name
	$fileSize= $_FILES['file']['size'];	//size
	$fileError= $_FILES['file']['error']; //errors
	$fileType= $_FILES['file']['type'];	//type of file

	$fileExt = explode('.',$fileName);  //create new name
	$fileActualExt = strtolower(end($fileExt));

			$allowed = array('pdf'); //only allow pdf uploads
	if(in_array($fileActualExt, $allowed)){ //check file size is permitted
		if($fileError === 0){//no errors
			if($fileSize < 1000000){
				$fileNameNew = uniqid('',true).".".$fileActualExt; //create name
				$fileDestination = 'pdfuploads/'.$fileNameNew; //save to folder
				move_uploaded_file($fileTmpName,$fileDestination); // move to the folder
				header("Location: upload.php?uploadsuccess"); // success message
			}else{
				echo "PDF is too big";
			}
		}else{
			echo "There was an error uploading the pdf";
		}
	}else{
		echo "You have not selected a PDF file to upload. You can only upload PDF files";
	}

}

//Matthew Alston
