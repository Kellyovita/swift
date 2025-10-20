<?php
function db() {
    // Use environment variables if available (Render)
    $host = getenv("DB_HOST") ?: "sql12.freesqldatabase.com";
    $user = getenv("DB_USER") ?: "sql12803842";
    $pass = getenv("DB_PASS") ?: "MItM8PqES3";
    $dbname = getenv("DB_NAME") ?: "sql12803842";
    $port = getenv("DB_PORT") ?: 3306;

    // Create connection
    $conn = new mysqli($host, $user, $pass, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
