<link rel="stylesheet" href= "./style.css"/>
<div class="container">
<h1 class="text-center">สมัครสมาชิก</hi>
<from action = "member_insert.php" method = "post" enctype = "multipart/form-data">
ชื่อ <input type = "text" name = "firstname" class = "input"/>
นามสกุล <input type = "text" name = "lastname" class = "input"/> <br/>
อีเมล <input type = "email" name = "email" class = "input"/> <br/>
เบอร์โทร <input type = "text" name = "phone" class = "input"/> <br/>
ที่อยู่ <textarea name="address" class = "input"> </textarea> <br/>
แนบรูป <input type="file" name="photo"class = "input" /> 
 <input type="submit" value="บันทึกข้อมูล" />
    </form>
</div>