<?php
$pdo = new PDO("sqlite:mydb.db");

$st = $pdo->query("SELECT * FROM test;');

$rows = $st->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';

var_dump($rows);

echo '</pre>';

?>
