<?php
require_once 'connection.php';

class Song extends Connection
{
      private $id;

      public function allSongs()
      {
            $sql = "SELECT songs.* , artists.name as artist , albums.name as album FROM `songs` inner join albums on songs.album_id= albums.id inner join artists on artists.id=albums.artist_id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
      }
      public function getSong()
      {
            $sql = "SELECT * FROM songs where id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$this->id]);
            $result = $stmt->fetch();
            return $result;
      }
      public function insert($sql)
      {
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            // header("location: ../songs.php");
            // die;
      }
}
