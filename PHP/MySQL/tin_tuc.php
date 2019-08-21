<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/nomalize.css">
    <title>Thể loại tin tức</title>
</head>
<body>
<?php
include_once "sql.php";
$sql="SELECT * FROM `tin_tuc` left join `bang1` " ;
$kq=mysqli_query($connection,$sql);
if(isset($_GET["action"]) && $_GET["action"]=="delete"){
    $id=$_GET["id"];
    $sql1="DELETE FROM `tin_tuc` WHERE id=$id";
    mysqli_query($connection, $sql1);
}
?>
<table border="2"  class="table table-condensed">
    <tr>
        <td>Id</td>
        <td>Tiêu đề</td>
        <td>Nội dung ngắn</td>
        <td>Nội dung text</td>
        <td>Trạng thái</td>
        <td>Tin nổi bật</td>
        <td>Ảnh đại diện</td>
        <td>Nhóm tin tức</td>
        <td colspan="2">Chức năng</td>
    </tr>
    <?php while($row = mysqli_fetch_array($kq)){ ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['tieu_de'] ?></td>
            <td><?php echo $row['noi_dung_ngan'] ?></td>
            <td><?php echo $row['noi_dung_text'] ?></td>
            <td><?php

                if( $row['trang_thai'] ==1) echo "Có";
                else echo "Không";
                ?></td>
            <td><?php echo $row['tin_noi_bat'] ?></td>
            <td><?php echo $row['anh_dai_dien'] ?></td>
            <td><?php echo $row['nhom_tin_tuc'] ?></td>
            <td><a href="sua_tin_tuc.php?action=edit&id=<?php echo $row['id'] ?>">sửa</a></td>
            <td><a href="tin_tuc.php?action=delete&id=<?php echo $row['id'] ?>">xóa</a></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>

