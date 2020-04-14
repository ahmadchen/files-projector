<?php 
  if (isset($_GET['goji']) && $_GET['goji']=="geje") {  

    if (isset($_GET['do'])) {
      
      $target = $_GET['do'];
      $identify = $_GET['id'];
      
      echo "ok";
      exec("nohup bash checker.sh '$target' '$identify' &");

    } else {
      echo ":)";
    }

  } else {
    echo ":)";
  }
?>
