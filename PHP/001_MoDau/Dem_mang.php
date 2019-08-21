<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bài tập Mảng</title>
</head>
<body>
<?php
$mang_a=array();
$mang_b=array();
$mang_c=array();
function tao_mang($nhap_mang){
    return explode(",",$nhap_mang);
}
function xap_xep_tang($mang){
    if(isset($mang[0])){
        sort($mang);
        echo implode(",",$mang);
    }
}
function xap_xep_giam($mang){
    if(isset($mang[0])){
        rsort($mang);
        echo implode(",",$mang);
    }
}
if(isset($_POST['manga'])&&isset($_POST['mangb'])){
    $mang_1=$_POST['manga'];
    $mang_2=$_POST['mangb'];
    $mang_a=tao_mang($mang_1);
    $mang_b=tao_mang($mang_2);
    $mang_c=array_merge($mang_a,$mang_b);
}
?>
<form action="Dem_mang.php" method="post" >
    <table width="806" border="1" style="margin-left: 200px;margin-top: 100px">
        <tr>
            <td colspan="2" bgcolor="#336699"><strong>DEM MANG PHAN TU VA SAP XEP</strong></td>
        </tr>
        <tr>
            <td>
            Mang A:
            </td>
            <td>
                <input type="text" name="manga" "/>
            </td>
        </tr>

        <tr>
            <td>
                Mang b:
            </td>
            <td>
                <input type="text" name="mangb" "/>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" valign="middle"><input type="submit" name="Tinh" id="Quang" value="Thực hiện" /></td>
        </tr>
        <tr>
            <td>
                Số phần tử mảng A:
            </td>
            <td>
                <label for="textfield2"></label>
                <input name="textfield" type="text" id="textfield2" style="width: 700px" disabled value="<?php echo count($mang_a); ?>" /></tr>
            </td>
        </tr>
        <tr>
            <td>
                Số phần tử mảng B:
            </td>
            <td>
                <label for="textfield2"></label>
                <input name="textfield" type="text" id="textfield2" style="width: 700px" disabled value="<?php echo count($mang_b);?>" /></tr>
        </td>
        </tr>
        <tr>
            <td>
               Mảng C:
            </td>
            <td>
                <label for="textfield2"></label>
                <input name="textfield" type="text" id="textfield2" style="width: 700px" disabled value="<?php echo implode(",",$mang_c);?>" /></tr>
        </td>
        </tr>
        <tr>
            <td>
               Mảng C tăng dần
            </td>
            <td>
                <label for="textfield2"></label>
                <input name="textfield" type="text" id="textfield2" style="width: 700px" disabled value="<?php xap_xep_tang($mang_c);?>" /></tr>
        </td>
        </tr>
        <tr>
            <td>
                Mảng C giảm dần
            </td>
            <td>
                <label for="textfield2"></label>
                <input name="textfield" type="text" id="textfield2" style="width: 700px" disabled value="<?php  xap_xep_giam($mang_c) ?>" /></tr>
        </td>
        </tr>
    </table>
</form>
</body>
</html>

