<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Untitled Document</title>
</head>
<body>
<?php
include_once "sql.php";
$ten_the_loai="";
$thu_tu=0;
$an_hien=1;

if(isset($_POST['luu'])){
    $ten_the_loai=$_POST["ten_the_loai"];
    $thu_tu=$_POST["thu_tu"];
    $an_hien=$_POST["an_hien"];
    $sql= "INSERT INTO `bang1` (`category_id`, `name`, `thu_tu`, `status`) VALUES (NULL, '$ten_the_loai', '$thu_tu', '$an_hien');";
    mysqli_query($connection,$sql);
    header("location: the_loai.php");
}
else if(isset($_POST['huy'])){
    echo "huy";
}
?>
<form action="bai1.php" method="post">
<table border="2" class="table table-condensed">
    <tr>
        <td>Tên thể loại</td>
        <td><input type="text" name="ten_the_loai"/></td>
    </tr>
    <tr>
        <td>Thứ tự</td>
        <td><input type="number" name="thu_tu"/></td>
    </tr>
    <tr>
        <td>Ẩn hiện</td>
        <td>
            <select  name="an_hien">
                <option value="1">hiện</option>
                <option value="0">ẩn</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><button name="luu">Lưu</button></td>
        <td><button name="huy">Hủy</button></td>
    </tr>
</table>
</form>
</body>
</html>

