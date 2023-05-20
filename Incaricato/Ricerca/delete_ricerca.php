<?php

include('../db_connection.php');

$id = $_POST['id'];
$sql = "DELETE FROM conduttori WHERE conduttore_id=?";
$stmt= $db->prepare($sql);
$res = $stmt->execute([
    $id
]);

if($res == true)
{
    echo "true";
}
else
{
    echo "false";
}


?>