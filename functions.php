<?php

function shortenText($text, $limit = 100) {
    return strlen($text) > $limit
        ? substr($text, 0, $limit) . "..."
        : $text;
}

function getPostById($posts, $id) {
    foreach ($posts as $post) {
        if ($post['id'] == $id) {
            return $post;
        }
    }
    return null;
}

function handleContactForm() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $msg = htmlspecialchars($_POST['message']);

        return "<div class='alert alert-success'>
                    <h4>Formulář odeslán</h4>
                    <p><strong>Jméno:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Zpráva:</strong> $msg</p>
                </div>";
    }
    return "";
}