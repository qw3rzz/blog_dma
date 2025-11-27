<?php
require_once "functions.php";
include "header.php";

$response = handleContactForm();
?>

    <h1>Kontakt</h1>

<?= $response ?>

    <form method="POST" class="mt-4">
        <div class="mb-3">
            <label class="form-label">Jméno</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Zpráva</label>
            <textarea name="message" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Odeslat</button>
    </form>

<?php include "footer.php"; ?>