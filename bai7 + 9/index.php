<?php
require_once('./connect.php');
$data = get_list('SELECT * FROM books');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>

    <table align="center" border="1" width="600">
        <tr align="center">
            <td>Ten The Loai</td>
            <td>Thu Tu</td>
            <td>An Hien</td>
            <td>Bieu tuong</td>
            <td colspan="2"><a href="./process/insert.php">Them</a></td>
        </tr>
        <?php foreach ($data as $row) { ?>
            <tr align="center">
                <td>
                    <?= $row['type'] ?>
                </td>
                <td>
                    <?= $row['number'] ?>
                </td>
                <td>
                    <?= $row['visible'] == 0 ? 'an' : 'hien' ?>
                </td>
                <td>
                    <!-- <img src="image/<?= $row['image'] ?>" width="40" height="40" /> -->
                    <img src="./img/<?= $row['image']  ?>" width="40" height="40">

                </td>
                <td>
                    <a href=" ./process/update.php?id=<?= $row['id'] ?>">Sua</a>
                </td>
                <td>
                    <a href="./process/delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Ban co chac chan khong?');">xoa</a>
                </td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>