<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tile</title>
</head>
<body>
<?php
if(isset($_POST['ho_va_ten'])){
    $ho_va_ten=$_POST['ho_va_ten'];
    $xuat = "Chào anh".$ho_va_ten;
}

?>
<form action="bai1_loichao.php" method="post" >
<table width="800px" border="2px" >
    <tr>
        <td colspan="2" style="background-color: red">
            In lời chào
        </td>
    </tr>
    <tr>
        <td width="400px"> Họ và tên</td>
        <td width="400px"> <input type="text" name="ho_va_ten" id="chao" > </td>
     </tr>
    <tr>
        <td width="400px"> </td>
    </tr>
    <tr>
        <td colspan="2">
            <label><?php echo $xuat; ?></label>
             </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <button>Click</button>
        </td>
    </tr>
</table>
</form>
</body>

