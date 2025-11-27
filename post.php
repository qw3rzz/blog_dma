<?php
require_once "posts.php";
require_once "functions.php";
include "header.php";

$id = $_GET['id'] ?? null;
$post = getPostById($posts, $id);
?>

<?php if ($post): ?>
    <h1><?= $post['title'] ?></h1>
    <p class="mt-3"><?= $post['content'] ?></p>

    <a href="index.php" class="btn btn-secondary mt-4">← Zpět na přehled</a>

<?php else: ?>
    <div class="alert alert-danger">Příspěvek nenalezen.</div>
<?php endif; ?>

<?php include "footer.php"; ?>