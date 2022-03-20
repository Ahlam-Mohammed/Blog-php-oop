<?php include '../include/head.php' ?>

<?php include '../../php/user.php'; ?>

<!--/main-->
<section class="main-content-w3layouts-agileits">
    <?php if (isset($user->msg)) {?>
        <div class="alert alert-<?php if(array_keys($user->msg)[0] == 'success') echo 'success'; else echo 'danger' ?>"  role="alert">
            <?php print_r(array_values($user->msg)[0]) ?>
        </div>
    <?php } ?>
    <div class="container">
        <h3 class="tittle mt-4">Sign In Now</h3>
        <div class="row inner-sec">
            <div class="login p-5 bg-light mx-auto w-50 shadow ">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1 mb-2">Email address</label>
                        <input name="email" type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="" class="form-control <?php echo (!empty($user->email_err)) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $user->email_err;?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1 mb-2">Password</label>
                        <input name="password" type="password" id="exampleInputPassword1" placeholder="" required="" class="form-control <?php echo (!empty($user->password_err)) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $user->password_err;?></span>
                    </div>
                    <button name="login" type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                    <p><a href="register.php"> Don't have an account?</a></p>
                </form>
            </div>
        </div>
    </div>
</section>
<?php 

print_r($_SESSION);

?>  
<!-- Footer -->
<?php include '../include/footer.php' ?>