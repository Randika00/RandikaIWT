<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname="fineclix"; 

  $conn = new mysqli($servername,$username,$password,$dbname);
  

  if($conn->connect_error)   
  {
  	die("connection_Error" . $conn->connect_error); 

  }

  ?> 