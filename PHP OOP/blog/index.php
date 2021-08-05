<?php
	include 'font_header.php';
	$get_category = $obj->get_cat();
	// $posts = $obj->get_all_post();

	// pagination code
	$num_per_page = 03;

	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page=1;
	}
	// echo $page;
	$start_from = ($page-1)*03;
	// $sql="select * from employees limit $start_from,$num_per_page";
	// $rs_result=mysql_query($sql);
	$posts = $obj->get_all_post($start_from,$num_per_page);


?>

		<!-- BANNER -->
		<section class="banner_sec">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-10 col-lg-8">
						<div class="row">
							<?php
								if($get_category->num_rows > 0){
									while($row_category = $get_category->fetch_object()){
										?>
											<div class="col-12 col-md-4 col-lg-4">
												<a href="">
													<div class="banner_box">
														<i class="<?php echo $row_category->cat_icon; ?>"></i>
														<h3 class="banner_box_h3"><?php echo $row_category->cat_name; ?></h3>
													</div>
												</a>
											</div>
										<?php
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- BANNER -->

		<!-- BODY -->
		<div class="home_body">
			<div class="container">
				<div class="latest_post">
					<div class="latest_post_top">
						<h1 class="latest_post_h1 brdr_line">Latest Blog</h1>
					</div>
					<div class="row">
						<?php
							if($posts->num_rows > 0){
								while($post = $posts->fetch_object()){
									?>
										<div class="col-12 col-md-6 col-lg-4">
											<a href="blog_post.php?id=<?php echo $post->post_id; ?>">
												<div class="home_card">
													<div class="home_card_top">
														<img src="<?php echo 'admin/uploads/posts/'.$post->post_thumbnail; ?>" alt="image">
													</div>
													<div class="home_card_bottom">
														<div class="home_card_bottom_text">
															<ul class="home_card_bottom_text_ul">
																<li>
																	<a href="blog_post.php?id=<?php echo $post->post_id; ?>">Category</a>
																	<span><i class="fas fa-angle-right"></i></span>
																</li>
																<li>
																	<a href="blog_post.php?id=<?php echo $post->post_id; ?>"><?php echo $post->cat_name; ?></a>
																</li>
															</ul>
															<a href="blog_post.php?id=<?php echo $post->post_id; ?>">
																<h2 class="home_card_h2"><?php echo $post->post_title; ?></h2>
															</a>
															<p class="post_p">
																<?php
																	$details = $post->post_body;
																	if(strlen($details) > 300){
																		echo substr($details,0,300).'...';
																	}else{
																		echo $details;
																	}
																?>
															</p>
															<div class="home_card_bottom_tym">
																<div class="home_card_btm_left">
																	<?php
																		if(!empty($post->user_photo)){
																			?>
																			<img src="<?php echo 'admin/uploads/'.$post->user_photo; ?>" alt="">
																			<?php
																		}else{
																			?>
																			<img src="admin/img/profile.jpg" alt="image">
																			<?php	
																		}
																	?>
																</div>
																<div class="home_card_btm_r8">
																<a href="contact_me.html"><p class="author_name"><?php echo $post->user_name; ?></p></a>
																	<ul class="home_card_btm_r8_ul">
																		<li>
																			<?php echo date('M-d-Y h:i A',strtotime($post->post_created_at)); ?>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</a>
										</div>
									<?php
								}
							}
						?>
						
					</div>
				</div>
			</div>

			<!-- PAGINATION -->
			<div class="pagination">
				<?php
					$total_record = $obj->total_data();
					$total_page = ceil($total_record/$num_per_page);
				?>
				<ul class="pagination_ul d-flex">

					<?php

						if($page>1){
							?>
								<li>
									<a href="index.php?page=<?php echo $page-1;?>">Prev</a>
								</li>
							<?php
						}
						
						for($i=1;$i<$total_page;$i++){
							?>
								<li>
									<a class="<?php if($i == $page){echo 'active';} ?>" href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
								</li>
							<?php
						}

						if($i>$page){
							?>
								<li>
									<a href="index.php?page=<?php echo $page+1;?>">Next</a>
								</li>
							<?php
						}

					?>
					
				</ul>
			</div>
			<!-- PAGINATION -->
		</div>
		<!-- BODY -->
<?php
	include 'font_footer.php';
?>


		