<?php
include("php/dbconfig.php");
		
	$id= $_REQUEST['id'];
	$sqlq = "Delete from `user` where E_ID = '$id'"; 
	//echo $sqlq; exit;
	$db = mysqli_query($conn, $sqlq);
	
if(!$db){
	echo 'error msg';
}else{
	header('Location:profile.php');
}
		

?>