<?php
	session_start();
	
	if(!isset($_SESSION['info'])){
		$_SESSION['info'] = array();
	}
	
	
	// if($_POST['submit']){
	// 	$_SESSION['info'][$_POST['phone']] = '{"lname":"' . $_POST['lname'] . '","mi":"' . $_POST['mi'] . '","fname":"' . $_POST['fname'] . '","account":"' . $_POST['account'] . '"}';
	// 	header("Location: http://pausch.cs.uakron.edu/~zmf9/Assignments/Assignment5/Assignment5a.php");
	// }

	if($_POST['submit']){
		$_SESSION['info'] = '{"LaptopName":"' . $_POST['LaptopName'] . '"}';
		header("Location: http://pausch.cs.uakron.edu/~zmf9/Assignments/Assignment5/Assignment5a.php");
	}
	
	
	// if(isset($_GET['phoneNumber'])){
	// 	$phone = $_GET['phoneNumber'];
	// 	if(array_key_exists($phone, $_SESSION['info']))
	// 		print $_SESSION['info'][$phone];
	// 	else
	// 		print NULL;
	// }
?>