<?php
// Enter your Host, username, password, database below.
$conn = mysqli_connect("localhost","root","","victimcorp");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>