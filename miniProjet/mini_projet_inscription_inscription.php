<?php
session_start();

$event = $_GET['event'] ?? 'Inconnu';
$errors = [];
$nom = '';
$email = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($nom)) {
        $errors[] = "Le nom est requis.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email invalide.";
    }

    if (strlen($password) < 8) {
        $errors[] = "Le mot de passe doit contenir au moins 8 caractères.";
    }


    if (empty($errors)) {
        $_SESSION['nom'] = $nom;
        $_SESSION['email'] = $email;


        setcookie('last_visit', date('d/m/Y H:i'), time() + 3600);

        header('Location: profil.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>

<body>

    <h1>Inscription à l'événement : <?= htmlspecialchars($event) ?></h1>

    <?php if (!empty($errors)): ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post">
        <label>Nom : <input type="text" name="nom" value="<?= htmlspecialchars($nom) ?>"></label><br><br>
        <label>Email : <input type="email" name="email" value="<?= htmlspecialchars($email) ?>"></label><br><br>
        <label>Mot de passe : <input type="password" name="password"></label><br><br>
        <button type="submit">S'inscrire</button>
    </form>

</body>

</html>