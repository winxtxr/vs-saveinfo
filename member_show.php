<link rel="stylesheet" href="style.css" />
<?php
   include "connect.php";

   $sql = "SELECT * FROM tbl_member";
   $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
?>
<table class="tb">
  <tr>
    <th> Name </th>
    <th> Email </th>
    <th> Tel. </th>
    <th> Address </th>
    <th> Photo </th>
    <th> Edit </th>
    <th> Delete </th>
  </tr>
<?php
  while($row = mysqli_fetch_assoc($result)) {
?>
  <tr>
      <td><?php echo"$row[firstname] $row[lastname]"; ?> </td>
      <td><?php echo"$row[email]"; ?> </td>
      <td><?php echo"$row[phone]"; ?> </td>
      <td><?php echo"$row[address]"; ?> </td>
      <td><img src="./images/<?php echo $row[photo] ?>" width="200px" />  </td>
      <td><?php echo"<a href='member_edit.php?id=$row[id]'> Edit </a> "; ?> </td>
      <td><?php echo"<a href='member_del.php?id=$row[id]'> Delete </a> "; ?> </td>
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