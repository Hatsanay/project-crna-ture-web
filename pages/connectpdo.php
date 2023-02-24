<?php
$servername = "localhost";
$username = "adminroot";
$password = "1234";

try {
  $conn = new PDO("mysql:host=$servername;dbname=db_crna", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// $servername = "localhost";
// $username = "dikitcom_adminroot";
// $password = "h3PaC*4B3^2T";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=dikitcom_db_crna", $username, $password);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
?>