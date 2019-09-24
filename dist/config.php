<?php 

	include 'connection.php';

	function row_list_category() {
		global $conn;

		$select = "SELECT * FROM category";
		return $result = mysqli_query($conn, $select);
		
	}

	function retorn_text($text) {
		$txt = $text;
		$coding = mb_detect_encoding($txt, "UTF-8,ISO-8859-1");
		return iconv($coding, 'UTF-8', $txt);
	}

?>
