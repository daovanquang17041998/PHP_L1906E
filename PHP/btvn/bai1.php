<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tile</title>
</head>
<body>
<?php
if(isset($_POST['nhap_ten'])){
    $ten=$_POST['nhap_ten'];
    $xuat_ten="Xin chào bạn: ".$ten;
}
?>
<form action="bai1.php" method="post">
<table border="2px">
    <tr>
        <td colspan="2">In lời chào</td>
    </tr>
    <tr>
        <td>Họ vào tên</td>
        <td><input type="text" name="nhap_ten"></td>
    </tr>
    <tr>
        <td><label> <?php if(isset($_POST['nhap_ten']))echo $xuat_ten;?></label></td>
    </tr>
    <td colspan="2">
        <input type="submit" name="chao" value="xuat">
    </td>
</table>
</form>

</body>

