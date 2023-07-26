<link rel="stylesheet" href="style.css"/>
<div class="center">
<?php
include "connect.php";

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  ?>
  <table style="border;1px solid #990055">
  <th> ชื่อ </th>
  <th> ราคา</th>
  <th> จำนวนในคลัง </th>
  <th> รายละเอียด </th>
  <th> Edit </th>
  <th> Delete </th>
  <?php
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo"$row[name] ";?> </td>
      <td><?php echo"$row[price]";?> </td>
      <td><?php echo"$row[stock]";?> </td>
      <td><?php echo"$row[description]";?> </td>
      <td><?php echo"a href = 'product_edit.php?id=$row[id]'> Edit </a>";?> </td>
    <td><?php echo"a href = 'product_del.php?id=$row[id]'> Delete </a>";?> </td>
  </tr>
  <?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>