< link href="./styles.css" rel="""
<h2> ฟอร์มกรอกข้อมูลสินค้า </h2>
<from action = "product_insert.php" method = "post" enctype = "multipart/form-data">
    ชื่อสินค้า <input type = "text" name = "name" /> <br/>
    ราคา <input type = "text" name = "price" /> <br/>
    จำนวนในคลัง <input type = "text" name = "stock" /> <br/>
    รายละเอียด <textarea name = "description"> </textarea>  <br/>
<input type = "submit" value = "บันทึกข้อมูล" class="button">
</from>