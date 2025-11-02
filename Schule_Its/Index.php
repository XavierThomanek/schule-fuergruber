<?php
require_once "datenbank.php";
$suche = $_GET['suche'] ?? '';
$sql = "SELECT id, name, bild FROM benutzer WHERE name LIKE '%$suche%'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Benutzerliste</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Benutzerliste</h1>
  <form method="GET" class="search-form">
  <input type="text" name="suche" placeholder=" Nach Namen suchen..." value="<?= htmlspecialchars($_GET['suche'] ?? '') ?>">
  <button type="submit">Suchen</button>
</form>
<?php
//fetch_assoc zieht etwaas wie zb daten aus der datenbank als assoziatives array 
// assoziatives arraay greift man auf das array über denn namen also string zu 
$anzahl = $conn->query("SELECT COUNT(*) AS c FROM benutzer")->fetch_assoc()['c'];
echo "<p class='statistik'>Es gibt aktuell <strong>$anzahl</strong> Benutzer in der Datenbank.</p>";
?>
<p style="text-align:center;">
  <a href="add.php" class="add-link">+ Neuen Benutzer hinzufügen</a>
</p>

  <div class="user-container">
    <?php if ($result->num_rows > 0): ?>
      <?php while($row = $result->fetch_assoc()): ?>
        <div class="user-card">
          <img src="bilder/<?= htmlspecialchars($row['bild']) ?>" alt="<?= htmlspecialchars($row['name']) ?>">
          <a href="benutzer.php?id=<?= $row['id'] ?>">
            <?= htmlspecialchars($row['name']) ?>
          </a>
        </div>
             <form action="delete.php" method="POST" style="margin-top:10px;">
                 <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <button type="submit" class="delete-btn" onclick="return confirm('Willst du diesen Benutzer  löcshen?')">
                        x Löschen
  </button>
  <a href="edit.php?id=<?= $row['id'] ?>" class="edit-link">Bearbeiten</a>

</form>

      
        <?php endwhile; ?>
    <?php else: ?>
      <p>Keine Benutzer gefunden.</p>
    <?php endif; ?>
  </div>
</body>
</html>
