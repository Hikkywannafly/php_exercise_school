<?php
require_once('../connect.php');
$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE id = $id";
$row = get_list($sql);

$type = isset($_POST['type']) ? $_POST['type'] : false;
$number = isset($_POST['number']) ? $_POST['number'] : false;
$visible = isset($_POST['visible']) ? $_POST['visible'] : false;
$image = isset($_FILES['fileimg']) ? $_FILES['fileimg'] : false;


if (
    $type !== false
    && $number !== false
    && $visible !== false

) {

    $arr = (array(
        'type' => $type,
        'number' => $number,
        'visible' => $visible,
    ));
    if ($image !== false) {
        $folder = '../img/';
        $img = $_FILES['fileimg']['name'];
        $imgg = $_FILES['fileimg']['tmp_name'];
        move_uploaded_file($imgg,   $folder . $img);
        $arr['image'] = $img;
        // echo $img;
        // print_r($arr);

    }
    $result = update('books', $arr, $id);
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method='POST' action='./update.php?id=<?= $id ?>' enctype="multipart/form-data">
        <h4>
            ten the loai
        </h4>
        <input type='text' name="type" value="<?= $row[0]['type'] ?>" />
        <h4>
            thu tu
        </h4>
        <input type='text' name="number" value='<?= $row[0]['number'] ?>' />
        <h4>
            an hien
        </h4>
        <select name="visible">
            <option value="0" <?= $row[0]['visible'] == 0 ? 'selected' : '' ?>>an</option>
            <option value="1" <?= $row[0]['visible'] == 1 ? 'selected' : '' ?>>hien</option>

        </select>
        <img src="../img/<?= $row[0]['image']  ?>" width="40" height="40">
        <h4>
            bieu tuong
        </h4>
        <input type='file' name="fileimg" multiple accept="image/jpeg, image/png, image/jpg" />

        <br>
        <button type='submit'>
            submit
        </button>
    </form>
</body>

</html>