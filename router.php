<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/index.controller.php',
    '/post' => 'controllers/post/post.controller.php',
    '/post/create' => 'controllers/post/post.create.controller.php',
    '/post/edit' => 'controllers/post/post.edit.controller.php',
    '/post/delete' => 'controllers/post/post.delete.controller.php',
    
   ];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}

