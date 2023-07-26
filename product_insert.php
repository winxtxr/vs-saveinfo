<?php

include "connect.php";

$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "./images/" . $filename;

$sql = "INSERT INTO tbl_product(name, price, stock, description)
VALUES ('$_POST[name]','$_POST[price]','$_POST[stock]','$_POST[description]')";

if (copy($tempname, $folder)) {
  echo "อับโหลดรู้ได้แล้ว";
} else {
  echo "อับโหลดรูปไม่ได้";
}

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>