<?php
	include 'admin/main.php';
	$obj = new Main();
	// pagination code
	$num_per_page = 12;

	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page=1;
	}
	// echo $page;
	$start_from = ($page-1)*12;

	$gallery_image = $obj->get_img($start_from,$num_per_page);
?>
<!DOCTYPE HTML>
<html lang="zxx">
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog</title>
		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<!-- BOOTSTRAP GRID CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
		<!-- COMMON CSS -->
		<link rel="stylesheet" href="assets/css/common.css" />
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/css/main.css" />	
		  <!-- RESPONSIVE CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css" />	

	</head>

	<body>
	<!-- HEADER -->
		<div style="position: relative;">
			<div class="header">
				<div class="menu_all" id="myHeader">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-4 col-md-4 col-lg-4">
								<div class="logo">
									<a href="index.php">
										<div class="logo_img">
											<img src="img/logo.png" alt="image">
										</div>
									</a>
								</div>
							</div>
							<div class="col-8 col-md-8 col-lg-8">
								<div class="menu_right d-flex">
									<div class="menu_right_list">
										<ul class="menu_right_ul d-flex">
											<li class="dis_fx_cntr">
												<a href="index.php">HOME</a>
											</li>
											<li>
												<a href="gallery.php">gallery</a>
											</li>
											<li>
												<a href="about_us.html">about</a>
											</li>
											
											<li>
												<a href="contact.html">CONTACT</a>
											</li>
											<li>
												<a href="contact_me.html">author</a>
											</li>
										</ul>
									</div>
									<div class="menu_srch d-flex">
										<i class="fas fa-search search_btn"></i>
										<!-- SEARCH INPUT -->
										<div class="header_serch dis_none">
											<div class="header_serch_input">
												<input type="" name="" placeholder="Search">
											</div>
											<div class="header_serch_i">
												<i class="fas fa-search"></i>
											</div>
										</div>
										<!-- SEARCH INPUT -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- HEADER -->

		<!-- BANNER -->
		<div class="blog_banner">
			<div class="container">
				<div class="blog_banner_info">
					<div class="blog_banner_info_title pad_b20">
						<h2>Gallery</h2>
					</div>
					<div class="blog_title_btm">
						<ul class="blog_title_btm_ul dis_flx">
							<li>
								<a href="">
									Home<i class="fa fa-angle-right"></i>
								</a>
							</li>
							<li>
								<a href="">
									Blog
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- BANNER -->

		<!-- BODY -->
		<div class="gallery_page">
			<div class="container">
				<div class="row">
						<!-- CARD -->
						<?php 
							if($gallery_image->num_rows > 0){
								while($all_image = $gallery_image->fetch_object()){
									?>
										<div class="col-12 col-md-4 col-lg-4">
											<div class="gallery_card_main">
												<div class="gallery_card">
													<a href="<?php echo 'admin/uploads/gallery/'.$all_image->gal_image;?>"><img src="<?php echo 'admin/uploads/gallery/'.$all_image->gal_image;?>"></a>
												</div>
											</div>
										</div>
									<?php
								}
							}
						?>
					<!-- CARD -->
				</div>
			</div>
			<!-- PAGINATION -->
		<div class="pagination">
			<?php
				$total_image = $obj->total_img();
				$total_page = ceil($total_image/$num_per_page);
			?>
			<ul class="pagination_ul d-flex">

				<?php

					if($page>1){
						?>
							<li>
								<a href="gallery.php?page=<?php echo $page-1;?>">Prev</a>
							</li>
						<?php
					}
					
					for($i=1;$i<$total_page;$i++){
						?>
							<li>
								<a class="<?php if($i == $page){echo 'active';} ?>" href="gallery.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
							</li>
						<?php
					}

					if($i>$page){
						?>
							<li>
								<a href="gallery.php?page=<?php echo $page+1;?>">Next</a>
							</li>
						<?php
					}

				?>
				
			</ul>
		</div>
		<!-- PAGINATION -->
		</div>
		<!-- BODY -->

		

	
		<!-- FOOTER -->
		<div class="footer_section">
			<div class="footer_section_social">
				<ul class="footer_section_social_ul">
					   <li>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                        </li>

                        <li>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </li>

                        <li>
                            <a href=""><i class="fab fa-twitter"></i></a>
                        </li>

                        <li>
                            <a href=""><i class="fab fa-google-plus-g"></i></a>
                        </li>
				</ul>
			</div>
			<div class="footer_section_mnu">
				<ul class="footer_section_ul">
					<li>
						<a href="home.html">Home</a>
					</li>
					<li>
						<a href="gallery.html">Gallery</a>
					</li>
					<li>
						<a href="faq.html">FAQ</a>
					</li>
					<li>
						<a href="about_us.html">About</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="footer_copy_right">
			<p>©2019 Appifylab. All rights reserved</p>
		</div>
		<!-- FOOTER -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/main.js"></script>
	
    
	</body>
</html>
