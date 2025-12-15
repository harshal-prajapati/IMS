<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <br><br>
        <br><br>
    <input type="text" value="Enter a Value" name="val">
    </center>
</body>
</html>

<?php

$val= $_POST['val'];
$ary = array("Samsung", "Vivo", "Oppo", "Realme", "Oneplus", "Apple");

foreach($ary as $val)
{
    echo " Array is: ".$val. "<br>";
}

?>