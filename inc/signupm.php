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


		$sql = "INSERT INTO mn (name, stnm, q1, q2, q3, q4, q5, q6, pass) VALUES ('${na}','','${q1}','${q2}','${q3}','${q4}','${q5}','${q6}', '${pa}');";

	if ($conn->query($sql) === TRUE) {
			session_start();
			$_SESSION['LoggedIn'] = True;
			$_SESSION['isM'] = True;
			$_SESSION['commentor'] = $na;

			$sql = "SELECT * FROM mn WHERE name = '${na}' and pass = '${pa}';";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$mtnb = $row['id'];


			$sql = "INSERT INTO story (mtnb, sto) VALUES ('${mtnb}','');";
			$conn->query($sql);

			header("Location: ../success/chat/index.php");
	}
}
?>