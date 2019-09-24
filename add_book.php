<!-- 
	Created by Kevin Parra - LibrosPDF 2019.
-->
<?php 
	include 'dist/config.php';
	include 'dist/config_save_book.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Más destacados - LibrosPDF</title>
	<?php include 'components/head_information.php' ?>
</head>
<body>
	
	<!-- header -->
	<?php include 'components/header.php'; ?>
	
	<section class="wrapper-fluid mt-3 pt-5 mb-5 pb-2">
		<article class="wrapper">
			<h2 class="title_">Agregar libro</h2>
			<div class="content-form">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-4">
							<div class="group-form mb-4">
								<label for="title_book">Título</label>
								<input type="text" class="form-control" name="title_book">
							</div>
						</div>
						<div class="col-md-4">
							<div class="group-form mb-4">
								<label for="author_book">Autor</label>
								<input type="text" class="form-control" name="author_book">
							</div>
						</div>
						<div class="col-md-4 mb-4">
							<label for="file_pdf_book">Selecciona imagen</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="imagen_book" id="imagen_book">
								<label class="custom-file-label" for="imagen_book">Subir imagen</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="group-form mb-4">
								<label for="editorial_book">Editorial</label>
								<input type="text" class="form-control" name="editorial_book">
							</div>
						</div>
						<div class="col-md-3">
							<div class="group-form mb-4">
								<label for="category_book">Categoría</label>
								<select class="form-control" name="category_book">
									<?php 

										$list_category = row_list_category();

										while ($row = $list_category->fetch_assoc()) {
											echo '<option value="'.$row['hash_category'].'">'.$row['name_category'].'</option>';
										}

									?>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="group-form mb-4">
								<label for="id_code_book">ID código libro</label>
								<input type="text" name="id_code_book" class="form-control">
							</div>
						</div>
						<div class="col-md-3">
							<div class="group-from mb-4">
								<label for="year_book">Año</label>
								<input type="number" name="year_book" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="group-form mb-4">
								<label for="language_book">Idioma</label>
								<select class="form-control" name="language_book">
									<option value="Español">Español</option>
									<option value="Inglés">Inglés</option>
									<option value="Aleman">Aleman</option>
									<option value="Portugues">Portugues</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="group-form mb-4">
								<label for="page_number_book">Número de páginas</label>
								<input type="number" name="page_number_book" class="form-control">
							</div>
						</div>
						<div class="col-md-4 mb-4">
							<label for="file_pdf_book">Selecciona PDF</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="file_pdf_book" id="file_pdf_book">
								<label class="custom-file-label" for="file_pdf_book">Subir pdf</label>
							</div>
						</div>
						<div class="col-md-12">
							<div class="group-form">
								<label for="review_book">Reseña sobre el libro</label>
								<textarea style="height: 300px;" class="form-control" name="review_book" id="review_book"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="group-form text-center mt-5 pt-2">
								<input type="submit" class="btn_" value="Subir LibroPDF" name="button_save_book">
							</div>
						</div>
					</div>
				</form>
				
			</div>
		</article>
	</section>

	<!-- content-alert -->
	<div class="content-alert-fixed">
		<?php 

		if (!empty($alert)) {
			echo '<div class="alert alert-'.$alert['type'].'">
					<p class="m-0">'.$alert['message'].'</p>
				</div>';
		}

		?>
		
	</div>
	
	<!-- arrow scroll up -->
	<a data-scroll href="#" class="arrow-scroll-up">
		<i class="fa fa-angle-up"></i>
	</a>

	<!-- container category -->
	<?php include 'components/slider_category.php'; ?>

	<!-- footer -->
	<?php include 'components/footer.php' ?>
	
	<!-- scripts -->
	<script src="js/config_owl_carousel.js"></script>
	<script src="js/main_jquery.js"></script>
	<script src="js/main.js"></script>
</body>
</html>