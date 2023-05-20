<?php
include('../db_connection.php');

$sql = "SELECT * FROM conduttori WHERE conduttore_id=?";
$id = $_POST['id'];

$stmt = $db->prepare($sql);
$stmt->execute([
    $id
]);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
?>