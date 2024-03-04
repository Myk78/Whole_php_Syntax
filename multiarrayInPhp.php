<?php 


// multi - dimensional arrays


// this is multidimensional indexed array

$blogs =[
    ['Allahdin','Yaseen','Ali','Shazi'],
    ['Myk','Ash','jazy'],
    ['Jay','yaj','Ajy']
];
// printf($blogs[1]);
// print_r($blogs);         // it show all the array
// print_r($blogs[1]);         // it show selective index array
// print_r($blogs[1][2]);       // it show selective value in selective index array


// Associative array
$bobbyBhai =[
    ['Father' => 'Allahdin', 'Son1' =>'Yaseen', 'Son2' =>'Ali','Son3' =>'Shazi'],
    ['Father' => 'Myk', 'Sons' =>'Ash','Jazy'],

];

print_r($bobbyBhai[0]);
?>