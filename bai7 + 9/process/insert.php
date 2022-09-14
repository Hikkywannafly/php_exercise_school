<?php
require_once('../connect.php');
$type = isset($_POST['type']) ? $_POST['type'] : false;
$number = isset($_POST['number']) ? $_POST['number'] : false;
$visible = isset($_POST['visible']) ? $_POST['visible'] : false;
// $image = isset($_FILES['uploadfile']) ? $_FILES['uploadfile'] : false;
$image = isset($_FILES['fileimg']) ? $_FILES['fileimg'] : false;

if (
    $type !== false
    && $number !== false
    && $visible !== false
    && $image !== false

) {
    $folder = '../img/';
    $img = $_FILES['fileimg']['name'];
    $imgg = $_FILES['fileimg']['tmp_name'];
    move_uploaded_file($imgg,   $folder . $img);
    $result = insert('books', array(
        'type' => $type,
        'number' => $number,
        'visible' => $visible,
        'image' =>  $img
    ));
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
    <form method='POST' action='./insert.php' enctype="multipart/form-data">
        <h4>
            ten the loai
        </h4>
        <input type='text' name="type" />
        <h4>
            thu tu
        </h4>
        <input type='text' name="number" />
        <h4>
            an hien
        </h4>
        <select name="visible">
            <option value="0">an</option>
            <option value="1">hien</option>

        </select>
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