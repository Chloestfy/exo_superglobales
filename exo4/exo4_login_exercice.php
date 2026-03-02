<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');

    if (!empty($username)) {
        $_SESSION['user'] = $username;
        header('Location: profil.php');
        exit;
    } else {
        $error = "Le nom d'utilisateur est requis.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

    <h2>Connexion</h2>

    <form method="post">
        <label>Nom d'utilisateur :
            <input type="text" name="username">
        </label>
        <button type="submit">Se connecter</button>
    </form>

    <?php if (!empty($error)): ?>
        <p style="color:red"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

</body>

</html>


<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

echo "Bienvenue, " . htmlspecialchars($_SESSION['user']);
