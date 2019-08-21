<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tile</title>
</head>
<body>
<?php
if(isset($_POST['so1'])&&isset($_POST['so2'])){
    $so1=$_POST['so1'];
    $so2=$_POST['so2'];
    $tong=0;
    $tongle=0;
    $tongchan=0;
    $tich=1;
    for($i=$so1;$i<=$so2;$i++){
        $tong+=$i;
    }
    for($i=$so1;$i<=$so2;$i++){
        $tich*=$i;
    }
    for($i=$so1;$i<=$so2;$i++){
        if($i%2==0){
            $tongchan+=$i;
        }
    }
    for($i=$so1;$i<=$so2;$i++){
        if($i%2==1){
            $tongle+=$i;
        }
    }
}
?>
<form action="tong.php" method="post">
    <table width="728" border="1">
        <tr>
            <td width="122">&nbsp;</td>
            <td width="76">Số bắt đầu</td>
            <td width="169"><label for="textfield"></label>
                <input type="text" name="so1" id="textfiel" value="<?php if (isset($_POST["so1"])) echo $_POST["so1"];?> "/></td>
            <td width="152">Số kết thúc</td>
            <td width="175"><label for="textfiel2"></label>
                <input type="text" name="so2" id="textfield2" value="<?php if (isset($_POST["so2"])) echo $_POST["so2"];?> "/></td>
        </tr>
        <tr>
            <td colspan="5" align="center">Kết quả
                <label for="textfield3"></label></td>
        </tr>
        <tr>
            <td>Tổng các số</td>
            <td colspan="4"><label for="textfield4"></label>
                <input type="text" name="tong" id="textfield4" value="<?php if (isset($tong)) echo $tong;?> "/></td>
        </tr>
        <tr>
            <td>Tích các số</td>
            <td colspan="4"><label for="textfield5"></label>
                <input type="text" name="tich" id="textfield5" value="<?php if (isset($tich)) echo $tich;?> "/></td>
        </tr>
        <tr>
            <td>Tổng các số chẵn</td>
            <td colspan="4"><label for="textfield6"></label>
                <input type="text" name="tongchan" id="textfield6" value="<?php if (isset($tongchan)) echo $tongchan;?> "/></td>
        </tr>
        <tr>
            <td>Tổng các số lẻ</td>
            <td colspan="4"><label for="textfield7"></label>
                <input type="text" name="tongle" id="textfield7" value="<?php if (isset($tongle)) echo $tongle;?> "/></td>
        </tr>
        <tr>
            <td colspan="5"><input type="submit" name="button" id="button" value="Tính toán" /></td>
        </tr>
</table>
</form>
</body>

