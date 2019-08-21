<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bài tập Mảng</title>
</head>
<body>
<?php
$mang=array();
$solan=array();
$mangduynhat=array();
if(isset($_POST['mang'])){
    $mang=explode(",",$_POST['mang']);
    $mangduynhat= array_unique($mang);
    $solan= array_count_values($mang);
}
function so_lan_xuat_hien($mang){
    if(isset($mang[0])){
        $chuoiso="";
        foreach ($mang as $key => $value){
            $chuoiso.=$key.":".$value."";
        }
        echo $chuoiso;
    }
}
function mang_duy_nhat($mang){
if(isset($mang[0])){
    echo implode(",",$mang);
    }
}
?>
<form action="bai4.php" method="post" >
    <table width="806" border="1" style="margin-left: 200px;margin-top: 100px">
        <tr>
            <td colspan="2" bgcolor="#336699"><strong>DEM SO LAN XUAT HIEN VA TAO MANG DUY NHAT</strong></td>
        </tr>
        <tr>
            <td>
            Mang :
            </td>
            <td>
                <input type="text" name="mang" "/>
            </td>
        </tr>

        <tr>
            <td>
                Số lần xuất hiện:
            </td>
            <td>
                <label for="textfield2"></label>
                <input name="textfield" type="text" id="textfield2" style="width: 700px" disabled value="<?php so_lan_xuat_hien($solan); ?>" /></tr>
        </td>
        </tr>
        <tr>
            <td>
               Mảng duy nhất:
            </td>
            <td>
                <label for="textfield2"></label>
                <input name="textfield" type="text" id="textfield2" style="width: 700px" disabled value="<?php mang_duy_nhat($mangduynhat); ?>" /></tr>
        </td>
        </tr>
        <tr>
            <td colspan="2" align="center" valign="middle"><input type="submit" name="Thuc hien" id="Quang" value="Thực hiện" /></td>
        </tr>

    </table>
</form>
</body>
</html>

