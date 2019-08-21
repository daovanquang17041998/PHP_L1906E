<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sửa</title>
</head>
<body>
<?php
include_once "sql.php";
$ten_the_loai="";
$thu_tu=0;
$an_hien=1;
$ten_the_loai="";
if(isset($_POST['luu'])&& $_POST['luu']=="sua"){
    $ten_the_loai=$_POST["ten_the_loai"];
    $thu_tu=$_POST["thu_tu"];
    $an_hien=$_POST["an_hien"];
    $category_id=$_POST["category_id"];
    $sql="UPDATE  `bang1`
        SET name='$ten_the_loai',thu_tu='$thu_tu',status='$an_hien'
    WHERE category_id='$category_id'";
    mysqli_query($connection,$sql);
   header("location: the_loai.php");
}
if(isset($_GET['category_id'])&& is_numeric($_GET['category_id'])&&$_GET['category_id']!=0){
    $category_id=$_GET['category_id'];
    $sql="SELECT * FROM `bang1` WHERE category_id= ".$category_id;
    $kq=mysqli_query($connection,$sql);
    $data=mysqli_fetch_array($kq);
}

?>
<form action="sua_the_loai.php" method="post">
    <table border="2" class="table table-condensed">
        <tr>
            <td>Tên thể loại</td>
            <td><input type="text" name="ten_the_loai" value="<?= $data['name']?>"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="number" name="thu_tu" value="<?= $data['thu_tu']?>"> </td>
        </tr>

         <tr>
            <td>Ẩn hiện</td>
            <td>
                <select name="an_hien">
                <option <?php echo $data['status']==1?' selected ':'' ?>  value="1">Hiện</option>
                <option <?php echo $data['status']==0?' selected ':'' ?> value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><button name="luu" value="sua">Lưu</button></td>
            <td><button name="huy">Hủy</button></td>
        </tr>
    </table>
    <input type="hidden" name="category_id" value="<?php echo $data['category_id'] ?>">
</form>
</body>
</html>

