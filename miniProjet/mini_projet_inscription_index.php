<?php
$event = $_GET['event'] ?? null;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>

<body>

    <h1>Bienvenue sur le site d'inscription</h1>

    <a href="inscription.php?event=phpday">S'inscrire à l'événement PHP Day</a>

    <?php if ($event): ?>
        <p>Vous allez vous inscrire à <strong><?= htmlspecialchars($event) ?></strong></p>
    <?php endif; ?>

</body>

</html>