<section class="wrapper-fluid container-category">
	<article class="wrapper text-center">
		<div class="content-category">
			<div class="owl-carousel owl-theme owl-slider-category slider-arrow-bottom">
				<?php 

					// include 'dist/config_list_category.php';
					
					$list_category = row_list_category();

					while ($row = $list_category->fetch_assoc()) {
						echo '<div class="item">
								<a href="view_category.php?category='.$row['hash_category'].'">'.$row['name_category'].'</a>
							</div>';
					}

				?>
			</div>
		</div>
	</article>
</section>

