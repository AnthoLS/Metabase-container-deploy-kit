<?php

const DBHOST = 'mysql';
const DBUSER = 'root';
const DBPASS = 'root';
const DBNAME = 'stats-secu';

$dsn = 'mysql:host='.DBHOST.';dbname='.DBNAME;

try {
  $db = new PDO($dsn, DBUSER, DBPASS);

  echo "Connecté";
} catch (PDOException $exception) {
  echo 'une erreur est survenue'.$exception->getMessage();
  die;
}

 ?>
