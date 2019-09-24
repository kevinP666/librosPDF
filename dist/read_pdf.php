<?php 

	include 'connection.php';

	$id_pdf = $_REQUEST['id'];

	$select = "SELECT * FROM book WHERE id = '$id_pdf'";
	$result = mysqli_query($conn, $select);

	$row = $result->fetch_assoc();

	if (!empty($row['name_pdf'])) {
		header('content-type: application/pdf');
		readfile('../file-book/'.$row['name_pdf']);
	}
?>