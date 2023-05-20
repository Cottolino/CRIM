<?php
include('../db_connection.php');

$sql = "DELETE FROM contratti WHERE contratto_id=:id";
$stmt= $db->prepare($sql);
$stmt->bindValue(':id', $_POST["id"]);
$stmt->execute();
//echo $_POST["id"];
// $value = array('return' => 3, 'msg1' => 'Message sent OK, we will be in touch ASAP');

// $output = json_encode($value);
// echo $output;

?>