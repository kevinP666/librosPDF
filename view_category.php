<!-- 
	Created by Kevin Parra - LibrosPDF 2019.
-->
<?php 

	include 'dist/config.php';

	$category = $_REQUEST['category'];

	$select = "SELECT * FROM category WHERE hash_category = '$category'";
	$result = mysqli_query($conn, $select);
	$row_category = $result->fetch_assoc();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Categorias - LibrosPDF</title>
	<?php include 'components/head_information.php' ?>
</head>
<body>
	
	<!-- header -->
	<?php include 'components/header.php'; ?>
	
	<section class="wrapper-fluid mt-3 pt-5">
		<article class="wrapper">
			<h2 class="title_">Categoría de <?php echo $row_category['name_category'] ?></h2>
			<div class="row">
				<?php 

				$select = "SELECT * FROM book WHERE hash_category = '$category' ORDER BY id DESC";
				$result = mysqli_query($conn, $select);

				while ($row = $result->fetch_assoc()) {
					$id = 'id='.$row['id'];
					$hash_category = $row['hash_category'];
					$name_category = $row['name_category'];
					$title = $row['title'];
					$author = $row['author'];
					$imagen = 'data:image/jpg;base64,'.base64_encode($row['imagen']);

				?>
					<div class="col-md-3 mb-5">
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