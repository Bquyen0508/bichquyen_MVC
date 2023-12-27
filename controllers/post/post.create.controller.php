<?php
require "models/post.model.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['title']) and !empty($_POST['description'])) {
        createPost($_POST['title'], $_POST['description']);
        header('location: /post');
    }
}

require "views/post/post.create.php";