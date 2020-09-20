<?php
	require './db.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM story WHERE mtnb='${id}';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $c = $row['chat'];

    session_start();
    $c = $c.$_SESSION['commentor'].'<say>'.$_POST['comment'].'<Finish>';

    $sql = "UPDATE com SET comm='${c}' WHERE mntb='${id}';";
    $result = $conn->query($sql);

?>