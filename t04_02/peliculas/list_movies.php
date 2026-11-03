<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM peliculas ORDER BY created_at DESC");
$peliculas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Películas</title>
</head>
<body>
    <h1>Lista de Películas</h1>
    <ul>
        <?php foreach($peliculas as $peli): ?>
            <li><?php echo htmlspecialchars($peli['nome']); ?> (engadida: <?php echo $peli['created_at']; ?>)</li>
        <?php endforeach; ?>
    </ul>
    <p><a href="add_movie.php">Engadir nova película</a></p>
</body>
</html>
