<?php
$dbh = new PDO('mysql:host=localhost;dbname=myphpwebsite', 'db_user', '$mySecret4150');
$records = $dbh->query('SELECT * FROM `users`', PDO::FETCH_ASSOC);
$_POST['name'] = $name;
$_POST['pwd'] = $pass;

foreach ($name as $USERNAME && $pass as $PASSWORD){
    ('INSERT INTO `users`("username","password") VALUES ($USERNAME,$PASSWORD)');
}





// $result = $dbh->query('SELECT * FROM `users`', PDO::FETCH_ASSOC);

// foreach ($result as $entry){
//     if($entry == $_POST['username']){
//         echo "Username exists,please try again";
//     }
// }














// $result = $dbh->query('INSERT INTO `book`("Username","Password") VALUES ($username,$password)');
