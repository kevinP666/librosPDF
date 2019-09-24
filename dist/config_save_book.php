<?php 
	// Array para generar alertas.
	$alert = array('type' => '', 'message' => '');
	
	if (isset($_POST['button_save_book'])) {
		// Verficando que haya ingresado todos los datos
		if (!empty($_POST['title_book']) && !empty($_POST['author_book']) && !empty(addslashes(file_get_contents($_FILES['imagen_book']['tmp_name']))) && !empty($_POST['editorial_book']) && !empty($_POST['category_book']) && !empty($_POST['id_code_book']) && !empty($_POST['year_book']) && !empty($_POST['language_book']) && !empty($_POST['page_number_book']) && !empty($_FILES['file_pdf_book']['name'])) {
			if ($_FILES['file_pdf_book']['type'] == 'application/pdf') {

				// Obteniendo variables.
				$title = $conn->real_escape_string($_POST['title_book']);
				$author = $conn->real_escape_string($_POST['author_book']);
				$imagen = addslashes(file_get_contents($_FILES['imagen_book']['tmp_name']));
				$editorial = $conn->real_escape_string($_POST['editorial_book']);
				$category = $conn->real_escape_string($_POST['category_book']);
				$hash_category = $conn->real_escape_string($_POST['category_book']);
				$code_id = $conn->real_escape_string($_POST['id_code_book']);
				$year = $conn->real_escape_string($_POST['year_book']);
				$language = $conn->real_escape_string($_POST['language_book']);
				$page_number = $conn->real_escape_string($_POST['page_number_book']);
				$review = $conn->real_escape_string($_POST['review_book']);

				// información sobre el pdf
				$name_file = $_FILES['file_pdf_book']['name'];
				$type_file = $_FILES['file_pdf_book']['type'];
				$size_file = $_FILES['file_pdf_book']['size'];
				$route_file = $_FILES['file_pdf_book']['tmp_name'];
				$destination_file = "file-book/".$name_file;

				// Subir pdf al archivo local 'file-book'
				if (copy($route_file, $destination_file)) {
					$insert = "INSERT INTO book(title, author, imagen, editorial, name_category, hash_category, code_id_book, year, language, page_number, review, size, type, name_pdf) VALUES('$title','$author','$imagen','$editorial','$category','$hash_category','$code_id','$year','$language','$page_number','$review','$size_file','$type_file','$name_file')";
					$result = mysqli_query($conn, $insert);
					if ($result) {
						$alert = array(
							'type' => 'success',
							'message' => 'Libro guardado correctamente.'
						);
						header('Location: all_book.php');
					} else {
						$alert = array(
							'type' => 'danger',
							'message' => 'error al enviar los datos a la base de datos.'
						);
					}
				} else {
				}

			} else {
				$alert = array(
					'type' => 'danger',
					'message' => 'Ingresa una documento con la extensión .pdf'
				);
			}
		} else {
			$alert = array(
				'type' => 'danger',
				'message' => 'Todos los campos son obligatorios.'
			);
		}
	}

?>