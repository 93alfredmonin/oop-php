<?php

class BlogModel {

    private $posts = [];

    public function __construct() {
        $this->posts = [
            ['id' => 1, 'title' => 'post 1 title'],
            ['id' => 2, 'title' => 'post 2 title'],
            ['id' => 3, 'title' => 'post 3 title'],
            ['id' => 4, 'title' => 'post 4 title'],
        ];
    }

    public function getPosts() {


        return $this->posts;
    }

    public function getPost($id) {
        foreach ($this->posts as $post) {
            if ($post['id'] === (+$id)) {
                return $post;
            }
        }
    }

}
