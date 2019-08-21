<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tile</title>
</head>
<body>
<?php
if(isset($_POST['a'])&&isset($_POST['b'])){
    $tong=0;
    $tich=1;
    $tongchan=0;
    $tongle=0;
    $a=$_POST['a'];
    $b=$_POST['b'];
    for($i=$a;$i<=$b;$i++){
        $tong+=$i;
    }
    for($i=$a;$i<=$b;$i++){
        $tich*=$i;
    }
    for($i=$a;$i<=$b;$i++){
        if($i%2==0){
            $tongchan+=$i;
        }
    }
    for($i=$a;$i<=$b;$i++){
        if($i%2==1){
            $tongle+=$i;
        }
    }
}
?>
<form action="bai4.php" method="post">
<table border="2px">
<tr>
    <td>Số bắt đầu</td>
    <td><input name="a" type="text"></td>
    <td>Số kết thúc</td>
    <td><input name="b" type="text"></td>
</tr>
    <tr><td colspan="4">Kết  quả</td></tr>
    <tr>
        <td>Tổng các số</td>
        <td><label><?php echo "".$tong?></label></td>
    </tr>
    <tr>
        <td>Tích các số </td>
        <td><label><?php echo "".$tich?></label></td>
    </tr>
    <tr>
        <td>Tổng các số chẵn</td>
        <td><label><?php echo "".$tongchan?></label></td>
    </tr>
    <tr>
        <td>Tổng các lẻ</td>
        <td><label><?php echo "".$tongle?></label></td>
    </tr>
    <tr><td colspan="4"><input type="submit" value="tính toán"></td></tr>
</table>
</form>

</body>

