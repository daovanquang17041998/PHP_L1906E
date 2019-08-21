<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tile</title>
</head>
<body>
<?php
if(isset($_POST['tinh'])){
    $kq='';
    $a=$_POST['a'];
    $b=$_POST['b'];
    if($a==0){
        if($b==0){
            $kq= "phương trình có vô số nghiệm";
        }
        elseif ($b<>0){
           $kq= "phương trình vô nghiệm";
        }

    }
    else{
        $kq=-$b/$a;
    }
}
?>
<form action="bai2.php" method="post">
<table border="2px">
<tr><td colspan="3">giai ptb1</td></tr>
    <tr>
        <td>phương trình <input type="text" name="a"></td>
        <td>X+ <input type="text" name="b"></td>
        <td>=0</td>
    </tr>
    <tr><td colspan="3">nghiệm: <label><?php echo $kq;?></label></td></tr>
    <tr><td><input type="submit" value="tính" name="tinh"></td></tr>
</table>
</form>

</body>

