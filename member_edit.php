<link rel="stylesheet" href="style.css" />\
<div class="ct">
<?php
include "connect.php";
$sql = "SELECT * FROM tbl_member WHERE id='$_GET[id]' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<form action="member_update.php?id=<?php echo $row[id] ?>" method="post" enctype="multipart/form-data">
Name <input type="text" name="firstname" value="<?php echo $row[firstname]; ?>"class="input"/>
Lastname <input type="text" name="lastname"value="<?php echo $row[lastname]; ?>"class="input"/> 
Email <input type="email" name="email"value="<?php echo $row[email]; ?>"class="input"/> 
Tel. <input type="text" name="phone"value="<?php echo $row[phone]; ?>"class="input"/> 
Address <textarea name="address"class="input"> <?php echo $row[address]; ?> </textarea> 
Photo <input type="file" name="photo"class="input"/> 
<img src="./images/<?php echo $row[photo] ?>" width="200px" />
<input type="submit" value="Update"class="bt"/>
</form>
</div>