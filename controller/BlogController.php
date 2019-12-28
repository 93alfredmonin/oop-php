<?php

class BlogController implements Controller {
    private $model;
    
    public function __construct() {
        include './model/BlogModel.php';
        $this->model = new BlogModel() ;
    }
    public function render() {
        
    }
    public function getPosts() {
       $posts = $this->model ->getPosts();
       var_dump($posts);
        include './view/posts.php';
        
    }
    
     public function getPost() {
          include './view/post.php';
    }
}


