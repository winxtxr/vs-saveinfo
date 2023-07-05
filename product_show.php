<?php

$servername = "localhost";
$username = "root";
$password = "cdti1234";
$dbname = "db_winter";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tbl_product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "$row[id] $row[name]  $row[price] $row[stock] $row[deacription]  <br/>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
  ?>