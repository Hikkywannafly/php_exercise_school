<?php
require_once('../connect.php');
$id = $_GET['id'];
remove($id);

header("Location: ../index.php");
