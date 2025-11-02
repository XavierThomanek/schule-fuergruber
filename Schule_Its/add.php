<?php
require_once "datenbank.php";

// Wenn die abfrage abgesendet wurde
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $wohnort = $_POST['wohnort'];
    $bild = $_FILES['bild']['name'];

    // Datei hochladen in denn bilder ordner 
    if (!empty($bild)) {
        move_uploaded_file($_FILES['bild']['tmp_name'], "bilder/" . $bild);
    }

    // In Datenbank einfügen
    $sql = "INSERT INTO benutzer (name, email, wohnort, bild) 
            VALUES ('$name', '$email', '$wohnort', '$bild')";
    $conn->query($sql);

    // Zurück zur standard seite 
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Neuen Benutzer hinzufügen</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Neuen Benutzer hinzufügen</h1>
  <form action="add.php" method="POST" enctype="multipart/form-data" class="add-form">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="E-Mail" required>
    <input type="text" name="wohnort" placeholder="Wohnort">
    <label>Profilbild:</label>
    <input type="file" name="bild">
    <button type="submit">+ Benutzer hinzufügen</button>
  </form>
  <p style="text-align:center;"><a href="index.php"><-Zurück zur Übersicht</a></p>
</body>
</html>
