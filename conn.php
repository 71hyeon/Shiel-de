<?php
  $host = 
  $user = 
  $pw = 
  $dbName = 

  $conn = mysqli_connect($host, $user, $pw, $dbName);
  
  if(mysqli_connect_errno()){
    echo "데이터베이스 접속 실패";
    echo mysqli_connect_errno();
  }
?>
