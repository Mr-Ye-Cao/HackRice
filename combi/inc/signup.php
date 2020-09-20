<?php
if (isset($_POST['submit'])) {
		require 'db.php';

		$na = $_POST['name'];
		$pa = $_POST['password'];
		$q1 = $_POST['q1'];
		$q2 = $_POST['q2'];
		$q3 = $_POST['q3'];
		$q4 = $_POST['q4'];
		$q5 = $_POST['q5'];
		$q6 = $_POST['q6'];

		$sql = "SELECT * FROM mn WHERE stnm='';";

		$result = $conn->query($sql);

		$mtnm;
		$min = 1000000;
		$cur = 0;

		while($row = $result->fetch_assoc()){
			$cur += abs($row['q1']-$q1);
			$cur += abs($row['q2']-$q2);
			$cur += abs($row['q3']-$q3);
			$cur += abs($row['q4']-$q4);
			$cur += abs($row['q5']-$q5);
			$cur += abs($row['q6']-$q6);

			if($cur < $min){
				$mtnm = $row['id'];
				$min = $cur;
			}
		}


		$sql = "INSERT INTO stu (name, menm, q1, q2, q3, q4, q5, q6, pass) VALUES ('${na}','${mtnm}','${q1}','${q2}','${q3}','${q4}','${q5}','${q6}', '${pa}');";

		if ($conn->query($sql) === TRUE) {
			session_start();
			$_SESSION['LoggedIn'] = True;
			$_SESSION['commentor'] = $na;


			$sql = "SELECT * FROM stu WHERE menm='".$mtnm."';";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$stnm = $row['id'];

			$sql = "UPDATE mn SET stnm = '${stnm}' WHERE id='${mtnm}';";
			$result = $conn->query($sql);

			// create conversation dialogue
			$sql = "INSERT INTO chat (sm, dialog) VALUES ('${mtnm}.${stnm}' , '');";
			$result = $conn->query($sql);


			// header("Location:../f/uploadf.php?signup=success&un=".$na."&pa=".$pass);
		}
}
?>