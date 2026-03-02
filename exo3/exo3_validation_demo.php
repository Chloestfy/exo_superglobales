<form method="get">
    Nom : <input type="text" name="email">
    <button type="submit">Ok</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    if (empty($email)) {
        echo "Erreur : email vide.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Erreur : email invalide.";
    } else {
        echo "Email valide : " . htmlspecialcars($email);
    }
}
?>