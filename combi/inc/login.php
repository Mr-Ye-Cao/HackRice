<?php
	if (isset($_POST['submit'])) {
		require 'db.php';

		$na = $_POST['name'];
		$pa = $_POST['password'];
		$ism = $_POST['isment'];
		
		if($ism){
			$sql = "SELECT name FROM mn WHERE name=? AND pass=?" ;
		}else{
			$sql = "SELECT name FROM stu WHERE name=? AND pass=?" ;
		}

		$stmt = mysqli_stmt_init($conn);

		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt, "ss", $na, $pa);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
				
		$resultcheck = mysqli_stmt_num_rows($stmt);

		if($resultcheck==1){
			session_start();
			$_SESSION['LoggedIn'] = True;
			$_SESSION['commentor'] = $na;

			if($ism){
				header("Location: ../success/mentor.php");
			}else{
				header("Location: ../success/student.php");
			}
		}else{
			header("Location: ../registers/login.php");
			exit();
		}
	}


?>