<?php

$serverName= 'localhost';
$username  = 'root';
$password  =  '';
$dbname    = 'project2';


$conn = mysqli_connect($serverName,$username,$password,$dbname);

if ($conn == FALSE) 
echo 'Neuspjesno uspostavljanje veze';
