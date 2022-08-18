<?php
$ket_qua = 0;
$mang_so = 0;
if (isset($_POST['btn_goi'])) {
    $mang_so = explode(",", $_POST['nhap_mang']);
    $n = count($mang_so);
    for ($i = 0; $i < $n; $i++) {
        $ket_qua += $mang_so[$i];
    }
}