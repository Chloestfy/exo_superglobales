<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire GET et POST</title>
</head>

<body>

    <h2>Formulaire version GET</h2>
    <form method="get" action="">
        Nom : <input type="text" name="nom_get" required>
        Email : <input type="email" name="email_get" required>
        <button type="submit">Envoyer GET</button>
    </form>

    <?php
    if (!empty($_GET['nom_get']) && !empty($_GET['email_get'])) {
        echo "<p>GET - Bonjour " . htmlspecialchars($_GET['nom_get']) . ", votre email est " . htmlspecialchars($_GET['email_get']) . ".</p>";
    }
    ?>

    <hr>

    <h2>Formulaire version POST</h2>
    <form method="post" action="">
        Nom : <input type="text" name="nom_post" required>
        Email : <input type="email" name="email_post" required>
        <button type="submit">Envoyer POST</button>
    </form>

    <?php
    if (!empty($_POST['nom_post']) && !empty($_POST['email_post'])) {
        echo "<p>POST - Bonjour " . htmlspecialchars($_POST['nom_post']) . ", votre email est " . htmlspecialchars($_POST['email_post']) . ".</p>";
    }
    ?>

    <hr>

    <h3>Différences entre GET et POST</h3>
    <ul>
        <li><strong>GET</strong> : les données sont visibles dans l’URL (exemple : <code>?nom_get=Jean&email_get=jean@example.com</code>).</li>
        <li><strong>POST</strong> : les données sont envoyées dans le corps de la requête, donc elles ne sont pas visibles dans l’URL.</li>
        <li>GET est souvent utilisé pour récupérer des informations, POST pour envoyer des données sensibles ou modifier des données côté serveur.</li>
    </ul>

</body>

</html>


<?php
if (!empty($_GET['nom_get']) && !empty($_GET['email_get'])) {
    echo "<p>GET - Bonjour " . htmlspecialchars($_GET['nom_get']) . ", votre email est " . htmlspecialchars($_GET['email_get']) . ".</p>";
}
if (!empty($_POST['nom_post']) && !empty($_POST['email_post'])) {
    echo "<p>POST - Bonjour " . htmlspecialchars($_POST['nom_post']) . ", votre email est " . htmlspecialchars($_POST['email_post']) . ".</p>";
}
