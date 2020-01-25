<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=bloggy', 'root', '');
    $sql = 'select * from articles;';


    foreach ($db->query($sql) as $article) {
        //   var_dump($article);
        echo "<br /><h2>" . $article['titre'] . "</h2>";
    }
    
} catch (Exception $ex) {
    print "Erreur :" . $ex->getMessage();
}

echo password_hash('toto', PASSWORD_BCRYPT);

$sql = "select * from articles;";
$q   = $db->prepare($sql);
$q->execute();
$data = $q->fetchall(PDO::FETCH_ASSOC);

if (count($data) > 0) {

    foreach ($data as $row) {

        echo '<p>' . $row['contenu'] . '</p>';
   
    }
} else {

    echo "no results";
}