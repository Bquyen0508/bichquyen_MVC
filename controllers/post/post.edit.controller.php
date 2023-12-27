<?php
require "models/post.model.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['title']) and !empty($_POST['description'])) {
        updatePost($_POST['title'], $_POST['description'], $_POST['id']);
    }
    header('location: /post');
}
require "views/post/post.edit.php";