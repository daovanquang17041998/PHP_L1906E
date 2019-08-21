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
class student{
    public $name ;
    private $age ;
    private $adress;
    function  info($name,$age,$adress)
    {
        $this->name = $name;
        $this->age = $age;
        $this->adress = $adress;
    }
}
$a = new student();
print_r($a);
?>
</body>
</html>
