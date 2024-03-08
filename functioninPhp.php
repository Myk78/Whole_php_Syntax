<?php
function myk($myk){
    return "{$myk['dost']} bhai h {$myk['myself']} ka <br/>";
}
$friend = myk(['dost' => 'jazy', 'myself' => 'yaseen']);
echo $friend;


$name= 'myk';

function saybye($name){
    // global $name;
    $name = "jazy";
    echo "bye $name";


}
saybye($name);
echo $name ;


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>