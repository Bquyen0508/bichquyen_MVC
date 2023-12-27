<?php
require "models/post.model.php";
$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id)){
    deletePost($id);
}
header('Location: /post');
