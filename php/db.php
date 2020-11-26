<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("r1bsyfx4gbowdsis.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","wv31q6rsvi73js9d","e3zbjqh87pb82c9d","i0jpki45y7tukz6i");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
