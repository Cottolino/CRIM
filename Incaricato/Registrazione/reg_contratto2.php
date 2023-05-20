<?php
include('../db_connection.php');

$id = $_POST['id'];
$sql = "SELECT * FROM conduttori WHERE conduttore_id=?";
$stmt = $db->prepare($sql);
$stmt->execute([
    $id
]); 
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
?>