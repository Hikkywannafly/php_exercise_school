<?php
$n = $_POST["so_phan_tu"];
$mang_so = array($n);
for ($i = 0; $i < $n; $i++) {
    $mang_so[$i] = mt_rand(0, 20);
}

function xuat_mang($mang_so)
{
    echo implode(" ", $mang_so);
}


function tim_min($mang_so)
{
    if (isset($mang_so[0])) {
        $min = $mang_so[0];
        $n = count($mang_so);
        for ($i = 1; $i < $n; $i++) {
            if ($mang_so[$i] < $min)
                $min = $mang_so[$i];
        }
        echo $min;
    }
}

function tim_max($mang_so)
{
    if (isset($mang_so[0])) {
        $max = $mang_so[0];
        $n = count($mang_so);
        for ($i = 1; $i < $n; $i++) {
            if ($mang_so[$i] > $max) {
                $max = $mang_so[$i];
            }
        }
        echo $max;
    }
}

function tinh_tong($mang_so)
{
    $tong_so = 0;
    $n = count($mang_so);
    for ($i = 0; $i < $n; $i++)
        $tong_so += $mang_so[$i];
    echo $tong_so;
}