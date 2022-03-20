<?php

include '../../class/DB.class.php'; // DB Class
include '../../class/Post.class.php'; //  Post Class 
include '../../class/Category.class.php'; //  Category Class 

$category   = new Category();
$categories = $category->getAll();

$post  = new Post();
$posts = $post->getAll();

if (isset($_POST['create_post']))
{
    $title       = $_POST['title'];
    $content     = $_POST['content'];
    $image       = $_FILES['image'];
    $autor_id    = $_SESSION['userID'];
    $category_id = $_POST['category_id'];

    $post   -> setTitle($title)
            -> setContent($content)
            -> setImage($image)
            -> setAuthorID($autor_id)
            -> setCategoryID($category_id)
            -> createPost();

    header('Location: index.php');

}

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    
    $single  = new Post();

    $post = $single->getPostByID($id);
    $post_title      = $post[0]['title'];
    $post_image      = $post[0]['image'];
    $post_content    = $post[0]['content'];
    $post_created    = $post[0]['created_at'];
}

