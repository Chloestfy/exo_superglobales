<form method="post">
    Email: <input type="email" name="email">
    <button type="submit">Envoyer</button>
</form>

<?php
if (!empty($_POST['email'])) {
    echo "ton email est : " . htmlspecialchars($_POST['email']);
}
?>