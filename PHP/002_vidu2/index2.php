<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    biến trong php
</pre>
<?php
$ten = "Quang";
$tuoi = "22";
$que  = "Hà Nội";
echo "<br> Tên: ".$ten;
echo "<br> Tuổi: ".$tuoi;
echo "<br> Quê: ".$que;
?>
<pre>
    biến trong php
</pre>
<?php
//comment
$ten = "Quang";
$tuoi = "22";
$que  = "Hà Nội";
echo "<br> Tên: $ten";
echo '<br> Tuổi: $tuoi';
$x = 5;
function test(){
    $x = 5;
    echo "Biến x: $x";
}
test();
?>
</body>
</html>