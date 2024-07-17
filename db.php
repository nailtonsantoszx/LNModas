<?php
$servername = "localhost";
$username = "root";
$password = ""; // Atualize com a senha do seu banco de dados
$dbname = "ln_modas";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
