<?php
$dbuser = 'db_user';
$dbpass = '$mySecret4150';
$dbh = new PDO('mysql:host=localhost;dbname=myphpwebsite', $dbuser, $dbpass);
$records = $dbh->query('SELECT * FROM `users`', PDO::FETCH_ASSOC);
$claimeduser = $_POST["name"];
$claimedpassword = $_POST["pwd"];

echo "<h1>Hello ".$claimeduser." your submitted password is:".$claimedpassword." </h1>";

foreach ($records as $recorduser){
    if ($recorduser['username'] == $claimeduser && $recorduser['password'] == $claimedpassword){
        echo "logged in";
    }
}   