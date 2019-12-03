<?php 
function countArr($arr){
    return count($arr);
}

function totalArr($arr){
    $sum = 0;
    for ($i = 0; $i < countArr($arr); $i++){
        $sum = $sum + $arr[$i];
    }
    return $sum;
}
?>