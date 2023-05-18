<?php

$host = 'database';
$port = '5432';
$dbname = 'esgi';
$user = 'esgi';
$password = 'Test1234';

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
$pdo = new PDO($dsn, $user, $password);

$stmt = $pdo->prepare('SELECT * FROM esgi');
$stmt->execute();
$rows = $stmt->fetchAll();

foreach ($rows as $row): ?>
<ul>
  <li>ID : <?= $row['id'] ?></li>
  <li>Titre : <?= $row['titre'] ?></li>
  <li>Done : <?= $row['done'] ?></li>
</ul>
<?php endforeach ?>