<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tile</title>
</head>
<body>
<?php
$chu='';
if(isset($_POST['so'])){
    switch ($_POST['so']){
        case 0: $chu="Khong";break;
        case 1: $chu="mot";break;
        case 2: $chu="hai";break;
        default: $chu="khong hop le";break;
    }
}
?>
<form action="switch_case.php" method="post">
<table width="800px" border="2px" >
    <tr>
        <td colspan="3" style="background-color: red">
            đọc số cùng Quang
        </td>
    </tr>
    <tr>
        <td width="200px"> Nhập số (0-9)</td>
       <td width="200px" rowspan="2"> <input type="submit" name="button" value="Submit"></td>
        <td>bằng chữ</td>
     </tr>
    <tr>
        <td>
           <label for="text"></label>
            <input id="text" type="text" name="so"">
            <label for="text2"></label>
            <input id="text2" type="text" name="chu" value="<?php echo $chu; ?>">
        </td>
    </tr>
</table>
</form>
</body>

