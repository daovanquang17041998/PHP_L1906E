<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>
<body>
<?php
$kq = 0;
$mang = 0;
if (isset($_GET['Tong'])) {
    $mang = explode(",", $_GET['Nhap_mang']);
    $n = count($mang);
    for ($i = 0; $i < $n; $i++) {
        $kq += $mang[$i];
    }
}
?>
<form action="array.php" method="get" >
    <table width="806" border="1" style="margin-left: 200px;margin-top: 100px">
        <tr>
            <td colspan="2" bgcolor="#336699"><strong>Nhập và tính tổng dãy số</strong></td>
        </tr>
        <tr>
            <td>
            Nhập dãy số:
            </td>
            <td>
                <input type="text" name="Nhap_mang" />
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" valign="middle"><input type="submit" name="Tong" id="Quang" value="Tổng dãy số" /></td>
        </tr>
        <tr>
            <td>
                Tổng dãy số:
            </td>
            <td>
                <label for="textfield2"></label>
                <input name="textfield" type="text" id="textfield2" style="width: 700px" disabled value="<?php if (isset($kq)) echo $kq; ?>" /></tr>
            </td>
        </tr>
    </table>
</form>
</body>
</html>

