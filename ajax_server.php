<?php
// $gods = array( [
//     {"name": "Shiva", "age": 2000},
//     {name: "Bramha", age: 9000},
//     {name: "Krishna", age: 6000},
// ]);
$gods = array();
$gods[] = "Krishna";
$gods[] = "Kshiva";
$gods[] = "Shiva";
$gods[] = "Bramha";
$gods[] = "Ram";

$searchString = strtolower($_GET['search']);

// print_r($gods)
//  print_r can print array
$hint = "";
$len = strlen($searchString);
if($len == 0){
    $hint = "";
    exit(0);
}
foreach($gods as $god){
    if($searchString == strtolower(substr($god, 0, $len))){
        $hint= $hint.$god.' ,';
    }
}
print_r($hint);


?>