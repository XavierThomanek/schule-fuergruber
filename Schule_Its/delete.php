<?php
require_once "datenbank.php";

if (isset($_POST['id'])) {
    $id = (int) $_POST['id'];
    $conn->query("DELETE FROM benutzer WHERE id = $id");
}

header("Location: index.php");
exit;
?>
