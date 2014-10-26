<?php 
session_start();
$passoword=$_POST['pass'];
if($passoword=='varunraj@2662'){
	
	$_SESSION['login']=1;
	header('Location:index.php');
	}
else{
	echo "error";
	}
?>