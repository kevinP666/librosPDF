<!-- container slider -->
<section class="wrapper-fluid container-slider">
	<article class="wrapper">
		<!-- content slider -->
		<div class="content-slider slider-heading">
			<!-- content owl carousel -->
			<div class="owl-carousel owl-slider-heading owl-theme">
				<?php 

				$select_slider = "SELECT * FROM book ORDER BY id LIMIT 3";
				$result_slider = mysqli_query($conn, $select_slider);

				while ($book_slider = $result_slider->fetch_assoc()) {
					$id = 'id='.$book_slider['id'];
					$title = $book_slider['title'];
					$author = $book_slider['author'];
					$review = $book_slider['review'];
					$imagen = 'data:image/jpg;base64,'.base64_encode($book_slider['imagen']);
				?>
				<div class="item">
					<div class="card-slider">
						<div class="row">
							<div class="col-md-5">
								<div class="imagen-slider-heading">
									<img src="<?php echo $imagen ?>" alt="">
								</div>
							</div>	
							<div class="col-md-7">
								<div class="information-slider-heading text-center">
									<div>
										<h2 class="mb-0">
											<a href="view_book.php?<?php echo $id ?>"><?php echo $title ?></a>
										</h2>
										<p class="text-muted"><?php echo $author ?></p>
										<p class="text-muted"><?php echo $review ?></p>
										<br>
										<a href="view_book.php?<?php echo $id ?>" class="btn_">Ver más detalles</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				}
				?>
			</div>
			<!-- content slider control (arrow) -->
			<div class="slider-control">
				<div class="owl-nav">
					<!-- arrow next -->
				       <div class="arrow customPrevBtn"><i class="fa fa-angle-left"></i></div>
					<!-- arrow prev -->
				       <div class="arrow customNextBtn"><i class="fa fa-angle-right"></i></div>
				   </div>
			</div>
		</div>
	</article>
</section>