<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sửa tin tức</title>
    <link href="CSS/normalize.css" rel="stylesheet">
</head>
<body>
<?php
include_once "sql.php";
$danh_gia=0;
$noi_dung_ngan="";
$noi_dung_text="";
$anh_dai_dien="";
$tieu_de="";
$tin_noi_bat=0;
$trang_thai=1;

if(isset($_POST['luu'])&& $_POST['luu']=="sua"){
    $tieu_de=$_POST["tieu_de"];
    $tin_noi_bat=$_POST["tin_noi_bat"];
    $noi_dung_ngan=$_POST["noi_dung_ngan"];
    $noi_dung_text=$_POST["noi_dung_text"];
    $anh_dai_dien=$_POST["anh_dai_dien"];
    $nhom_tin_tuc=$_POST["nhom_tin_tuc"];
    $trang_thai=$_POST["trang_thai"];
    $id=$_POST["id"];
    $category_id=$_POST['category_id'];
    $sql="UPDATE `tin_tuc`
 SET tieu_de ='$tieu_de',noi_dung_ngan='$noi_dung_ngan',noi_dung_text='$noi_dung_text',trang_thai='$trang_thai',tin_noi_bat='$tin_noi_bat',anh_dai_dien='$anh_dai_dien',nhom_tin_tuc='$nhom_tin_tuc',category_id='category_id'
WHERE id='$id'";
    mysqli_query($connection,$sql);
    header("location: tin_tuc.php");
}
if(isset($_GET['id'])&& is_numeric($_GET['id'])&&$_GET['id']!=0){
    $id=$_GET['id'];
    $sql="SELECT * FROM `tin_tuc` WHERE id= ".$id;
    $kq=mysqli_query($connection,$sql);
    $data=mysqli_fetch_array($kq);
}
$sql="SELECT * FROM `bang1`";
$kq=mysqli_query($connection,$sql)
?>
<form action="sua_tin_tuc.php" method="post">
    <table border="2" class="table table-condensed">
        <tr>
            <td>Tiêu đề</td>
            <td><input type="text" name="tieu_de" value="<?= $data['tieu_de']?>"/></td>
        </tr>
        <tr>
            <td>Nội dung ngắn</td>
            <td><input type="text" name="noi_dung_ngan" value="<?= $data['noi_dung_ngan']?>"/></td>
        </tr>
        <tr>
            <td>Nội dung text</td>
            <td><input type="text" name="noi_dung_text" value="<?= $data['noi_dung_text']?>"/></td>
        </tr>
        <tr>
            <td>Trạng thái</td>
            <td>
                <select  name="trang_thai" value="<?= $data['trang_thai']?>">
                    <option <?php echo $data['trang_thai']==1?' selected ':'' ?>  value="1">Có</option>
                    <option <?php echo $data['trang_thai']==0?' selected ':'' ?> value="0">Không</option>
                </select>
            </td>
        <tr>
            <td>Tin nổi bật</td>
            <td><input type="text" name="tin_noi_bat" value="<?= $data['tin_noi_bat']?>"/></td>
        </tr>
        <tr>
            <td>Ảnh đại diện</td>
            <td><input type="text" name="anh_dai_dien" value="<?= $data['anh_dai_dien']?>"/></td>
        </tr>
        <tr>
            <td>Nhóm tin tức</td>
            <td>
                <select name="category_id">
                    <?php while($row = mysqli_fetch_array($kq)){ ?>
                        <option <?php echo $data['category_id']==$row['category_id']?' selected ':'' ?> value="<?php echo $row['category_id'] ?>"><?php echo $row['name'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><button name="luu" value="sua">Lưu</button></td>
            <td><button name="huy" value="huy">Hủy</button></td>
        </tr>
    </table>
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
</form>
</body>
</html>

