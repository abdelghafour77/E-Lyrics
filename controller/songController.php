<?php
require_once '../models/song.php';
$data = $_POST;
$p = (count($_POST) - 1) / 5;

for ($i = 0; $i < $p; $i++) {
  $picture = $_FILES['picture' . $i]['tmp_name'];
  $u[$i] = $_FILES['picture' . $i]['name'];
  echo $_FILES['picture' . $i]['name'] . "<br>";
  move_uploaded_file($picture, "../assets/img/songs/" . $_FILES['picture' . $i]['name']);
}

$e = [];
for ($i = 0; $i < $p; $i++) {
  $r = "('" . $data['name' . $i] . "','" . $data['description' . $i] . "','" . $data['lyrics' . $i] . "','" . $data['category' . $i] . "','" . $data['album' . $i] . "','" . $u[$i] . "')";
  $e[] = $r;
}
$t = implode(",", $e);
$sql = "INSERT INTO `songs`(`name`, `description`, `lyrics`, `category_id`,`album_id`,`image`) VALUES $t ;";
$t = new Song();
$t->insert($sql);
