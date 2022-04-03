<?php
  $server = 'localhost';
  $user = 'root';
  $password = 'Om3gAmUnChi3';
  $database = 'midtermprojectwad2';
  
  
  $conn = mysqli_connect($server, $user, $password, $database);
  
  if(!$conn){
      die("Connection error!");
  }
  
 