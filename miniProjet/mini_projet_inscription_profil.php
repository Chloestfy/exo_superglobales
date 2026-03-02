<?php
session_start();

if (!isset($_SESSION['nom'], $_SESSION['email'])) {
    header('Location: index.php');
    exit;
}

$nom = $_SESSION['nom'];
$email = $_SESSION['email'];
$lastVisit = $_COOKIE['last_visit'] ?? null;

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Profil</title>
</head>

<body>

    <h1>Profil utilisateur</h1>

    <p><strong>Nom :</strong> <?= htmlspecialchars($nom) ?></p>
    <p><strong>Email :</strong> <?= htmlspecialchars($email) ?></p>

    <?php if ($lastVisit): ?>
        <p><strong>Dernière visite :</strong> <?= htmlspecialchars($lastVisit) ?></p>
    <?php else: ?>
        <p>C'est votre première visite !</p>
    <?php endif; ?>

    <form method="get">
        <button type="submit" name="logout">Se déconnecter</button>
    </form>

</body>

</html>