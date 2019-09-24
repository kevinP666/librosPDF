<!-- 
	Created by Kevin Parra - LibrosPDF 2019.
-->
<?php
	include 'dist/config.php';

	$id = $_REQUEST['id'];

	$select = "SELECT * FROM book WHERE id = '$id'";
	$result = mysqli_query($conn, $select);
	$row = $result->fetch_assoc();

	// Information book.
	$id = $row['id'];
	$title = $row['title'];
	$author = $row['author'];
	$imagen = 'data:image/jpg;base64,'.base64_encode($row['imagen']);
	$editorial = $row['editorial'];
	$category = $row['name_category'];
	$hash_category = $row['hash_category'];
	$code_id_book = $row['code_id_book'];
	$year = $row['year'];
	$language = $row['language'];
	$page_number = $row['page_number'];
	$review = $row['review'];
	$route_file_pdf = 'file-book/'.$row['name_pdf'];			

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title ?> detalles - LibrosPDF</title>
	<?php include 'components/head_information.php' ?>
</head>
<body>
	
	<!-- header -->
	<?php include 'components/header.php'; ?>
	
	<section class="wrapper-fluid mt-4 mb-4">
		<article class="wrapper">
			<div class="container-view-book">
				<div class="row">
					<div class="col-md-4">
						<div class="view-book-imagen">
							<img src="<?php echo $imagen ?>" alt="">
							<div class="view-book-information">
								<div class="view-book-detail">
									<p class="title">Editorial</p>
									<p class="text"><?php echo $editorial ?></p>
								</div>
								<div class="view-book-detail">
									<p class="title">Categoria</p>
									<a href="view_category.php?category=<?php echo $hash_category ?>" class="text"><?php echo $category ?></a>
								</div>
								<div class="view-book-detail">
									<p class="title">Año</p>
									<p class="text"><?php echo $year ?></p>
								</div>
								<div class="view-book-detail">
									<p class="title">Idioma</p>
									<p class="text"><?php echo $language ?></p>
								</div>
								<div class="view-book-detail">
									<p class="title">No. Páginas</p>
									<p class="text"><?php echo $page_number ?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="view-book-description mt-5">
							<div class="view-book-heading">
								<div>
									<h2 class="view-book-title"><?php echo $title ?></h2>
									<h4 class="view-book-author"><?php echo $author ?></h4>
								</div>
								<div class="btn__ mt-2">
									<a target="_blank" href="dist/read_pdf.php?id=<?php echo $id ?>" class="btn_">Leer Ahora</a>
									<a download href="<?php echo $route_file_pdf ?>" class="btn_">Descargar LibroPDF</a>
								</div>
							</div>
							<?php if (!empty($review)): ?>
								<div class="view-book-review">
									<h4>Reseña</h4>
									<p class="text-muted"><?php echo $review ?></p>
								</div>
							<?php endif ?>
							<div class="view-book-information-responsive">
								<div class="view-book-detail">
									<p class="title">Editorial</p>
									<p class="text"><?php echo $editorial ?></p>
								</div>
								<div class="view-book-detail">
									<p class="title">Categoria</p>
									<a href="view_category.php?category=<?php echo $hash_category ?>" class="text"><?php echo $category ?></a>
								</div>
								<div class="view-book-detail">
									<p class="title">Año</p>
									<p class="text"><?php echo $year ?></p>
								</div>
								<div class="view-book-detail">
									<p class="title">Idioma</p>
									<p class="text"><?php echo $language ?></p>
								</div>
								<div class="view-book-detail">
									<p class="title">No. Páginas</p>
									<p class="text"><?php echo $page_number ?></p>
								</div>
							</div>
							<div class="content-related mt-5 pt-5">
								<h2 class="title_">LibrosPDF relacionados</h2>

								<div class="owl-carousel owl-theme owl-slider-related slider-arrow-bottom">
									<?php 

									$select_related = "SELECT * FROM book WHERE id != '$id' ORDER BY RAND() LIMIT 5";
									$result_related = mysqli_query($conn, $select_related);

									while ($book_related = $result_related->fetch_assoc()) {
										$id = 'id='.$book_related['id'];
										$title = $book_related['title'];
										$author = $book_related['author'];
										$imagen = 'data:image/jpg;base64,'.base64_encode($book_related['imagen']);
									?>
										<div class="item">
											<a href="view_book.php?<?php echo $id ?>">
												<div class="card-book">
													<div class="card-book-imagen">
														<img src="<?php echo $imagen ?>">
														<!-- effect hover -->
														<div class="effect-hover">
															<a href="view_book.php?<?php echo $id ?>" class="btn_">Ver detalle</a>
														</div>
													</div>
													<div class="card-book-body">
														<a href="view_book.php?<?php echo $id ?>" class="card-book-title"><?php echo $title ?></a>
														<p class="card-book-author"><?php echo $author ?></p>
													</div>
												</div>
											</a>
										</div>
									<?php
									}
									?>
								</div>
								<div class="text-center mt-5 pb-5">
									<a href="all_book.php" class="btn_">Ver todos</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</article>
	</section>
	
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