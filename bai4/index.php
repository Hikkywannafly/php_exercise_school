<?php
require_once('process.php');
$result = 'Không có giá trị nào cả';
$counter = 0;
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>

    <form action="index.php" method="post">
        <table width="728" border="1">
            <tr>
                <td width="122">&nbsp;</td>
                <td width="76">Số bắt đầu</td>
                <td width="169"><label for="textfield"></label>
                    <input type="text" name="frist_num" id="textfield"
                        value=" <?php if (isset($frist_num)) echo $frist_num; ?>" />
                </td>
                <td width="152">Số kết thúc</td>
                <td width="175"><label for="textfield2"></label>
                    <input type="text" name="second_num" id="textfield2"
                        value=" <?php if (isset($second_num)) echo $second_num; ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="5">Kết quả
                    <label for="textfield3"></label>
                </td>
            </tr>


            <tr>
                <td colspan="5" style="color: red">
                    <label for="textfield3"> <?= $msg ?></label>
                </td>
            </tr>

            <tr>
                <td>Tổng các số</td>
                <td colspan="4"><label for="textfield4"></label>
                    <input type="text" name="tong" id="textfield4"
                        value="<?= $result_sum_num != 0 ? $result_sum_num : $result ?>" />
                </td>
            </tr>
            <tr>
                <td>Tích các số</td>
                <td colspan="4"><label for="textfield5"></label>
                    <input type="text" name="tich" id="textfield5"
                        value="<?= $result_mutil_num != 1 ? $result_mutil_num : $result ?>" />
                </td>
            </tr>
            <tr>
                <td>Tổng các số chẵn</td>
                <td colspan="4"><label for="textfield6"></label>
                    <input type="text" name="tong_chan" id="textfield6"
                        value="<?= $result_sum_even != 0 ? $result_sum_even : $result ?>" />
                </td>
            </tr>
            <tr>
                <td>Tổng các số lẻ</td>
                <td colspan="4"><label for="textfield7"></label>
                    <input type="text" name="tong_le" id="textfield7"
                        value="<?= $result_sum_odd != 0 ? $result_sum_odd : $result ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="5"><input type="submit" name="submit" id="submit" value="Tính" /></td>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>