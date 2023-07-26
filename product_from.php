<link href="./styles.css" rel="stylesheet"/>

<div class="container">
<h1 class="text-center"> ฟอร์มกรอกข้อมูลสินค้า </h1>
<from action = "product_insert.php" method = "post" enctype = "multipart/form-data">
    ชื่อสินค้า <input type = "text" name = "name" /> 
    ราคา <input type = "text" name = "price" /> 
    จำนวนในคลัง <input type = "text" name = "stock" /> 
    รายละเอียด <textarea name = "description"> </textarea> 
<input type = "submit" value = "บันทึกข้อมูล" class="button">
</from>
</div>