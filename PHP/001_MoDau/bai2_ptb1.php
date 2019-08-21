<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tile</title>
</head>
<body>
<?php
$nghiem='';
if(isset($_POST['a']) && isset($_POST['b'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    if($a==0){
        if($b==0){
            $nghiem= 'phuong trinh vo so nghiem';
        }
        if($b<>0){
            $nghiem= 'phuong trinh vo nghiem';
        }
    }
    else{
        $x=-($b/$a);
        $nghiem="X= $x";
    }
}
?>
<form action="ptb1.php" method="post">
<table width="800px" border="2px" >
    <tr>
        <td colspan="3" style="background-color: red">
            phuong trinh bac 1
        </td>
    </tr>
    <tr>
        <td width="200px"> Phuong trinh</td>
        <td> <input name="a" type="text" > X </td>
        <td> <label></label>
            <input name="b" type="text"> =0
        </td>
     </tr>
    <tr>
        <td colspan="3">
            <label for="textfile2"></label>
            <input name="kq" id="textfile2" type="text" value="<?php echo $nghiem; ?>">
        </td>
    </tr>
    <tr>
        <td colspan="3">

             </td>
    </tr>
    <tr>
        <td colspan="3" align="center">
           <input type="submit" value="Xuất" id="chao" name="chao">
        </td>
    </tr>
</table>
</form>
</body>

