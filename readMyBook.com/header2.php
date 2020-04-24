<?php

	session_start(); // start the session to use the websites features only members can

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<head>

	<!-- Universal Transformation Format 8 bit - is tha standard character set for the WWW -->
  <meta charset="utf-8">
  <title>readMyBook</title>


  <!-- add a viewport meta tag to enable touch zooming and ensure proper rendering on mobile devices -->
  <!-- sets the width of the page to be the same screen-width of the device being used -->
  <!-- and sets the initial zoom level when the page is first loaded -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- includes to the minimised version of the Bootstrap CSS and js libraries -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="readMyBookcss.css">
  <link rel="stylesheet" href="readStyle.css">



</head>
<html>

<body>

	<div id="main">
	<div id="wrapper">
		<div id="header"></div>
		<div id="body"></div>
		<div id="footer"></div>

<nav role="navigation" class="navbar navbar-inverse">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

  </div>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li><a href="index.php">readMyBook</a></li>
      <li><a href="authors.php">Authors</a></li>
      <li class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Genres<b class="caret"></b></a>
        <ul role="menu" class="dropdown-menu">
          <li><a href="horror.php">Horror</a></li>
          <li><a href="scifi.php">Sci-Fi</a></li>
          <li><a href="biography.php">Biography</a></li>
          <li><a href="thriller.php">Thriller</a></li>
          <li><a href="crime.php">Crime</a></li>
          <li><a href="drama.php">Drama</a></li>
        </ul>
      </li>
      <li><a href="upload.php">UpLoad Work </a></li>
      <li><a href = "signup.php">Sign up</a></li>
    </ul>

    <div style="float:right; color:#4699B7">	<!-- log in on navabar-->
    <form action="includes/login.includes.php" method="POST" >
    	<input type ="text" name="uid" placeholder="Username/email" />
        <input type ="password" name="pwd" placeholder="password" />
        <button type = "submit" name="submit">LogIn</button>
     </form>
     </div>
     <div style="float:right;color:#4699B7">

    </div>



 </nav>

</header>
<div>
<section>
<!--matthew alston!-->
