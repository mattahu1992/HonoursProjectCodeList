<?php

session_start();//start session
session_unset();//end session
header("Location: ../index.php?logout=success");
?>
//matthew alston
