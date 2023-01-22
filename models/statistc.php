<?php
require_once 'connection.php';

class Statistic extends Connection
{
  public $table;
  public $column;

  public function countt()
  {
    $sql = "SELECT count(id) FROM $this->table";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch()['count(id)'];
    return $result;
  }
}
