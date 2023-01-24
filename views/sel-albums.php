<?php
require_once '../models/album.php';
$a = (new Album);
$a->id = $_POST['id_artist'];
$albums = $a->getAlbums();
// var_dump($albums);
foreach ($albums as $album) {
      echo "<option value='" . $album['id'] . "'>" . $album['name'] . "</option>";
}
// return $r;
