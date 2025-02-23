<?php
$dbh = new PDO('mysql:host=localhost;dbname=myphpwebsite', 'db_book', '$mySecret4150');
$result = $dbh->query('INSERT INTO `book`("Username","Password") VALUES ($username,$password)');