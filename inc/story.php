<?php
	if (isset($_POST['submit'])) {
		require 'db.php';

		session_start();
		$name = $_SESSION['commentor'];

		$sql = "SELECT * FROM mn WHERE name = '${name}'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$id = $row['id'];

		$sto = $_POST['story'];
	
		$sql = "UPDATE story SET sto='${sto}' WHERE mtnb = '${id}'";
		$conn->query($sql);

		header("Location: ../success/chat/index.php");
	}

?>