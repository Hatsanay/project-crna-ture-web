<?php
// login.php

// Start a session
session_start();

// Get the username and password from the form
$username = $_POST['user'];
$password = $_POST['pwd'];

// Connect to the database
$conn = mysqli_connect('localhost', 'adminroot', '1234', 'db_crna');

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Escape the username and password to prevent SQL injection attacks
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Check if the username and password are correct
$query = "SELECT * FROM members WHERE memusername = '$username' AND mempassword = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
  // The login is successful, so set the logged_in session variable to true and redirect the user to the protected page
  $_SESSION['logged_in'] = true;
  // Retrieve the user's ID from the database and store it in the session
  $row = mysqli_fetch_assoc($result);
  $user_id = $row['memid'];
  $_SESSION['user_id'] = $user_id;
  header('Location: pages\admin-dashboard.php');
  exit;
} else {
  // The login is unsuccessful, so set the error session variable and redirect the user back to the login page
  $_SESSION['error'] = 'Invalid username or password';
  header('Location: login.html');
  exit;
}

// Close the connection
mysqli_close($conn);
?>
