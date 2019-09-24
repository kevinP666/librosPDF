<!-- 
	Created by Kevin Parra - LibrosPDF 2019.
-->
<?php include 'dist/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LibrosPDF</title>
	<?php include 'components/head_information.php'; ?>
</head>
<body>
	
	<!-- header -->
	<?php include 'components/header.php'; ?>
	
	<?php include 'components/slider_heading.php' ?>
	
	<!-- container most prominent -->
	<section class="wrapper-fluid container-most-prominent pt-5">
		<article class="wrapper">
			<h2 class="title_">Más destacados</h2>
			<!-- content-slider -->
			<div class="content-slider slider-most-prominent">
				<div class="wrapper-slide">
					<!-- content owl carousel -->
					<div class="owl-carousel owl-slider-most-prominent owl-theme slider-arrow-bottom">
						<?php 

						// Con la funcion RAND() de mysqli hace que los ordene aleatoriamente.
						$select = "SELECT * FROM book ORDER BY RAND() LIMIT 5";
						$result = mysqli_query($conn, $select);

						while ($row = $result->fetch_assoc()) {
							$id = 'id='.$row['id'];
							$title = $row['title'];
							$author = $row['author'];
							$imagen = 'data:image/jpg;base64,'.base64_encode($row['imagen']);
						?>
							<!-- item slider book -->
							<div class="item">
								<div class="card-slider">
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
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-center pt-2 mt-5 pb-5">
				<a href="all_book.php" class="btn_">Ver todos</a>
			</div>
		</article>
	</section>

	<!-- container libroPDF -->
	<section class="wrapper-fluid container-banner-bot">
		<img src="img/img-banner-bot.jpg" alt="">
		<article class="wrapper">
			<div class="col-md-6 m-auto text-center">
				<h2>LibrosPDF</h2>
				<p class="mb-4">Comparte, lee y descargar PDF en librosPDF sin tener que regístrate, en tan solo unos simples pasos. Hazlo ahora.</p>
				<a href="add_book.php" class="btn_">Agregar libroPDF</a>
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