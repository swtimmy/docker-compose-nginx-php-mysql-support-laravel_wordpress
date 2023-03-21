<?php

$dsn = "mysql:host=mysql";
$user = "testUser";
$passwd = "testPassword";

$pdo = new PDO($dsn, $user, $passwd);

$stm = $pdo->query("SELECT VERSION()");

$version = $stm->fetch();

echo $version[0] . PHP_EOL;
