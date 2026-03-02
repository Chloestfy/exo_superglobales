<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

setcookie('last_visit', date('d/m/Y H:i'), time() + 3600);

$username = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Profil</title>
</head>

<body>

    <h2>Bonjour <?= htmlspecialchars($username) ?></h2>

    <?php if (isset($_COOKIE['last_visit'])): ?>
        <p>Dernière visite : <?= htmlspecialchars($_COOKIE['last_visit']) ?></p>
    <?php else: ?>
        <p>C'est votre première visite !</p>
    <?php endif; ?>

    <a href="logout.php">Se déconnecter</a>

</body>

</html>

<?php
session_start();
$_SESSION['user'] = 'Jean';


if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

setcookie('last_visit', date('d/m/Y H:i'), time() + 3600);

$username = $_SESSION['user'];
