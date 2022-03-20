<?php

$site_url  = "http://127.0.0.1/blog/views/web/index.php";
$site_title  = "Dreams Blog";

?>
<footer>
	<div class="container">
		<!-- footer -->
		<div class="footer-cpy text-center">
			<div class="footer-social">
				<div class="copyrighttop">
					<ul>
						<li class="mx-3">
							<a class="facebook" href="http://www.facebook.com/sharer.php?u=<?=$site_url?>" target="_blank">
								<i class="fab fa-facebook-f"></i>
								<span>Facebook</span>
							</a>
						</li>
						<li>
							<a class="facebook" href="https://twitter.com/share?url=<?=$site_url?>&text=Simple%20Share%20Buttons&hashtags=simplesharebuttons" target="_blank">
								<i class="fab fa-twitter"></i>
								<span>Twitter</span>
							</a>
						</li>
						<!-- <li class="mx-3">
							<a class="facebook" href="#">
								<i class="fab fa-google-plus-g"></i>
								<span>Google+</span>
							</a>
						</li> -->
						<li>
							<a class="facebook" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
								<i class="fab fa-pinterest-p"></i>
								<span>Pinterest</span>
							</a>
						</li>
					</ul>

				</div>
			</div>
			<div class="w3layouts-agile-copyrightbottom">
				<p>© 2022 Dreams Blog. All Rights Reserved | Design by
					<a>Dreams</a>
				</p>

			</div>
		</div>

		<!-- //footer -->
	</div>
</footer>

<?php if (!(empty($_SESSION)) && !(empty($_SESSION['userID']))) { ?>
	<div class="fixed-bottom" style="left: 20px; bottom: 20px;">
		<a href="create-post.php" class="btn shadow" style="background-color: #01cd74;">
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
				<path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
			</svg>
		</a>
	</div>
<?php }?>

<?php include 'script.php'; ?>

</body>
</html>