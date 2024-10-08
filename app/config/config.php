<?php

if ($_ENV['ENV'] == 'production') {
  $host = $_ENV['PG_HOST'];
  $port = $_ENV['PG_PORT'];
  $db = $_ENV['PG_DB'];
  $user = $_ENV['PG_USER'];
  $password = $_ENV['PG_PASSWORD'];
  $endpoint = $_ENV['PG_ENDPOINT'];

  $connection_string = "host=" . $host . " port=" . $port . " dbname=" . $db . " user=" . $user . " password=" . $password . " options='endpoint=" . $endpoint . "' sslmode=require";

  $dbconn = pg_connect($connection_string);

  if (!$dbconn) {
    die("Connection failed: " . pg_last_error());
  }
  echo "Connected successfully";
} else {
  // sesuaikan nama url
  define('BASEURL', 'http://localhost:8080/mm/public');
  
  // DB
  define('DB_HOST', 'localhost:3306');
  define('DB_NAME', 'poi_db');
  define('DB_USER', 'root');
  define('DB_PASS', '');
}
