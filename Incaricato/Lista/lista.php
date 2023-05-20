<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<?php
$hostname = "127.0.0.1";
$dbname = "crim";
$user = "root";
$pass = "";
$db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass);

$sql = "SELECT * FROM join1";

$stmt= $db->prepare($sql);
$stmt->execute([
]);

echo "<table class='table'>";
echo "<tr><th>ID</th><th>Incaricato</th><th>Locatario</th><th>Conduttore</th></tr>";
foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
{
    echo "<tr>";
    
    echo "<td>".$row['contratto_id']."</td>";
    echo "<td>".$row['user_username']."</td>";
    echo "<td>".$row['locatario_nome']."</td>";
    echo "<td>".$row['conduttore_nome']."</td>";
    
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>