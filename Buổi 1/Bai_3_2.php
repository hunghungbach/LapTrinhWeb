<?php
function tong($a, $b){
    return $a + $b;
}

function hieu($a, $b){
    return $a - $b;
}

function tich($a, $b){
    return $a * $b;
}

function thuong($a, $b){
    if($b == 0){
        return "Không thể chia được cho 0 đâu má!";
    }
    return $a / $b;
}

function soNguyenTo($n){
    if($n<2) return false;
    for($i=2; $i <= sqrt($n); $i++){
        if($n % $i == 0) return false;
    }
    return true;
}

function chanLe($n){
    return($n % 2 == 0) ? "Chẵn" : "Lẻ";
}
?>