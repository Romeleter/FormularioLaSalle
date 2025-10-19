<?php
require_once "config/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    $stmt = $pdo->prepare("INSERT INTO contactos (nombre, correo, asunto, mensaje)
                           VALUES (?, ?, ?, ?)");
    $stmt->execute([$nombre, $correo, $asunto, $mensaje]);

    echo "Mensaje guardado correctamente.";
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
