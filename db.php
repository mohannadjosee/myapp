<?php
$pdo = new PDO("mydb.db");

$st = $pdo->query("SELECT * FROM test;');

$rows = $st->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';

var_dump($rows);

echo '</pre>';

?>
