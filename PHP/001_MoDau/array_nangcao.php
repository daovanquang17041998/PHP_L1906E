<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bài tập Mảng</title>
</head>
<body>
<?php

$mang_so = array();
function tao_mang($n){
	$mang_so = array();
	for($i = 0; $i < $n; $i++){
		$mang_so[$i] = mt_rand(0,100);
	}
	return $mang_so;
}

function xuat_mang($mang_so){
    echo implode(" ", $mang_so);
}
function tim_min($mang_so){
    if(isset($mang_so[0])){
        $min = $mang_so[0];
        $n = count($mang_so);
        for($i = 1; $i < $n; $i++){
            if($mang_so[$i] < $min)
                $min = $mang_so[$i];
        }
        echo $min;
    }
}

function tim_max($mang_so){

    if(isset($mang_so[0])){
        $max = $mang_so[0];
        $n = count($mang_so);
        for($i = 1; $i < $n; $i++){
            if($mang_so[$i] > $max){
                $max = $mang_so[$i];
            }
        }
        echo $max;
    }
}
function tinh_tong($mang_so){
    $tong_so = 0;
    $n = count($mang_so);
    for($i = 0; $i < $n; $i++)
        $tong_so += $mang_so[$i];
    echo $tong_so;
}
if (isset($_POST['Tinh'])) {
    $n=$_POST["mang"];
    $mang_so=tao_mang($n);
}
?>
<form action="array_nangcao.php" method="post" >
    <table width="806" border="1" style="margin-left: 200px;margin-top: 100px">
        <tr>
            <td colspan="2" bgcolor="#336699"><strong>Phát sinh mảng và tính toán</strong></td>
        </tr>
        <tr>
            <td>
            Nhập số phần tử:
            </td>
            <td>
                <input type="text" name="mang" />
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" valign="middle"><input type="submit" name="Tinh" id="Quang" value="Phát sinh và tính toán" /></td>
        </tr>
        <tr>
            <td>
                Mảng:
            </td>
            <td>
                <label for="textfield2"></label>
                <input name="textfield" type="text" id="textfield2" style="width: 700px" disabled value="<?php echo xuat_mang($mang_so); ?>" /></tr>
            </td>
        </tr>
        <tr>
            <td>
               GTLN(MAX) trong mảng:
            </td>
            <td>
                <label for="textfield2"></label>
                <input name="textfield" type="text" id="textfield2" style="width: 700px" disabled value="<?php  echo tim_max($mang_so); ?>" /></tr>
        </td>
        </tr>
        <tr>
            <td>
                GTLN(MIN) trong mảng:
            </td>
            <td>
                <label for="textfield2"></label>
                <input name="textfield" type="text" id="textfield2" style="width: 700px" disabled value="<?php echo tim_min($mang_so); ?>" /></tr>
        </td>
        </tr>
        <tr>
            <td>
                Tổng mảng:
            </td>
            <td>
                <label for="textfield2"></label>
                <input name="textfield" type="text" id="textfield2" style="width: 700px" disabled value="<?php  echo tinh_tong($mang_so); ?>" /></tr>
        </td>
        </tr>
    </table>
</form>
</body>
</html>

