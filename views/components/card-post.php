<div class="col-lg-4 card">
    <a href="single.html">
        <img src="../../src/images/uploads/<?php echo $post['image'] ?>" class="card-img-top img-fluid" alt="">
    </a>
    <div class="card-body">
        <ul class="blog-icons my-4">
            <li>
                <a href="#">
                    <i class="far fa-calendar-alt"></i> <?php echo $post['created_at'] ?>
                </a>
            </li>
        </ul>
        <h5 class="card-title">
            <a href="single.html"><?php echo $post['title'] ?></a>
        </h5>
        <p class="card-text mb-3"><?php echo $post['content'] ?></p>
        <a href="single-post.php?id=<?php echo $post['id'] ?>" class="btn btn-primary read-m">Read More</a>
    </div>
</div>