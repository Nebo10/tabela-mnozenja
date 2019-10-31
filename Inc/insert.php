<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 require 'conect.php';

if(isset($_POST['save']) && $_POST['save']==true){
	
	$factor1 = $_POST ['factor1'];
	$factor2 = $_POST ['factor2'];
	$operation = $_POST ['operation'];
	$result  = $_POST [ 'result'];
	$operation_date = date('Y-m-d H:i:s');

	

	$factor1 = mysqli_real_escape_string ($conn,$factor1);
	$factor2 = mysqli_real_escape_string ($conn,$factor2);
	$operation = mysqli_real_escape_string ($conn,$operation);
	$result = mysqli_real_escape_string ($conn,$result);
	$operation_date = mysqli_real_escape_string ($conn,$operation_date);

	$upit = "INSERT INTO `tablica_mnozenja`(`factor1`, `factor2`, `operation`, `result`, `operation_date`) VALUES ($factor1,$factor2,'$operation',$result,'$operation_date')";

	if(mysqli_query ($conn,$upit)){
		echo $result;
		exit;
	}
	return null;
}