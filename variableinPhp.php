<?php

// this how we make a variable
// $first_name = 'Yaseen';

// constant
// is differ from variable in this we write define then write the value in their paranthesis
define('Name', 'Yaseen');
$age = 22;
echo Name;
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello </h1>
    <!-- <div><?php echo $first_name, $age ?></div> -->
    <div><?php echo Name, $age ?></div>
    
</body>
</html>