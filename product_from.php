<link href="./styles.css" rel="stylesheet"/>

<div class="container">
<h1 class="text-center"> ฟอร์มกรอกข้อมูลสินค้า </h1>
<from action = "product_insert.php" method = "post" enctype = "multipart/form-data">
    ชื่อสินค้า <input type = "text" name = "name" /> <br/>
    ราคา <input type = "text" name = "price" /> <br/>
    จำนวนในคลัง <input type = "text" name = "stock" /> <br/>
    รายละเอียด <textarea name = "description"> </textarea>  <br/>
<input type = "submit" value = "บันทึกข้อมูล" class="button">
</from>
</div>