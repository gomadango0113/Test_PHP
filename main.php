<?php
$usr = ''; // 接続ユーザー名
$pw = ''; // 接続時のパスワード
$dsn = 'mysql:host=; dbname=testdb; charset=utf8';

$pdo = new PDO($dsn, $usr, $pw);
$spl = $pdo -> prepare('select age from test where id = 2');
$spl->execute();
$row = $spl -> fetch(PDO::FETCH_ASSOC);
print_r($row['age']);

print 'Hello World';
?>