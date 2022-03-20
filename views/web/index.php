<?php include '../include/head.php' ?>

<!--/banner-->
<?php include '../include/banner.php' ?>

<!--/main-->
<section class="main-content-w3layouts-agileits">
	<div class="container">
		<h3 class="tittle">Blog Posts</h3>
			<div class="inner-sec">
			<div class="left-blog-info-w3layouts-agileits text-left">
				<div class="row">
					<?php foreach ($posts as $post) {
						include '../components/card-post.php';
					} ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Footer -->
<?php include '../include/footer.php' ?>