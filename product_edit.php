<?php
include "connect.php";
$sql = "SELECT * FROM tbl_product WHERE id='$_GET[id]' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<form action="member_product.php?id=<?php echo $row[id] ?>" method="post" enctype="multipart/form-data">
ชื่อสินค้า <input type="text" name="name" value="<?php echo $row[name]; ?>"/> </br>
    ราคา <input type="text" name="price" value="<?php echo $row[price]; ?>"/> </br>
    จำนวนของ <input type="text" name="stock" value="<?php echo $row[stock]; ?>"/> </br>
    คำอธิบาย <textarea name="description"/> <?php echo $row[description]; ?> </textarea> </br>
     <input type="submit" value="Update"/>
</form>