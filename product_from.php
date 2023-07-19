<link rel="stylesheet" href="style.css" />
<div class="ct">
<h3> แบบฟอร์มกรอกรายละเอียดดสินค้า </h3>
<form action="product_insert.php" method="post" enctype="multipart/form-data">
    ชื่อสินค้า <input type="text" name="name"class="input"/> </br>
    ราคา <input type="text" name="price"class="input"/> </br>
    จำนวนของ <input type="text" name="stock"class="input"/> </br>
    คำอธิบาย <textarea name="description"class="input"/> </textarea> </br>
     <input type="submit" value="บันทึกข้อมูล"class="bt"/>
</form>
</div>