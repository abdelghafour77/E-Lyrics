<?php
require_once '../models/user.php';
// var_dump($_FILES);
// die;
// $data = json_decode(file_get_contents("php://input"), true);
$data = json_decode($_POST['data'], true);
$picture = $_FILES['picture'];

// var_dump($data);
// die;
foreach ($_FILES['picture']['name'] as $index => $name) {
  $tmpFilePath = $_FILES['picture']['tmp_name'][$index];
  $newFilePath = "uploads/" . $name;
  if (move_uploaded_file($tmpFilePath, $newFilePath)) {
    echo "File moved successfully";
  }
}


$e = [];
foreach ($data as $d) {
  $r = "('" . $d['name'] . "','" . $d['description'] . "','" . $d['lyrics'] . "','" . $d['category'] . "','" . $d['album'] . "')";
  $e[] = $r;
}
$t = implode(",", $e);
$sql = "INSERT INTO `songs`(`name`, `description`, `lyrics`, `category_id`,`album_id`) VALUES $t ;";
echo $sql;
