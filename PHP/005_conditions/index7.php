<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>

</pre>
<?php
$month = date('m');
echo "Tháng hiện tại: ".$month;
echo "<br>";
switch ($month){
    case 7: echo 'Mùa thu';break;
    case 8: echo 'Mùa thu';break;
    case 9: echo 'Mùa thu';break;
    case 1: echo 'Mùa xuân';break;
    case 2: echo 'Mùa xuân';break;
    case 3: echo 'Mùa xuân';break;
    case 4: echo 'Mùa hạ';break;
    case 5: echo 'Mùa hạ';break;
    case 6: echo 'Mùa hạ';break;
    default: echo "không xác định được";
}

?>
</body>
</html>


