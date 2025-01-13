<?php
include_once("templates-project/header.php");

if (isset($_GET["id"])) {
    $postId = $_GET["id"];
    $currentPost;


    foreach ($posts as $post) {
        if ($post["id"] == $postId) {
            $currentPost = $post;
        }
    }
}
?>



<main id="main-post-container">
    <div id="post-container">
        <div id="div-container">
            <h1 id="post-title"><?= $currentPost["title"] ?></h1>
            <p id="post-description"><?= $currentPost["description"] ?></p>
            <img src="img/<?= $currentPost["img"] ?>" alt="<?= $currentPost["description"] ?>">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum numquam beatae, deserunt eos, veniam
                assumenda
                tempora odio voluptates excepturi ullam magnam illo? Iure facere quas provident dignissimos placeat
                accusamus
                esse.Lorem
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam autem, similique voluptates unde,
                deserunt
                dolor provident sit libero minima commodi repellat aut quam ipsam dolore! Incidunt voluptatem iste
                voluptate
                asperiores?
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat, officia voluptatem? Maxime
                perferendis
                explicabo ab non error dignissimos placeat dolorum nisi. Sequi ut ullam ipsam atque necessitatibus
                repudiandae
                voluptates accusamus.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio sunt vitae nihil reiciendis est,
                deleniti
                error, asperiores magni deserunt excepturi, cum quam. Illum nulla sequi aut ea nihil aliquam architecto!
                lorem*5
            </p>
        </div>
        <aside id="nav-container">
            <h3 class="subtitles">Tags</h3>
            <ul class="list-side">
                <?php foreach ($currentPost["tags"] as $post): ?>

                    <a href="#">
                        <li class="list-itens"><?= $post ?></li>
                    </a>

                <?php endforeach; ?>
            </ul>
            <h3 class="subtitles">Categorias</h3>

            <ul class="list-side">
                <?php foreach ($categories as $category): ?>

                    <a href="#">
                        <li class="list-itens"><?= $category ?></li>
                    </a>

                <?php endforeach; ?>
            </ul>

        </aside>
    </div>

</main>


<?php
include_once("templates-project/footer.php");
?>