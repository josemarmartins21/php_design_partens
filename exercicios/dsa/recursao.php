<?php

/* $v = 5;
$r = 0;
fat($v, $r);

function contar(int $v) {
    print $v . PHP_EOL;
    if ($v == 10) {
        return;
    }
    contar($v + 1);
}

function fat($v) {
    if ($v == 1) {
        return 1;
    } else {
        return $v * fat($v -1);
    }

}




$vetor = [1, 2, 1];

function soma($v = []) {
    $i = 1;
    if (count($v) === $i) {
        return $v;
    }

    $v += soma($v[0 + $i]);

} */
$arr = [12, 1, 30, 29, 69];
insertionSort($arr);

for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i] . PHP_EOL;
}

function insertionSort(&$arr = []) {
    $j = 0; $aux = 0;

    for ($i=1; $i < count($arr); $i++) { 
        $aux = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $aux) {
            $arr[$i] = $arr[$j];
            $j--;
        }

        $arr[$j+1] = $aux;
    }
}