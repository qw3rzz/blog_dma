<?php
require_once "posts.php";
require_once "functions.php";
include "header.php";
?>

    <h1>Přehled příspěvků</h1>

    <div class="row mt-4">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4><?= $post['title'] ?></h4>
                        <p><?= shortenText($post['content'], 120) ?></p>
                        <a href="post.php?id=<?= $post['id'] ?>" class="btn btn-primary">Číst více</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php include "footer.php"; ?>