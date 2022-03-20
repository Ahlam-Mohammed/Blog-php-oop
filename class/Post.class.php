<?php

include 'Upload.trait.php';

class Post {

    use Upload;

    private $title;
    private $content;
    private $image;
    private $author_id;
    private $category_id;

    private $conn;

    public function __construct()
    {
        $this->conn = new DB();
    }

    public function createPost()
    {
        $this->conn->table('posts')->create(
        [
            'title'       => $this->title,
            'content'     => $this->content,
            'image'       => $this->image,
            'author_id'   => $this->author_id,
            'category_id' => $this->category_id,
            'created_at'  => date("Y/m/d")
        ]);
    }

    public function getAll()
    {
        $this->conn->table('posts')->get();
        return $this->conn->result;
    }

    public function getPostByID($id)
    {
        $this->conn->table('posts')->where('id', '=', $id)->get();
        return $this->conn->result;
    }

    public function setTitle($title):Post
    {
        $this->title = $title;
        return $this;
    }

    public function setContent($content):Post
    {
        $this->content = $content;
        return $this;
    }

    public function setImage($image):Post
    {        
        $this->image =$this->storeImag($image);
        return $this;
    }

    public function setAuthorID($id):Post
    {
        $this->author_id = $id;
        return $this;
    }

    public function setCategoryID($id):Post
    {
        $this->category_id = $id;
        return $this;
    }

}