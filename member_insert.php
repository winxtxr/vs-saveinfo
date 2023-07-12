<?php

include "connect.php";

$sql = "INSERT INTO tbl_member(firstname, lastname, email, phone, photo, address)
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[phone]','$_POST[photo]','$_POST[address]')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("location: member_show.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>