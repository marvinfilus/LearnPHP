<?php

$servername  = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBname = "loginsysemtut";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBname);

if(!$conn){
  die("Connection failed: " .mysqli_connect_error() );

}
