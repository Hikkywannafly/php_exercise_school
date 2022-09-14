<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'bai7');
//connect to the database
function connect()
{
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME) or die('could not connect to database');
    header("Content-type: text/html; charset=utf-8");
    mysqli_set_charset($conn, 'UTF8');
    return $conn;
}
function disconnect($conn)
{
    mysqli_close($conn);
}

function insert($table, $data)
{
    $conn = connect();
    $field_list = '';
    $value_list = '';
    foreach ($data as $key => $value) {
        $field_list .= ",$key";
        $value_list .= ",'" . $conn->real_escape_string($value) . "'";
    }
    $query = 'INSERT INTO ' . $table . '(' . trim($field_list, ',') . ') VALUES (' . trim($value_list, ',') . ')';
    die($query);
    $result = $conn->query($query);
    disconnect($conn);
    return $result;
}
function update($table, $data, $id)
{
    $conn = connect();
    $field_list = '';
    $value_list = '';
    $fn = '';
    foreach ($data as $key => $value) {
        // $field_list .= ",$key";
        // $value_list .= ",'" . $conn->real_escape_string($value) . "'";
        $fn .= ",$key = " . "'" . $conn->real_escape_string($value) . "'";
    }
    $query = 'UPDATE ' . $table . ' SET ' . trim($fn, ',')  . " WHERE id = $id";
    die($query);
    $result = $conn->query($query);
    disconnect($conn);
    return $result;
}

function remove($id)
{
    $conn = connect();
    $sql = "DELETE FROM books WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (!$result) echo ('[<script>alert("Mật khẩu không đúng")</script>');
    disconnect($conn);
}
function get_list($sql)
{
    $conn = connect();

    $result = mysqli_query($conn, $sql);

    if (!$result) die('[Database class - get_list] Truy vấn sai');

    $return = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $return[] = $row;
    }

    mysqli_free_result($result);
    disconnect($conn);
    return $return;
}
