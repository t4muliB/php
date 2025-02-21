<?php
$dbh = new PDO('mysql:host=localhost;dbname=myphpwebsite', 'db_user', '$mySecret4150');
$user = $dbh->query('SELECT * FROM `users`', PDO::FETCH_ASSOC);

echo "<h1>Hello ".$_POST["name"]." your submitted password is:".$_POST["pwd"]." </h1>";

foreach ($user as $row){
    if ($row['username'] == $_POST["name"] && $row['password'] == $_POST["pwd"]){
        echo "logged in";
} else {
    echo "wrong password";
}
}
