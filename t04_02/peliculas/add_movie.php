<?php
require 'db.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nome'])) {
    $stmt = $pdo->prepare("INSERT INTO peliculas (nome) VALUES (:nome)");
    $stmt->execute(['nome' => $_POST['nome']]);
    $message = "Película engadida correctamente!";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Engadir Película</title>
</head>
<body>
    <h1>Engadir Película</h1>
    <?php if($message) echo "<p>$message</p>"; ?>
    <form method="post">
        <label for="nome">Nome da película:</label>
        <input type="text" name="nome" id="nome" required>
        <button type="submit">Engadir</button>
    </form>
    <p><a href="list_movies.php">Ver todas as películas</a></p>
</body>
</html>
