<?php
$mang_so = array();
$mang_duy_nhat = array();
$so_lan = array();
$n = isset($_POST["nhap_mang"]) ? $_POST["nhap_mang"] : '';
if ($n !== '') {
    $mang_so = explode(",", $n);
    $mang_duy_nhat = array_unique($mang_so);
    $so_lan = array_count_values($mang_so);
}
$chuoi = "";
foreach ($so_lan as $key => $value) {
    $chuoi = $chuoi . $key . ":" . $value . " ";
}
function mang_duy_nhat($mang_so)
{
    if (isset($mang_so[0])) {
        echo implode(", ", $mang_so);
    }
}