<?php
require_once 'connection.php';

class Category extends Connection
{
      private $id;

      public function allCategories()
      {
            $sql = "SELECT * FROM categories";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
      }
      public function getUser()
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
