<?php
require_once "config/db.php";

try {
    $query = $pdo->query("SELECT * FROM contactos ORDER BY id DESC");
    $contactos = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error al obtener los contactos: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos Registrados</title>
    <link rel="stylesheet" href="../activos/css/style.css">
</head>
<body>
    <section class="contactos-section">
        <h1>📋 Contactos Registrados</h1>

        <?php if (count($contactos) > 0): ?>
        <table class="tabla-contactos">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Asunto</th>
                    <th>Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactos as $c): ?>
                    <tr>
                        <td><?= htmlspecialchars($c['id']) ?></td>
                        <td><?= htmlspecialchars($c['nombre']) ?></td>
                        <td><?= htmlspecialchars($c['correo']) ?></td>
                        <td><?= htmlspecialchars($c['asunto']) ?></td>
                        <td><?= htmlspecialchars($c['mensaje']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
            <p>No hay contactos registrados todavía.</p>
        <?php endif; ?>

        <div style="margin-top: 20px;">
            <a href="../contact.html" class="btn-back">⬅ Volver al formulario</a>
        </div>
    </section>
</body>
</html>
