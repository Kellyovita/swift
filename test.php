<?php
require_once __DIR__ . '/includes/db.php';

$conn = db();
echo "<h3>✅ Database Connected Successfully!</h3>";

$result = $conn->query("SHOW TABLES");
if ($result) {
    echo "<ul>";
    while ($row = $result->fetch_array()) {
        echo "<li>" . $row[0] . "</li>";
    }
    echo "</ul>";
} else {
    echo "❌ Query failed: " . $conn->error;
}
?>
