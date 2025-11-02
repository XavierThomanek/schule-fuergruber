<?php
 require_once "datenbank.php";
 if (!isset($_GET['id'])) {
 die("Benutzer-ID fehlt!");
 }
 $id = (int)$_GET['id'];
 $stmt = $conn->prepare("SELECT * FROM benutzer WHERE id = ?");
 $stmt->bind_param("i", $id);
 $stmt->execute();
 $result = $stmt->get_result();
 $user = $result->fetch_assoc();
 if (!$user) {
 die("Benutzer nicht gefunden!");
 }
 ?>
 <!DOCTYPE html>
 <html lang="de">
 <head>
 <meta charset="UTF-8">
 <title><?= htmlspecialchars($user['name']) ?> – Profil</title>
 <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <h1><?= htmlspecialchars($user['name']) ?></h1>
  <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
  <p><strong>Geburtstag:</strong> <?= htmlspecialchars($user['geburtstag']) ?></p>
  <p><strong>Wohnort:</strong> <?= htmlspecialchars($user['wohnort']) ?></p>
  <p><strong>Über die Person:</strong><br><?= nl2br(htmlspecialchars($user['beschreibung'])) ?></p>
  <p><a href="index.php"><-Zurück zur Liste</a></p>
 </body>
 </html>