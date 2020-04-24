<?php
include "includes/databaseconnection.includes.php"; // database connection
include_once 'header.php';

?><head>
	<title>Horror</title>
</head>
  <body>
  <section>
  <div class="container">
  <div class="col-sm-12">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="Pictures/window.jpg" alt="" width="1002" height="1360"/>
<div class="carousel-caption">
        </div>
	  </div>

      <div class="item">
        <img src="Pictures/skull.jpg" alt="" width="1000" height="500"/>
        <div class="carousel-caption">
        </div>
	  </div>

      <div class="item">
        <img src="Pictures/house.jpg" width="1200" height="330" alt=""/>
		<div class="carousel-caption">
		</div>
	  </div>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="container-fluid">
  <div class="row" >
    <div class="col-sm-12">

<h1>Horror</h1>

<div>

<?php

$result = mysqli_query($conn,"SELECT * FROM books WHERE book_genre ='Horror'");

echo "<table border='0' table width='90%' padding = 5% text-align:center cellpadding:3px table nam>

<tr>
<th><h2>Title</h2></th>
<th><h2>Author</h2></th>
<th><h2>Date</h2></th>
<th><h2>Genre</h2></th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td> <a href='horror1.php'>" . $row['book_title'] . "</a></td>";
echo "<td>" . $row['book_author'] ."</td>";
echo "<td>" . $row['book_date'] . "</td>";
echo "<td>" . $row['book_genre'] . "</td>";
echo "</tr>";
}
echo "</table>";

?>
</div>


</section>
</body>
<footer>
<div>

</div>
</footer>
</html>


<!--matthew alston!-->
