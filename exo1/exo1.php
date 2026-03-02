<?php

echo "<h3>Paramètres de l'URL</h3>";

if (isset($_GET['ville'])) {
    echo "Ville : " . htmlspecialchars($_GET['ville']) . "<br>";
} else {
    echo "Ville : paramètre non défini<br>";
}

if (isset($_GET['pays'])) {
    echo "Pays : " . htmlspecialchars($_GET['pays']) . "<br>";
} else {
    echo "Pays : paramètre non défini<br>";
}

echo "<h3>Infos serveur</h3>";
echo "Méthode HTTP : " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Nom du script : " . basename($_SERVER['PHP_SELF']) . "<br>";
