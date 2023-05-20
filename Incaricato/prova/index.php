<?php

$hostname = "127.0.0.1";
$dbname = "crim";
$user = "root";
$pass = "";
$db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass);


$sql2 = "SELECT * FROM locatari WHERE MATCH (locatari.locatario_cognome) AGAINST ('Loc1' IN NATURAL LANGUAGE MODE);";
$q2 = $db->prepare($sql2);
$q2->execute();
/*



*/

foreach($q2->fetchAll(PDO::FETCH_ASSOC) as $row)
{
    echo $row['locatario_nome'];
    echo "<br>";
}

?>