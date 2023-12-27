<?php

$heading = "Post Page";

require "partials/head.php"; 
require "partials/nav.php" ;
?>

  <a href="post/create" class="btn btn-primary mt-2">Add Post</a>
  <main>
    <div class="p-3">
    <?php foreach($posts as $post): ?>
      <li>
        <?= $post['title'] ?> |  
        <span><?= $post['description'] ?></span> | 
        <a href="post/delete?id=<?= $post['id'] ?>" >Delete</a> |
        <a href="post/edit?id=<?= $post['id'] ?>">Edit</a>
      </li>

    <?php endforeach; ?>
    </div>
  </main>

<?php require "partials/footer.php" ?>