<?php

$host   = "127.0.0.1";
$port   = "8000";
$dbname = "Ujap";
$dbuser = "postgres";
$dbpass = "asd123";

$dbcon = pg_connect("host=$host port=$port dbname=$dbname user=$dbuser password=$dbpass") or die('No se ha podido conectar: ' . pg_last_error());