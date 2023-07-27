<?php
  // Generate a unique link for each user
  $userId = uniqid(); // Generate a unique identifier for the user
  $link = "http://citians.connect.com/second.html?user=" . $userId;
  
  // Redirect the user to the generated link
  header("Location: " . $link);
  exit;
?>
