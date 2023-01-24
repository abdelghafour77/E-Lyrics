<?php
require_once 'connection.php';

class Album extends Connection
{
      public $id;

      public function allArtists()
      {
            $sql = "SELECT * FROM artists";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
      }
      public function getAlbums()
      {
            $sql = "SELECT * FROM albums where artist_id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$this->id]);
            $result = $stmt->fetchAll();
            return $result;
      }
}
// $a = new Category();
// var_dump($a->allCategories());
