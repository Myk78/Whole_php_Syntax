<?php
$titains = ['myk','ash','jazy']; 

// for loop

for ($i=0 ; $i <count($titains) ; $i++) { 
    // echo 'beast' . $titains[$i] . '<br/>';
}

// foreach
$titain1 = ['myk','ash1','jazy1']; 
foreach($titain1 as $titain){
    // echo 'beast' . $titain . '<br/>';
}

// now we take some diffcult exp

$products =[
    ['name' => 'Apple', 'price' => '30 rupees'],
    ['name' => 'banana', 'price' => '30 rupees'],
    ['name' => 'Ornage', 'price' => '30 rupees'],
    ['name' => 'pine', 'price' => '300/ rupees'],
    ['name' => 'vine', 'price' => '3000 rupees'],
];
 foreach($products as $product) {
    // echo 'the product is    ' .$product['name'] .'  and the price is    ' .$product['price'] .'<br/>';
 }

 // while
 $a =0;
 // = say key 5 undefind ahri h is puchna h jazy say
 while ($a < count($products)) {
    echo 'the name of product is '. $products[$a]['name'] . '<br/>';
    $a++;
    # code...
 }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h3> Productlist</h3>
        <?php foreach($products as $pro){ ?> 
            <h4>item name <?php echo $pro['name']  ?></h4>
            <p>and the price is  <?php echo $pro['price']?></p>
            <?php } ?>

    </div>
    
</body>
</html>