<?php include '../include/head.php' ?>

<!--/main-->
<section class="main-content-w3layouts-agileits">
    <div class="container">
        <h3 class="tittle">Create Post</h3>
        <div class="row inner-sec">
            <div class="login p-5 bg-light mx-auto mw-100">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1 mb-2">Post Title</label>
                        <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                    </div>
                    <select name="category_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected disabled>Select Category</option>
                        <?php foreach ($categories as $category) { ?>
                            <option value="<?php echo $category['id'] ?>"> <?php echo $category['name'] ?> </option>
                        <?php } ?>
                    </select>
                    <div class="form-group">
                        <label for="exampleInputPassword1 mb-2">Post Image</label>
                        <input name="image" type="file" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1 mb-2">Post Content</label>
                        <textarea name="content" type="text" class="form-control" id="exampleInputPassword1" placeholder="" required=""></textarea>
                    </div>
                    <button type="submit" name="create_post" class="btn btn-primary submit mb-4">publish</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include '../include/footer.php' ?>