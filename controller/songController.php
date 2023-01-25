<?php
require_once '../models/song.php';
// var_dump($_FILES);
// die;
// $data = json_decode(file_get_contents("php://input"), true);
// $data = json_decode($_POST['data'], true);
// var_dump($_POST);
$data = $_POST;
$p = (count($_POST) - 1) / 5;
// echo "hello " . $p;
// var_dump($_FILES);
// echo "-----------------------";
// for ($i = 0; $i < 2; $i++) {
//   echo "('" . $_POST['name1'] . "','" . $_POST['description1'] . "','" . $_POST['lyrics1'] . "','" . $_POST['category1'] . "','" . $_POST['album1'] . "','" . $_POST['category1'] . "')";
// }
// die;
for ($i = 0; $i < $p; $i++) {
  $picture = $_FILES['picture' . $i]['tmp_name'];
  $u[$i] = $_FILES['picture' . $i]['name'];
  echo $_FILES['picture' . $i]['name'] . "<br>";

  move_uploaded_file($picture, "../assets/img/songs/" . $_FILES['picture' . $i]['name']);
}


// var_dump($r);
$e = [];
for ($i = 0; $i < $p; $i++) {
  echo $p;
  $r = "('" . $data['name' . $i] . "','" . $data['description' . $i] . "','" . $data['lyrics' . $i] . "','" . $data['category' . $i] . "','" . $data['album' . $i] . "','" . $u[$i] . "')";
  $e[] = $r;
}
$t = implode(",", $e);
$sql = "INSERT INTO `songs`(`name`, `description`, `lyrics`, `category_id`,`album_id`,`image`) VALUES $t ;";
$t = new Song();
$t->insert($sql);
echo $sql;
die;
