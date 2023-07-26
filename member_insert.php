<?php
include "connect.php";

$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "./images/" . $filename;

$sql = "INSERT INTO tbl_member (firstname, lastname, email, password, phone, photo, address)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[password]' ,'$_POST[phone]', '$filename', '$_POST[address]')";

 //if (move_uploaded_file($tempname, $folder)) {
  if (copy($tempname, $folder)) {
    echo "อับโหลดรู้ได้แล้ว";
  } else {
    echo "อับโหลดรูปไม่ได้";
  }

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header( "location: member_show.php" );
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>