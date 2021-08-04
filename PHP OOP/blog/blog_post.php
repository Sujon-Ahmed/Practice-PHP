<?php
	include 'font_header.php';
	if(isset($_GET['id'])){
		$post_id = $_GET['id'];
		$posts = $obj->get_single_post($post_id);

		if($posts->num_rows > 0){
			while($post = $posts->fetch_object()){
				$category_name = $post->cat_name;
				$title = $post->post_title;
				$author_name = $post->user_name;
				$time = $post->post_created_at;
				$post_thumbnail = $post->post_thumbnail;
				$author_photo = $post->user_photo;
				$author_about = $post->user_about;
				$post_description = $post->post_body;
				
			}
		}

	}else{
		header('location:index.php');
	}
	$posts = $obj->get_all_post();

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
								<!-- comment -->
								<div class="cmnt_box_all">
									<div class="cmnt_box_top dis_flx">
										<div class="cmnt_box_top_left d-flex">
											<div class="cmnt_img mar_r15">
												<img src="img/girl-cmnt.jpg" alt="image">
											</div>
											<div class="cmnnt_name">
												<div class="cmnt_name_left">
													<h4 class="tchr_nam mar_b10">james smith</h4>
												</div>
												<div class="cmnt_name_right">
													<p class="cmnt_name_right_p">05 Nov 2019 AT 12:00 AM</p>
												</div>
											</div>
										</div>
															
									</div>

									<div class="cmnnt_p pad_t10">
										<p>
											I recently completed another course from the 365 team "Data Science Boot Camp" where I was able to review my college course work taken many years ago in statistics along with an overview of programming languages (Python) I use regularly. 
										</p>
										<p class="post_reply mar_t5">Reply</p>
									</div>
								</div>
								<!-- comment -->

								<!-- reply -->
								<div class="cmnt_box_all reply_sec">
									<div class="cmnt_box_top dis_flx">
										<div class="cmnt_box_top_left d-flex">
											<div class="cmnt_img mar_r15">
												<img src="img/girl2-cmnt.jpg" alt="image">
											</div>
											<div class="cmnnt_name">
												<div class="cmnt_name_left dis_fx_cntr">
													<h4 class="tchr_nam mar_b10">Liam Dawson</h4>	
												</div>
												<div class="cmnt_name_right">
													<p class="cmnt_name_right_p">06 Nov 2019 AT 11:23 PM</p>
												</div>
											</div>
										</div>
															
									</div>

									<div class="cmnnt_p pad_t10">
										<p>
											Great course. Excellent introduction. Pretty fast paced. And while I was new to the field I had to do some exploration next to the explanations provided within the course.
										</p>
										<p class="post_reply mar_t5">Reply</p>
									</div>
								</div>
								<div class="cmnt_box_all reply_sec">
									<div class="cmnt_box_top d-flex">
										<div class="cmnt_box_top_left d-flex">
											<div class="cmnt_img mar_r15">
												<img src="img/girl3-cmnt.jpg" alt="image">
											</div>
											<div class="cmnnt_name">
												<div class="cmnt_name_left dis_fx_cntr">
													<h4 class="tchr_nam mar_b10">Jake Ball</h4>
													<div class="cmnt_name_left_rating">
													</div>	
												</div>
												<div class="cmnt_name_right">
													<p class="cmnt_name_right_p">07 Nov 2019 AT 05:23 AM</p>
												</div>
											</div>
										</div>
															
									</div>

									<div class="cmnnt_p pad_t10">
										<p>
											Great to understand the mechanics, mathematics and also statistics in back of BI. I really liked it, and the exercises are great to confirm the knowledge.
										</p>
										<p class="post_reply mar_t5">Reply</p>
									</div>
								</div>
								<!-- reply -->

								<!-- comment -->
								<div class="cmnt_box_all">
									<div class="cmnt_box_top dis_flx">
										<div class="cmnt_box_top_left d-flex">
											<div class="cmnt_img mar_r15">
												<img src="img/girl4-cmnt.jpg" alt="image">
											</div>
											<div class="cmnnt_name">
												<div class="cmnt_name_left">
													<h4 class="tchr_nam mar_b10">Olly Stone</h4>
												</div>
												<div class="cmnt_name_right">
													<p class="cmnt_name_right_p">11 Nov 2019 AT 09:12 AM</p>
												</div>
											</div>
										</div>
															
									</div>

									<div class="cmnnt_p pad_t10">
										<p>
											It was a decent match, I hate to say this because it was already very long but honestly it probably should have been 1 - 3 hours longer to include more explanations of SQL/MySQL, Python and Tableau.
										</p>
										<p class="post_reply mar_t5">Reply</p>
									</div>
								</div>
								<!-- comment -->

								<!-- iteam -->
								<div class="cmnt_box_all reply_sec">
									<div class="cmnt_box_top dis_flx">
										<div class="cmnt_box_top_left d-flex">
											<div class="cmnt_img mar_r15">
												<img src="img/girl2-cmnt.jpg" alt="image">
											</div>
											<div class="cmnnt_name">
												<div class="cmnt_name_left">
													<h4 class="tchr_nam mar_b10">Jofra Archer</h4>
												</div>
												<div class="cmnt_name_right">
													<p class="cmnt_name_right_p">11 Dec 2019 AT 07:45 AM</p>
												</div>
											</div>
										</div>
															
									</div>

									<div class="cmnnt_p pad_t10">
										<p>
											I am on 50% of the course. So far I am very happy about the course. very succinct, practical and straight to the point. I am looking forward to complete this course so I can move onto data science
										</p>
										<p class="post_reply mar_t5">Reply</p>
									</div>
								</div>
								<!-- iteam -->
							</div>

						
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-3">
						<div class="blog_post_r8">
								<h4 class="trnd_artcl_h4">TRENDING ARTICLES</h4>
							<div class="blog_post_r8_all">
								<!-- iteam -->
								<div class="blog_post_r8_item">
									<div class="blog_post_item_lft">
										<img src="img/man3.jpg" alt="image">
									</div>
									<div class="blog_post_item_r8">
										<a href="">
											<h4 class="blog_post_item_r8_h4">
												The Upwork 100: 3 Things You May Have Missed
											</h4>
										</a>
										<a href=""><p class="author_name2">-Amy Sept</p></a>
									</div>
								</div>
								<!-- iteam -->

									<!-- iteam -->
								<div class="blog_post_r8_item">
									<div class="blog_post_item_lft">
										<img src="img/man2.jpg" alt="image">
									</div>
									<div class="blog_post_item_r8">
										<a href="">
											<h4 class="blog_post_item_r8_h4">
												The Upwork 100: 3 Things You May Have Missed
											</h4>
										</a>
										<a href=""><p class="author_name2">-Amy Sept</p></a>
									</div>
								</div>
								<!-- iteam -->

									<!-- iteam -->
								<div class="blog_post_r8_item">
									<div class="blog_post_item_lft">
										<img src="img/man3.jpg" alt="image">
									</div>
									<div class="blog_post_item_r8">
										<a href="">
											<h4 class="blog_post_item_r8_h4">
												The Upwork 100: 3 Things You May Have Missed
											</h4>
										</a>
										<a href=""><p class="author_name2">-Amy Sept</p></a>
									</div>
								</div>
								<!-- iteam -->

									<!-- iteam -->
								<div class="blog_post_r8_item">
									<div class="blog_post_item_lft">
										<img src="img/man4.jpg" alt="image">
									</div>
									<div class="blog_post_item_r8">
										<a href="">
											<h4 class="blog_post_item_r8_h4">
												The Upwork 100: 3 Things You May Have Missed
											</h4>
										</a>
										<a href=""><p class="author_name2">-Amy Sept</p></a>
									</div>
								</div>
								<!-- iteam -->

									<!-- iteam -->
								<div class="blog_post_r8_item">
									<div class="blog_post_item_lft">
										<img src="img/man3.jpg" alt="image">
									</div>
									<div class="blog_post_item_r8">
										<a href="">
											<h4 class="blog_post_item_r8_h4">
												The Upwork 100: 3 Things You May Have Missed
											</h4>
										</a>
										<a href=""><p class="author_name2">-Amy Sept</p></a>
									</div>
								</div>
								<!-- iteam -->

									<!-- iteam -->
								<div class="blog_post_r8_item">
									<div class="blog_post_item_lft">
										<img src="img/man4.jpg" alt="image">
									</div>
									<div class="blog_post_item_r8">
										<a href="">
											<h4 class="blog_post_item_r8_h4">
												The Upwork 100: 3 Things You May Have Missed
											</h4>
										</a>
										<a href=""><p class="author_name2">-Amy Sept</p></a>
									</div>
								</div>
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
								<h3 class="post_tags_h3">Popular Tags</h3>
								<ul class="post_tags_ul">
									<li>
										<a href="">Design</a>
									</li>
									<li>
										<a href="">UI/UX</a>
									</li>
									<li>
										<a href="">Database</a>
									</li>
									<li>
										<a href="">PHP</a>
									</li>
									<li>
										<a href="">Lareval</a>
									</li>
									<li>
										<a href="">UI/UX</a>
									</li>
									<li>
										<a href="">Design</a>
									</li>
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
