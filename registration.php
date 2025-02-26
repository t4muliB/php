<?php
$dbh = new PDO('mysql:host=localhost;dbname=myphpwebsite', 'db_user', '$mySecret4150');
// $records = $dbh->query('SELECT * FROM `users`', PDO::FETCH_ASSOC);
$name = $_POST['name'];
$pass = $_POST['pwd'];
$credentials = [$name];

foreach ($credentials as $records){
    if($records = $dbh->prepare("INSERT INTO `users`(`username`,`password`) VALUES ($name,$pass)")){
        printf("%s=>%s",$name,$pass);
    }
    // echo "<h1>Hello ".$name." your submitted password is:".$pass." </h1>";
}





// $result = $dbh->query('SELECT * FROM `users`', PDO::FETCH_ASSOC);

// foreach ($result as $entry){
//     if($entry == $_POST['username']){
//         echo "Username exists,please try again";
//     }
// }














// $result = $dbh->query('INSERT INTO `book`("Username","Password") VALUES ($username,$password)');
