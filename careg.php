<?php

  if (count($_POST) > 0) {
    $conn = mysqli_connect('localhost:3306', 'root', '', 'ou_ca') or die ("Unable to connect");

  $sql = "insert into campus values ('".$_POST["mail"]."', '".$_POST["uname"]."', '".$_POST["pword"]."', '".$_POST["college"]."', '".$_POST["insta"]."', '".$_POST["fb"]."')";

  mysqli_query($conn, $sql);
  header("Location:calogin.html");

  }

?>
