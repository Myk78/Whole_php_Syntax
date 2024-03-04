<?php 
$price = 30;

// if ($price < 15) {
//     echo 'The price is low';
// } 
// elseif ($price <25) {
//     echo 'this price is greater then og if but less then elseif';
// } 
// else {
//   echo '  value is greater';
// };

$products =[
    ['name' => 'Apple', 'price' => '30 rupees'],
    ['name' => 'banana', 'price' => '30 rupees'],
    ['name' => 'Ornage', 'price' => '30 rupees'],
    ['name' => 'pine', 'price' => '300/ rupees'],
    ['name' => 'vine', 'price' => '3000 rupees'],
];

// foreach ($products as $pro) {
//     if($pro['price'] < 20 && $pro['price'] > )
//     # code...
// }

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

        <h3>Show the item </h3>
        <h5>their price is less then 20 and above then 10</h5>
        <?php foreach($products as $pro){ ?>
            <?php if ($pro['price'] < 60 && $pro['price'] > 20){ ?>
            <p>her that item 
            <?php
               echo $pro['name'] . '<br/>';
            } ?></p>
            
            <?php } ?>

    </main>
    
</body>
</html>