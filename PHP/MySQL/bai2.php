<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/nomalize.css">
    <title>Untitled Document</title>
</head>
<body>
<?php
include_once "sql.php";
$danh_gia="";
$noi_dung_ngan="";
$noi_dung_text="";
$anh_dai_dien="";
$tieu_de="";
$tin_noi_bat="";
$nhom_tin_tuc="";
if(isset($_POST['luu'])){

    $tieu_de=$_POST["tieu_de"];
    $tin_noi_bat=$_POST["tin_noi_bat"];
    $noi_dung_ngan=$_POST["noi_dung_ngan"];
    $noi_dung_text=$_POST["noi_dung_text"];
    $anh_dai_dien=$_POST["anh_dai_dien"];
    $nhom_tin_tuc=$_POST["nhom_tin_tuc"];
    $trang_thai=$_POST["trang_thai"];
    $sql= "INSERT INTO `tin_tuc`(`id`, `tieu_de`, `noi_dung_ngan`, `noi_dung_text`, `trang_thai`, `tin_noi_bat`, `anh_dai_dien`, `nhom_tin_tuc`) VALUES ('NULL','$tieu_de','$noi_dung_ngan','$noi_dung_text','$trang_thai','$tin_noi_bat','$anh_dai_dien','$nhom_tin_tuc');";
    mysqli_query($connection,$sql);
    header("location: tin_tuc.php");
}
else if(isset($_POST['huy'])){
    header("location: tin_tuc.php");
}
?>
<form action="bai2.php" method="post">
<table border="2" class="table table-condensed">
    <tr>
        <td>Tiêu đề</td>
        <td><input type="text" name="tieu_de"/></td>
    </tr>
    <tr>
        <td>Nội dung ngắn</td>
        <td><input type="text" name="noi_dung_ngan"/></td>
    </tr>
    <tr>
        <td>Nội dung text</td>
        <td><input type="text" name="noi_dung_text"/></td>
    </tr>
    <tr>
        <td>Trạng thái</td>
        <td>
            <select  name="trang_thai">
                <option value="1">Có</option>
                <option value="0">Không</option>
            </select>
        </td>
    <tr>
        <td>Tin nổi bật</td>
        <td><input type="text" name="tin_noi_bat"/></td>
    </tr>
    <tr>
        <td>Ảnh đại diện</td>
        <td><input type="text" name="anh_dai_dien"/></td>
    </tr>
    <tr>
        <td>Nhóm tin tức</td>
        <td><input type="text" name="nhom_tin_tuc"/></td>
    </tr>
    <tr>
        <td><button type="submit" name="luu">Lưu</button></td>
        <td><button name="huy">Hủy</button></td>
    </tr>
</table>
</form>
</body>
</html>

