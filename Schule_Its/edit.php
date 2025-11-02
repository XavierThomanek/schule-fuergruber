<?php
require_once "datenbank.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: index.php");
    exit;
}

// Wenn Formular abgesendet wurd werden die Daten aktualisieren
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $wohnort = $_POST['wohnort'];
    
    $conn->query("UPDATE benutzer 
                  SET name='$name', email='$email', wohnort='$wohnort' 
                  WHERE id=$id");
    header("Location: index.php");
    exit;
}

// Benutzer aus DB holen
$result = $conn->query("SELECT * FROM benutzer WHERE id = $id");
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Benutzer bearbeiten</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Benutzer bearbeiten</h1>
  <form action="edit.php?id=<?= $user['id'] ?>" method="POST" class="add-form">
    <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
    <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
    <input type="text" name="wohnort" value="<?= htmlspecialchars($user['wohnort']) ?>">
    <button type="submit">Änderungen speicehrn</button>
  </form>
  <p style="text-align:center;"><a href="index.php"><-Zurück zur Übersicht</a></p>
</body>
</html>
