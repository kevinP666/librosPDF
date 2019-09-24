<div class="content-bg" id="content-bg"></div>
<header class="wrapper-fluid" id="header_">
	<article class="wrapper flex-between">
		<!-- logo -->
		<a class="logo" href="index.php">LibrosPDF</a>
		<!-- icono menú responsive -->
		<i class="fa fa-bars icon-menu" id="icon-menu"></i>
		<!-- menú -->
		<nav id="navbar_responsive">
			<ul>
				<li>
					<a href="index.php">inicio</a>
				</li>
				<li class="option-sub">
					<!-- menú desktop -->
					<div class="option-desktop">
						<a href="#!">
							Categorias <span><i class="fa fa-angle-down"></i></span>
						</a>	
						<!-- sub menú -->
						<div class="content-sub-option" id="content-sub-option">
							<?php 

							
								$list_category = row_list_category();

								while ($row = $list_category->fetch_assoc()) {
									echo '<a href="view_category.php?category='.$row['hash_category'].'">'.$row['name_category'].'</a>';
	;							}

							?>
						</div>
					</div>
					<!-- sub menú responsive -->
					<div class="option-responsive">
						<a href="#!" id="event_click_js_sub_menu">
							Categorias <span><i class="fa fa-angle-down"></i></span>
						</a>
						<div class="sub-menu-responsive" id="sub-menu-responsive">	
							<?php 

							
								$list_category = row_list_category();

								while ($row = $list_category->fetch_assoc()) {
									echo '<a href="view_category.php?category='.$row['hash_category'].'">'.$row['name_category'].'</a>';
	;							}

							?>
						</div>	
					</div>
					
				</li>
				<li>
					<a href="all_book.php">LibrosPDF</a>
				</li>
				<li>
					<a href="add_book.php">Agregar libro</a>
				</li>
			</ul>
		</nav>
	</article>
</header>