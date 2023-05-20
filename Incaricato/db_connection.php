<?php
try{
    $hostname = "localhost";
    $dbname = "vtcrimbe_crim";
    $user = "vtcrimbe_root";
    $pass = "S0ld0Buc4t0";
    $db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass);
    
    } catch (PDOException $e) {
      echo "Errore: " . $e->getMessage();
      die();
    }
?>
    