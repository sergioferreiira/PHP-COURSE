<?php
include_once("templates-project/header.php");

?>



<body>
 <main>
  <div id="main-title">
   <h1>Blog Codar</h1>
   <p>O SEU BLOG DE PROGRAMAÇÃO</p>
  </div>
  <div id="posts-container">
   <?php foreach ($posts as $post): ?>
    <div class="post-box">
     <img src="img/<?= $post["img"] ?>" alt="<?= $post["title"] ?>">
     <h2 class="post-title">
      <a href="post.php?id=<?= $post["id"] ?>"><?= $post["title"] ?></a>
     </h2>
     <p class="post-description"><?= $post["description"] ?></p>
     <?php foreach ($post["tags"] as $tag): ?>
      <a href="#" class="post-tags"><?= $tag ?></a>
     <?php endforeach; ?>
    </div>
   <?php endforeach; ?>
  </div>

 </main>


 <?php
 include_once("templates-project/footer.php");
 ?>