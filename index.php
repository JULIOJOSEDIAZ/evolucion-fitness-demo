<?php
// Mostrar errores (solo para demo / debug)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Variables de entorno de Railway
$host = getenv("MYSQLHOST");
$user = getenv("MYSQLUSER");
$pass = getenv("MYSQLPASSWORD");
$db   = getenv("MYSQLDATABASE");
$port = getenv("MYSQLPORT");

// Chequeo básico de variables
if (!$host || !$user || !$db || !$port) {
    die("❌ Variables de entorno MySQL incompletas");
}

// Conexión con mysqli
$conn = new mysqli($host, $user, $pass, $db, $port);

// Error de conexión
if ($conn->connect_error) {
    die("❌ Error de conexión MySQL: " . $conn->connect_error);
}

// Éxito
echo "✅ Conectado a MySQL correctamente<br>";
echo "🚀 Demo Evolución Fitness ONLINE";
