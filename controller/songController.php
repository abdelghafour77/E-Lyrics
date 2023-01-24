<?php
require_once '../models/user.php';
$data = json_decode(file_get_contents("php://input"), true);
// var_dump($data);
// die;
$e = [];
foreach ($data as $d) {
  $r = "('" . $d['name'] . "','" . $d['description'] . "','" . $d['lyrics'] . "','" . $d['category'] . "','" . $d['album'] . "')";
  $e[] = $r;
}
$t = implode(",", $e);
$sql = "INSERT INTO `songs`(`name`, `description`, `lyrics`, `category_id`,`album_id`) VALUES $t ;";
echo $sql;
