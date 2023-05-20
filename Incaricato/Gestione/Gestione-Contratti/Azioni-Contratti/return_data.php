<?php
include('../../../db_connection.php');

$id =$_POST['id'];
$sql = "SELECT * FROM join3 WHERE contratto_id=?";
$stmt = $db->prepare($sql);
$stmt->execute([
    $id
]);

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);

?>