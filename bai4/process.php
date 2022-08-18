<?php
$frist_num = isset($_POST['frist_num']) ? $_POST['frist_num'] : false;
$second_num = isset($_POST['second_num']) ? $_POST['second_num'] : false;
$result_sum_num = 0;
$result_mutil_num = 1;
$result_sum_even = 0;
$result_sum_odd = 0;
$isError = false;
$msg = '';

function validate_num($frist_num, $second_num)
{
    if (!is_numeric($frist_num) || !is_numeric($second_num)) {
        return false;
    }
    return true;
}
function validate_null($frist_num, $second_num)
{
    if ($frist_num == ' ' || $second_num == ' '|| $frist_num == '' || $second_num == '') {
        return false;
    }
    return true;
}
if ($frist_num !== false && $second_num !== false) {
    if (!validate_null($frist_num, $second_num)) {
        $isError = true;
        $msg .= '<br> [Error] Không được để trống ';
    }
    if (!validate_num($frist_num, $second_num)) {
        $isError = true;
        $msg .= '<br> [Error] Vui Lòng chỉ nhập số';
    }
    if (!$isError) {
        for ($i = $frist_num; $i <= $second_num; $i++) {
            $result_sum_num += $i;
            $result_mutil_num *= $i;
            if ($i % 2 == 0) {
                $result_sum_even += $i;
            } else {
                $result_sum_odd += $i;
            }
        }
    }
}