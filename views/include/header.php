<?php

if (isset($_POST['logout']))
{
    session_destroy();
    header('Location: login.php');
}
?>

<header class="shadow-sm fixed-top">
	<div class="top-bar_sub_w3layouts container-fluid">
		<div class="row">
			<div class="col-md-6 logo text-left">
				<a class="navbar-brand" href="index.php">
					Dreams Blog
				</a>
			</div>
			<div class="col-md-6 top-forms text-right mt-lg-3 mt-md-1 mt-0">
				<?php if (!(empty($_SESSION)) && !(empty($_SESSION['userID']))) { ?>
					<span>Welcome Back!</span>
					<span class="mx-lg-4 mx-md-2  mx-1">
						<a href="" class="breadcrumb-item active">
							<?php echo $_SESSION['userName'] ?>
						</a>
					</span>
					<span>
						<form class="d-inline" action="" method="post">
							<button type="submit" name="logout" class="btn me-2" style="background-color: #01cd74;">Logout</button>
						</form>
					</span>
				<?php } else {?>
					<span class="mx-lg-4 mx-md-2  mx-1">
						<a href="login.php">
							<i class="fas fa-lock"></i> Sign In
						</a>
					</span>
					<!-- <span>
						<a href="register.php">
							<i class="far fa-user"></i> Register
						</a>
					</span> -->
				<?php } ?>
			</div>
			
		</div>
	</div>
</header>