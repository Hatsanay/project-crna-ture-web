<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "1234";
$db_name = "project_nsdr";

// try {
//   $db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
//     $e->getMessage();
// }

// $db_host = "localhost";
// $db_user = "dikitcom_adminroot";
// $db_password = "h3PaC*4B3^2T";
// $db_name = "dikitcom_db_crna";

try {
  $db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    $e->getMessage();
}
?>