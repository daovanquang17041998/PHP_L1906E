<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Thể loại tin tức</title>
</head>
<body>
<?php
include_once "sql.php";
$sql="SELECT * FROM `bang1`";
$kq=mysqli_query($connection,$sql);
if(isset($_GET["action"]) && $_GET["action"]=="delete"){
    $category_id=$_GET["category_id"];
    $sql1="DELETE FROM `bang1` WHERE category_id=$category_id";
    mysqli_query($connection, $sql1);
}

?>
    <table border="2" class="table table-condensed">
        <tr>
            <td>Id</td>
            <td>Tên thể loai</td>
            <td>Thứ tự</td>
            <td>Ẩn hiện</td>
            <td colspan="2">Chức năng</td>
        </tr>
        <?php while($row = mysqli_fetch_array($kq)){ ?>
        <tr>
            <td><?php echo $row['category_id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['thu_tu'] ?></td>
            <td><?php

               if( $row['status'] ==1) echo "Hiện";
                else echo "Ẩn";
                ?></td>
            <td><a href="sua_the_loai.php?action=edit&category_id=<?php echo $row['category_id'] ?>">sửa</a></td>
            <td><a href="the_loai.php?action=delete&category_id=<?php echo $row['category_id'] ?>">xóa</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

