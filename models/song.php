<?php
require_once 'connection.php';

class Song extends Connection
{
      private $id;

      public function allSongs()
      {
            $sql = "SELECT * FROM artists";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
      }
      public function getSong()
      {
            $sql = "SELECT * FROM users where id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$this->id]);
            $result = $stmt->fetch();
            return $result;
      }
}
// $a = new Category();
// var_dump($a->allCategories());
