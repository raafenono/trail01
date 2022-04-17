<?php

  session_start();

  if (count($_POST)>0) {
    $conn = mysqli_connect('localhost:3306', 'root', '', 'ou_ca') or die ("Unable to connect");
    $sql = "select * from campus where email='".$_POST["mail"]."' and password='".$_POST["pword"]."'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
  
    if (mysqli_num_rows($result) > 0) {

      if ($row["password"]==$_POST["pword"]) {
        header("Location:camain.html");
      }
      else{
        header("Location:ca.html");
      }
    }
    else {
      header("Location:careg.html"); 
    }

    mysqli_close($conn);
    
  }
?>