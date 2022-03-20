<?php include '../include/head.php' ?>

<!--/banner-->
<?php include '../include/banner.php' ?>

<!--//banner-->
<section class="banner-bottom">
		<!--/blog-->
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="single.html">
									<img src="../../src/images/uploads/<?php echo $post_image ?>" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i><?php echo $post_created ?>
                                        </a>
									</li>									
								</ul>
							</div>
						</div>

						<h3>
							<a href="single.html"> <?php echo $post_title ?> </a>
						</h3>
						<p><?php echo $post_content  ?></p>
					</div>
				</div>

				<!--//left-->
			</div>
		</div>
	</section>
	<!--//main-->


<!-- Footer -->
<?php include '../include/footer.php' ?>