<?php
$DB_HOST = "sql111.infinityfree.com"; 
$DB_NAME = "if0_40195730_formulario_u"; 
$DB_USER = "if0_40195730"; 
$DB_PASS = "Banned1985";
$DB_PORT = 3306;

try {
    $pdo = new PDO(
        "mysql:host=$DB_HOST;port=$DB_PORT;dbname=$DB_NAME;charset=utf8mb4",
        $DB_USER,
        $DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    http_response_code(500);
    echo "❌ Error de conexión: " . htmlspecialchars($e->getMessage());
    exit;
}
?>
