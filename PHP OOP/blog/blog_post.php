<?php
	include 'font_header.php';
	$get_category = $obj->get_cat();
	if(isset($_GET['id'])){
		$post_id = $_GET['id'];
		$posts = $obj->get_single_post($post_id);

		if($posts->num_rows > 0){
			while($post = $posts->fetch_object()){
				$category_name = $post->cat_name;
				$cat_id = $post->cat_id;
				$title = $post->post_title;
				$author_name = $post->user_name;
				$time = $post->post_created_at;
				$post_thumbnail = $post->post_thumbnail;
				$author_photo = $post->user_photo;
				$author_about = $post->user_about;
				$post_description = $post->post_body;
				
			}
		}

		$related_post = $obj->related($cat_id);

	}else{
		header('location:index.php');
	}
	// $posts = $obj->get_all_post();

?>

		<!-- BANNER -->
		<div class="blog_banner">
			
		</div>
		<!-- BANNER -->

		<!-- BODY -->
		<div class="blog_post_sec_all">
			<div class="container">
				<div class="row">
					<div class="cl-12 col-md-12 col-lg-9">
						<div class="blog_post_left">
							<div class="blog_post_sec">
								<div class="blog_post_top">
									<ul class="blog_post_top_ul">
										<li>
											<a href="blog.html"><?php echo $category_name; ?></a>
										</li>
										<li><?php echo date('M-d-Y h:i A',strtotime($time)); ?></li>
									</ul>
								</div>
								<div class="blog_post">
									<h1 class="blog_post_h1"><?php echo $title; ?></h1>
									<div class="post_author_sec">
										<div class="post_author_left">
											<div class="post_author_img">
												<?php
													if(!empty($author_photo)){
														?>
														<img src="<?php echo 'admin/uploads/'.$author_photo; ?>" alt="image">
														<?php
													}else{
														?>
															<img src="admin/img/profile.jpg" class="img-fluid" alt="Avatar">
														<?php
													}
												?>
											</div>
											<div class="post_author_info">
											<a href="contact_me.html"><h4 class="post_author_title"><?php echo $author_name; ?></h4></a>
												
													<?php
														if(!empty($author_about)){
															?>
																<P><?php echo $author_about; ?></P>
															<?php
														}else{
															?>
																<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum eos ex dignissimos maxime doloremque vero porro voluptas odit doloribus laborum!</p>
															<?php
														}
													?>
													
												
											</div>
										</div>
										<div class="post_author_r8">
											<i class="fas fa-share-alt"></i>
										</div>
									</div>
									<p class="blog_post_text">
										<img class="img-fluid" src="<?php echo 'admin/uploads/posts/'.$post_thumbnail; ?>" alt="Post Thumbnail">
									</p>
									<p class="blog_post_text">
										<?php echo $post_description; ?>
									</p>
									
									<div class="riview_post">
										<ul class="riview_post_ul">
											<li><i class="far fa-thumbs-up"></i>122 Like</li>
											<li><i class="far fa-comments"></i>10 Comment</li>
											<li><i class="far fa-share-square"></i>4 Share</li>
										</ul>
									</div>	
								</div>	
							</div>
							
							<div class="post_dtls_cmnt_sec mar_t20">
								<h2 class="post_dtls_title2 pad_b20">Comments</h2>
								<div class="fb-comments" data-href="http://localhost/practice-php/PHP%20OOP/blog/blog_post.php?id=<?php echo $_GET['id'];?>" data-width="" data-numposts="5"></div>
							</div>

						
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-3">
						<div class="blog_post_r8">
								<h4 class="trnd_artcl_h4">RELATED ARTICLES</h4>
							<div class="blog_post_r8_all">
								<!-- iteam -->
								<?php
									if($related_post->num_rows > 0){
										while($related_cat = $related_post->fetch_object()){
											if($related_cat->post_id != $post_id){
												?>
													<div class="blog_post_r8_item">
														<div class="blog_post_item_lft">
															<img src="<?php echo 'admin/uploads/posts/'.$related_cat->post_thumbnail ?>" alt="image">
														</div>
														<div class="blog_post_item_r8">
															<a href="blog_post.php?id=<?php echo $related_cat->post_id; ?>">
																<h4 class="blog_post_item_r8_h4">
																	<?php echo $related_cat->post_title ?>
																</h4>
															</a>
															<a href=""><p class="author_name2"></p></a>
														</div>
													</div>
												<?php
												
											}
										}
									}
								?>
								<!-- iteam -->
							</div>
							<div class="course_price mar_t60">
								<div class="course_price_top">
									<p>Share this post</p>
								</div>
								<div class="course_price_main" style="padding: 30px 0px 30px 17px">
									<ul class="share_social_ul dis_flx">
										<li>
											<a class="fb" href="">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li>
											<a class="google" href="">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a class="instgrm" href="">
												<i class="fab fa-instagram"></i>
											</a>
										</li>
										<li>
											<a class="twtr" href="">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a class="skpye" href="">
												<i class="fab fa-skype"></i>
											</a>
										</li>
										<li>
											<a class="utube" href="">
												<i class="fab fa-youtube"></i>
											</a>
										</li>
								<!-- 		<li>
											<a class="lnkdn" href="">
												<i class="fab fa-linkedin-in"></i>
											</a>
										</li>
										<li>
											<a class="pinstr" href="">
												<i class="fab fa-pinterest"></i>
											</a>
										</li> -->
									</ul>
								</div>
							</div>
							<div class="post_tags">
								<h3 class="post_tags_h3">Popular Category</h3>
								<ul class="post_tags_ul">
									<?php
										if($get_category->num_rows > 0){
											while($category = $get_category->fetch_object()){
												?>
													<li>
														<a href="cat_wise_post.php?id=<?php echo $category->cat_id; ?>"><?php echo $category->cat_name; ?></a>
													</li>
												<?php
											}
										}
									?>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- BODY -->

	
<?php
	include 'font_footer.php';
?>
