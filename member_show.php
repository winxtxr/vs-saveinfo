<link rel="stylesheet" href="style.css"/>
<div class="ct">
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

$sql = "SELECT * FROM tbl_member";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

?>
<table class="tb">
  <th>Name</th>
  <th>Email</th>
  <th>Tel.</th>
  <th><Address></Address></th>
  <th>Edit</th>
  <th>Delete</th>

<?php

  while($row = mysqli_fetch_assoc($result)) {
    
?>
<tr>
    <td><?php echo"$row[firstname]  $row[lastname]"; ?> </td>
    <td><?php echo"$row[email]"; ?> </td>
    <td><?php echo"$row[phone]"; ?> </td>
    <td><?php echo"$row[address]"; ?> </td>
    <td><?php echo"<a href='member_edit.php?id=$row[id]'> Edit </a>";?> </td>
    <td><?php echo"<a href='member_del.php?id=$row[id]'> Delete </a>";?> </td>
  </tr>
<?php
   
  }
?>

</table>

<?php
} else {
  echo "0 results";
}

mysqli_close($conn);
  ?>

</div>
