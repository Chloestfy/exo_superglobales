<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice PHP - Formulaire</title>
</head>

<body>

    <form method="post" action="">
        <label>Nom : <input type="text" name="nom"></label><br><br>
        <label>Email : <input type="text" name="email"></label><br><br>
        <label>Âge : <input type="text" name="age"></label><br><br>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nom = trim($_POST["nom"] ?? '');
        $email = trim($_POST["email"] ?? '');
        $age = trim($_POST["age"] ?? '');

        $erreurs = [];


        if (empty($nom)) {
            $erreurs[] = "Le nom est requis.";
        }


        if (empty($email)) {
            $erreurs[] = "L'email est requis.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erreurs[] = "L'email est invalide.";
        }


        if (empty($age)) {
            $erreurs[] = "L'âge est requis.";
        } elseif (!filter_var($age, FILTER_VALIDATE_INT) || (int)$age <= 0) {
            $erreurs[] = "L'âge doit être un entier positif.";
        }

        if (!empty($erreurs)) {
            echo "<h3>Erreurs :</h3><ul>";
            foreach ($erreurs as $erreur) {
                echo "<li>" . htmlspecialchars($erreur) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<h3>Données valides :</h3>";
            echo "Nom : " . htmlspecialchars($nom) . "<br>";
            echo "Email : " . htmlspecialchars($email) . "<br>";
            echo "Âge : " . htmlspecialchars($age) . "<br>";
        }
    }
    ?>

</body>

</html>