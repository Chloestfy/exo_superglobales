<?php 
session_start();
if (!isset($SESSION['user'])){
    $_SESSION['user'] = "Pedri";
}

setcookie("last_visit", date("d/m/Y h:i")), time() + 3600);

echo "Bonjour". $_SESSION['user']. "<br>";
if (isset($_COOKIE['last_visit'])){
    echo "derniere visite:" . $_COOKIE['last_visit'];
}