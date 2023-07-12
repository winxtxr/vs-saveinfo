<?php
include "connect.php";

$sql = "DELETE FROM tbl_member WHERE id = '$_GET[id]' ";

if (mysqli_query($conn, $sql)) {
    echo "ลบข้อมูลแล้ว";
    header("location: member_show.php");
  } else {
    echo "Error delete record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>