<?php

function setComments($conn){
    if(isset($_POST['commentSubmit'])) {
      $date = $_POST['date'];
      $message= $_POST['message'];

      $sql = "INSERT INTO comments (date, message) VALUES ('$date','$message')";
      $result = $conn->query($sql);
    }
}

function getComments($conn){
  $sql = "SELECT * FROM comments";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()){
      echo "<div class = 'comment-box'>";
        echo $row['date']."<br>";
        echo nl2br($row['message']);
      echo "</div>";
}
}

//Matthew Alstonmatthew alston
