<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tile</title>
</head>
<body>
<?php
if(isset($_POST['so'])){
    switch ($_POST['so']){
        case 1: $doc ="mot";break;
        case 2: $doc ="hai";break;
        case 3: $doc ="ba";break;
        case 4: $doc ="bon";break;
        case 5: $doc ="nam";break;
        case 6: $doc ="sau";break;
        case 7: $doc ="bay";break;
        case 8: $doc ="tam";break;
        case 9: $doc ="chin";break;
        default: $doc="sai";
    }
}
?>
<form action="bai3.php" method="post">
<table border="2px">
<tr><td colspan="3">đọc số</td></tr>
    <tr>
        <td>Nhập số (0-9)</td>
        <td rowspan="2"><input name="so" type="submit"></td>
        <td>Bằng chữ</td>
    </tr>
    <tr>
        <td><input name="so" type="text"></td>
        <td><label><?php echo $doc;?></label></td>
    </tr>
</table>
</form>

</body>

