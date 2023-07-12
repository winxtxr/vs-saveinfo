<?php
include "connect.php";

$sql = "UPDATE tbl_member SET 
firstname ='$_POST[firstname]',
lastname = '$_POST[lastname]',
email = '$_POST[email]',
phone = '$_POST[phone]',
address = '$_POST[address]'
WHERE id = '$_GET[id]'";

if (mysqli_query($conn, $sql)) {
    echo "Update success";
    header("location: member_show.php");
  } else {
    echo "Error delete record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>

